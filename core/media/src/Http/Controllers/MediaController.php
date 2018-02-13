<?php

namespace Botble\Media\Http\Controllers;

use Auth;
use Botble\Media\Models\MediaFile;
use Botble\Media\Models\MediaFolder;
use Botble\Media\Repositories\Interfaces\MediaFileInterface;
use Botble\Media\Repositories\Interfaces\MediaFolderInterface;
use Botble\Media\Repositories\Interfaces\MediaSettingInterface;
use Botble\Media\Services\UploadsManager;
use Carbon\Carbon;
use Exception;
use File;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Image;
use RvMedia;
use ZipArchive;

/**
 * Class MediaController
 * @package Botble\Media\Http\Controllers
 * @author Sang Nguyen
 * @since 19/08/2015 08:05 AM
 */
class MediaController extends Controller
{
    /**
     * @var MediaFileInterface
     */
    protected $fileRepository;

    /**
     * @var MediaFolderInterface
     */
    protected $folderRepository;

    /**
     * @var UploadsManager
     */
    protected $uploadManager;

    /**
     * @var MediaSettingInterface
     */
    protected $mediaSettingRepository;

    /**
     * MediaController constructor.
     * @param MediaFileInterface $fileRepository
     * @param MediaFolderInterface $folderRepository
     * @param MediaSettingInterface $mediaSettingRepository
     * @param UploadsManager $uploadManager
     * @author Sang Nguyen
     */
    public function __construct(
        MediaFileInterface $fileRepository,
        MediaFolderInterface $folderRepository,
        MediaSettingInterface $mediaSettingRepository,
        UploadsManager $uploadManager
    )
    {
        $this->fileRepository = $fileRepository;
        $this->folderRepository = $folderRepository;
        $this->uploadManager = $uploadManager;
        $this->mediaSettingRepository = $mediaSettingRepository;
    }

    /**
     * @return string
     * @author Sang Nguyen
     */
    public function getMedia()
    {
        return view('media::index');
    }

    /**
     * @return string
     * @author Sang Nguyen
     */
    public function getPopup()
    {
        return view('media::popup')->render();
    }

    /**
     * Get list files & folders
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     * @author Sang Nguyen
     */
    public function getList(Request $request)
    {
        $files = [];
        $folders = [];
        $breadcrumbs = [];

        $orderBy = $this->transformOrderBy($request->input('sort_by'));

        if ($request->has('is_popup') && $request->has('selected_file_id') && $request->input('selected_file_id') != null) {
            $current_file = $this->fileRepository->getFirstBy(['id' => $request->input('selected_file_id')], ['folder_id']);
            if ($current_file) {
                $request->merge(['folder_id' => $current_file->folder_id]);
            }
        }

        $paramsFolder = [];

        $paramsFile = [
            'order_by' => [
                'is_folder' => 'DESC',
                $orderBy[0] => $orderBy[1],
            ],
            'paginate' => [
                'per_page' => $request->input('posts_per_page', 30),
                'current_paged' => $request->input('paged', 1),
            ],
            'selected_file_id' => $request->input('selected_file_id'),
            'is_popup' => $request->input('is_popup'),
            'filter' => $request->input('filter'),
        ];

        if ($request->input('search')) {
            $paramsFolder['condition'] = [
                ['media_folders.name', 'LIKE', '%' . $request->input('search') . '%',]
            ];

            $paramsFile['condition'] = [
                ['media_files.name', 'LIKE', '%' . $request->input('search') . '%',]
            ];
        }

        switch ($request->input('view_in')) {
            case 'all_media':
                $breadcrumbs = [
                    [
                        'id' => 0,
                        'name' => trans('media::media.all_media'),
                        'icon' => 'fa fa-user-secret',
                    ],
                ];

                $queried = $this->fileRepository->getFilesByFolderId($request->input('folder_id'), $paramsFile, true, $paramsFolder);

                $folders = $queried->where('is_folder', 1)->map(function ($item) {
                    return $this->getResponseFolderData($item);
                })->toArray();

                $files = $queried->where('is_folder', 0)->map(function ($item) {
                    return $this->getResponseFileData($item);
                })->toArray();

                break;

            case 'trash':
                $breadcrumbs = [
                    [
                        'id' => 0,
                        'name' => trans('media::media.trash'),
                        'icon' => 'fa fa-trash-o',
                    ],
                ];

                $queried = $this->fileRepository->getTrashed($request->input('folder_id'), $paramsFile, true, $paramsFolder);

                $folders = $queried->where('is_folder', 1)->map(function ($item) {
                    return $this->getResponseFolderData($item);
                })->toArray();

                $files = $queried->where('is_folder', 0)->map(function ($item) {
                    return $this->getResponseFileData($item);
                })->toArray();

                break;

            case 'recent':
                $breadcrumbs = [
                    [
                        'id' => 0,
                        'name' => trans('media::media.recent'),
                        'icon' => 'fa fa-clock-o',
                    ],
                ];

                $queried = $this->fileRepository->getFilesByFolderId(-1, array_merge($paramsFile, [
                    'recent_items' => $request->input('recent_items', []),
                ]), false, $paramsFolder);

                $files = $queried->map(function ($item) {
                    return $this->getResponseFileData($item);
                })->toArray();

                break;
            case 'favorites':
                $breadcrumbs = [
                    [
                        'id' => 0,
                        'name' => trans('media::media.favorites'),
                        'icon' => 'fa fa-star',
                    ],
                ];

                $favorite_items = $this->mediaSettingRepository->getFirstBy(['key' => 'favorites', 'user_id' => Auth::user()->getKey()]);

                if (!empty($favorite_items)) {
                    $file_ids = collect($favorite_items->value)
                        ->where('is_folder', 'false')
                        ->pluck('id')
                        ->all();

                    $folder_ids = collect($favorite_items->value)
                        ->where('is_folder', 'true')
                        ->pluck('id')
                        ->all();

                    if ($file_ids) {
                        $paramsFile = array_merge_recursive($paramsFile, [
                            ['media_files.id', 'IN', $file_ids],
                        ]);
                    }

                    if ($folder_ids) {
                        $paramsFolder = array_merge_recursive($paramsFolder, [
                            'condition' => [
                                ['media_folders.id', 'IN', $folder_ids],
                            ],
                        ]);
                    }

                    $queried = $this->fileRepository->getFilesByFolderId($request->input('folder_id'), $paramsFile, true, $paramsFolder);

                    $folders = $queried->where('is_folder', 1)->map(function ($item) {
                        return $this->getResponseFolderData($item);
                    })->toArray();

                    $files = $queried->where('is_folder', 0)->map(function ($item) {
                        return $this->getResponseFileData($item);
                    })->toArray();
                }

                break;
        }

        $breadcrumbs = array_merge($breadcrumbs, $this->getBreadcrumbs($request));
        $selected_file_id = $request->input('selected_file_id');
        return RvMedia::responseSuccess(compact('files', 'folders', 'breadcrumbs', 'selected_file_id'));
    }

    /**
     * @param $folder
     * @return array
     * @author Sang Nguyen
     */
    protected function getResponseFolderData($folder)
    {
        if (empty($folder)) {
            return [];
        }

        return [
            'id' => $folder->id,
            'name' => $folder->name,
            'created_at' => date_from_database($folder->created_at, 'Y-m-d H:i:s'),
            'updated_at' => date_from_database($folder->updated_at, 'Y-m-d H:i:s'),
        ];
    }

    /**
     * @param $file
     * @return array
     * @author Sang Nguyen
     */
    protected function getResponseFileData($file)
    {
        if (empty($file)) {
            return [];
        }

        return [
            'id' => $file->id,
            'name' => $file->name,
            'basename' => File::basename($file->url),
            'url' => $file->url,
            'full_url' => url($file->url),
            'type' => $file->type,
            'icon' => $file->icon,
            'thumb' => $file->type == 'image' ? get_image_url($file->url, 'thumb') : null,
            'size' => $file->human_size,
            'mime_type' => $file->mime_type,
            'created_at' => date_from_database($file->created_at, 'Y-m-d H:i:s'),
            'updated_at' => date_from_database($file->updated_at, 'Y-m-d H:i:s'),
            'options' => $file->options,
            'folder_id' => $file->folder_id,

        ];
    }

    /**
     * @param Request $request
     * @return array
     * @author Sang Nguyen
     */
    protected function getBreadcrumbs(Request $request)
    {
        if ($request->input('folder_id') == 0) {
            return [];
        }

        if ($request->input('view_in') == 'trash') {
            $folder = $this->folderRepository->getFirstByWithTrash(['id' => $request->input('folder_id')]);
        } else {
            $folder = $this->folderRepository->getFirstBy(['id' => $request->input('folder_id')]);
        }
        if (empty($folder)) {
            return [];
        }

        if (empty($breadcrumbs)) {
            $breadcrumbs = [
                [
                    'name' => $folder->name,
                    'id' => $folder->id,
                ]
            ];
        }

        $child = $this->folderRepository->getBreadcrumbs($folder->parent_id);
        if (!empty($child)) {
            return array_merge($child, $breadcrumbs);
        }

        return $breadcrumbs;
    }

    /**
     * Get user quota
     *
     * @return \Illuminate\Http\JsonResponse
     * @author Sang Nguyen
     */
    public function getQuota()
    {
        return RvMedia::responseSuccess([
            'quota' => human_file_size($this->fileRepository->getQuota()),
            'used' => human_file_size($this->fileRepository->getSpaceUsed()),
            'percent' => $this->fileRepository->getPercentageUsed(),
        ]);
    }

    /**
     * @param string $orderBy
     * @return array
     */
    protected function transformOrderBy($orderBy)
    {
        $result = explode('-', $orderBy);
        if (!count($result) == 2) {
            return ['name', 'asc'];
        }
        return $result;
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function postGlobalActions(Request $request)
    {
        $type = $request->input('action');
        switch ($type) {
            case 'trash':
                $error = false;
                foreach ($request->input('selected') as $item) {
                    $id = $item['id'];
                    if ($item['is_folder'] == 'false') {
                        try {
                            $this->fileRepository->deleteBy(['id' => $id]);
                        } catch (Exception $e) {
                            info($e->getMessage());
                            $error = true;
                        }
                    } else {

                        $this->folderRepository->deleteFolder($id);
                    }
                }

                if ($error) {
                    return RvMedia::responseError(trans('media::media.trash_error'));
                }

                return RvMedia::responseSuccess([], trans('media::media.trash_success'));

                break;

            case 'restore':
                $error = false;
                foreach ($request->input('selected') as $item) {
                    $id = $item['id'];
                    if ($item['is_folder'] == 'false') {
                        try {
                            $this->fileRepository->restoreBy(['id' => $id]);
                        } catch (Exception $e) {
                            info($e->getMessage());
                            $error = true;
                        }
                    } else {
                        $this->folderRepository->restoreFolder($id);
                    }
                }

                if ($error) {
                    return RvMedia::responseError(trans('media::media.restore_error'));
                }

                return RvMedia::responseSuccess([], trans('media::media.restore_success'));

                break;

            case 'make_copy':
                foreach ($request->input('selected', []) as $item) {
                    $id = $item['id'];
                    if ($item['is_folder'] == 'false') {
                        $file = $this->fileRepository->getFirstBy(['id' => $id]);
                        $this->copyFile($file);

                    } else {
                        $old_folder = $this->folderRepository->getFirstBy(['id' => $id]);
                        $folderData = $old_folder->replicate()->toArray();

                        $folderData['slug'] = $this->folderRepository->createSlug($old_folder->name, $old_folder->parent_id);
                        $folderData['name'] = $old_folder->name . '-(copy)';
                        $folderData['user_id'] = Auth::user()->getKey();
                        $folder = $this->folderRepository->create($folderData);

                        $files = $this->fileRepository->getFilesByFolderId($id);
                        foreach ($files as $file) {
                            $this->copyFile($file, $folder->id);
                        }

                        $children = $this->folderRepository->getAllChildFolders($id);
                        foreach ($children as $parent_id => $child) {

                            if ($parent_id != $old_folder->id) {
                                /**
                                 * @var MediaFolder $child
                                 */
                                $folder = $this->folderRepository->getFirstBy(['id' => $parent_id]);

                                $folderData = $folder->replicate()->toArray();

                                $folderData['slug'] = $this->folderRepository->createSlug($old_folder->name, $old_folder->parent_id);
                                $folderData['name'] = $old_folder->name . '-(copy)';
                                $folderData['user_id'] = Auth::user()->getKey();
                                $folderData['parent_id'] = $folder->id;
                                $folder = $this->folderRepository->create($folderData);

                                $parent_files = $this->fileRepository->getFilesByFolderId($parent_id);
                                foreach ($parent_files as $parent_file) {
                                    $this->copyFile($parent_file, $folder->id);
                                }
                            }

                            foreach ($child as $sub) {
                                $sub_files = $this->fileRepository->getFilesByFolderId($sub->id);

                                $subFolderData = $sub->replicate()->toArray();

                                $subFolderData['user_id'] = Auth::user()->getKey();
                                $subFolderData['parent_id'] = $folder->id;

                                $sub = $this->folderRepository->create($subFolderData);

                                foreach ($sub_files as $sub_file) {
                                    $this->copyFile($sub_file, $sub->id);
                                }
                            }
                        }

                        File::copyDirectory($this->uploadManager->uploadPath($this->folderRepository->getFullPath($old_folder->id)), $this->uploadManager->uploadPath($this->folderRepository->getFullPath($folder->id)));
                    }
                }

                return RvMedia::responseSuccess([], trans('media::media.copy_success'));

                break;

            case 'delete':
                foreach ($request->input('selected') as $item) {
                    $id = $item['id'];
                    if ($item['is_folder'] == 'false') {
                        try {
                            $this->fileRepository->forceDelete(['id' => $id]);
                        } catch (Exception $e) {
                            info($e->getMessage());
                        }
                    } else {
                        $this->folderRepository->deleteFolder($id, true);
                    }
                }

                return RvMedia::responseSuccess([], trans('media::media.delete_success'));

                break;
            case 'favorite':
                $meta = $this->mediaSettingRepository->firstOrCreate(['key' => 'favorites', 'user_id' => Auth::user()->getKey()]);
                if (!empty($meta->value)) {
                    $meta->value = array_merge($meta->value, $request->input('selected', []));
                } else {
                    $meta->value = $request->input('selected', []);
                }

                $this->mediaSettingRepository->createOrUpdate($meta);

                return RvMedia::responseSuccess([], trans('media::media.favorite_success'));
                break;

            case 'remove_favorite':
                $meta = $this->mediaSettingRepository->firstOrCreate(['key' => 'favorites', 'user_id' => Auth::user()->getKey()]);
                if (!empty($meta)) {
                    $value = $meta->value;
                    if (!empty($value)) {
                        foreach ($value as $key => $item) {
                            foreach ($request->input('selected') as $selected_item) {
                                if ($item['is_folder'] == $selected_item['is_folder'] && $item['id'] == $selected_item['id']) {
                                    unset($value[$key]);
                                }
                            }
                        }
                        $meta->value = $value;

                        $this->mediaSettingRepository->createOrUpdate($meta);
                    }

                }

                return RvMedia::responseSuccess([], trans('media::media.remove_favorite_success'));
                break;

            case 'rename':
                $error = false;
                foreach ($request->input('selected') as $item) {
                    $id = $item['id'];
                    if ($item['is_folder'] == 'false') {
                        $file = $this->fileRepository->getFirstBy(['id' => $id]);

                        if (!empty($file)) {
                            $file->name = $this->fileRepository->createName($item['name'], $file->folder_id);
                            $this->fileRepository->createOrUpdate($file);
                        }
                    } else {
                        $name = $item['name'];
                        $folder = $this->folderRepository->getFirstBy(['id' => $id]);

                        if (!empty($folder)) {
                            $folder->name = $this->folderRepository->createName($name, $folder->parent_id);
                            $this->folderRepository->createOrUpdate($folder);
                        }
                    }
                }

                if (!empty($error)) {
                    return RvMedia::responseError(trans('media::media.rename_error'));
                }

                return RvMedia::responseSuccess([], trans('media::media.rename_success'));

                break;

            case 'empty_trash':
                $this->folderRepository->emptyTrash();
                $this->fileRepository->emptyTrash();

                return RvMedia::responseSuccess([], trans('media::media.empty_trash_success'));
                break;
        }

        return RvMedia::responseError(trans('media::media.invalid_action'));
    }

    /**
     * @param $file
     * @param int $new_folder_id
     */
    protected function copyFile($file, $new_folder_id = null)
    {
        /**
         * @var MediaFile $file ;
         */
        $file = $file->replicate();
        $file->user_id = Auth::user()->getKey();

        $fileData = $file->toArray();
        $fileData['user_id'] = Auth::user()->getKey();

        if ($new_folder_id == null) {
            $fileData['name'] = $file->name . '-(copy)';

            if (!in_array($file->type, array_merge(['video', 'youtube'], config('media.external_services')))) {
                $folder_path = str_finish($this->folderRepository->getFullPath($file->folder_id), '/');
                $path = $folder_path . File::name($file->url) . '-(copy)' . '.' . File::extension($file->url);
                if (file_exists(public_path($file->url))) {
                    $content = File::get(public_path($file->url));

                    $this->uploadManager->saveFile($path, $content);
                    $data = $this->uploadManager->fileDetails($path);
                    $fileData['url'] = $data['url'];

                    if (is_image($this->uploadManager->fileMimeType($path))) {
                        foreach (config('media.sizes') as $size) {
                            $readable_size = explode('x', $size);
                            Image::make(ltrim($data['url'], '/'))->fit($readable_size[0], $readable_size[1])
                                ->save($this->uploadManager->uploadPath($folder_path) . File::name($data['url']) . '-' . $size . '.' . File::extension($data['url']));
                        }
                    }
                }
            }

        } else {
            $fileData['url'] = str_replace(
                $this->uploadManager->uploadPath($this->folderRepository->getFullPath($file->folder_id)),
                $this->uploadManager->uploadPath($this->folderRepository->getFullPath($new_folder_id)),
                $file->url
            );
            $fileData['folder_id'] = $new_folder_id;
        }

        $this->fileRepository->create($fileData);
    }

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\BinaryFileResponse|\Illuminate\Http\JsonResponse
     * @author Sang Nguyen
     */
    public function download(Request $request)
    {
        $items = $request->input('selected', []);

        if (count($items) == 1 && $items['0']['is_folder'] == 'false') {
            $file = $this->fileRepository->getFirstByWithTrash(['id' => $items[0]['id']]);
            if (!empty($file) && $file->type != 'video') {
                if (!file_exists(public_path($file->url))) {
                    return RvMedia::responseError(trans('media::media.file_not_exists'));
                }
                return response()->download(public_path($file->url));
            }
        } else {
            if (class_exists('ZipArchive', false)) {
                $zip = new ZipArchive();
                $file_name = public_path('download-' . Carbon::now()->format('Y-m-d-h-i-s') . '.zip');
                if ($zip->open($file_name, ZipArchive::CREATE) == true) {
                    foreach ($items as $item) {
                        $id = $item['id'];
                        if ($item['is_folder'] == 'false') {
                            $file = $this->fileRepository->getFirstByWithTrash(['id' => $id]);
                            if (!empty($file) && $file->type != 'video') {
                                $arr_src = explode(DIRECTORY_SEPARATOR, $this->uploadManager->uploadPath('/'));
                                $path_length = strlen(implode(DIRECTORY_SEPARATOR, $arr_src) . DIRECTORY_SEPARATOR);
                                $zip->addFile(public_path($file->url), substr($file->url, $path_length));
                            }
                        } else {
                            $folder = $this->folderRepository->getFirstByWithTrash(['id' => $id]);
                            if (!empty($folder)) {
                                $path = $this->uploadManager->uploadPath($this->folderRepository->getFullPath($folder->id));
                                $arr_src = explode(DIRECTORY_SEPARATOR, $path);
                                $path_length = strlen(implode(DIRECTORY_SEPARATOR, $arr_src) . DIRECTORY_SEPARATOR);
                                $this->recurseZip($path, $zip, $path_length);
                            }
                        }
                    }
                    $zip->close();
                    if (File::exists($file_name)) {
                        return response()->download($file_name)->deleteFileAfterSend(true);
                    }
                }
                return RvMedia::responseError(trans('media::media.download_file_error'));
            } else {
                return RvMedia::responseError(trans('media::media.mMissing_zip_archive_extension'));
            }

        }
        return RvMedia::responseError(trans('media::media.can_not_download_file'));
    }

    /**
     * @param $src
     * @param ZipArchive $zip
     * @param $pathLength
     * @author Sang Nguyen
     */
    protected function recurseZip($src, &$zip, $pathLength)
    {
        foreach (scan_folder($src) as $item) {
            $item = $src . DIRECTORY_SEPARATOR . $item;
            if (File::isDirectory($item)) {
                $this->recurseZip($item, $zip, $pathLength);
            } else {
                if (class_exists('ZipArchive', false)) {
                    $is_thumb = false;
                    if (in_array(mime_content_type($item), ['image/jpeg', 'image/gif', 'image/png', 'image/bmp'])) {
                        foreach (config('media.sizes') as $size) {
                            $size_detect = '-' . $size . '.' . File::extension($item);
                            if (strpos($item, $size_detect) !== false) {
                                $is_thumb = true;
                            }
                        }
                    }
                    if (!$is_thumb) {
                        $zip->addFile($item, substr($item, $pathLength));
                    }
                }
            }
        }
    }
}
