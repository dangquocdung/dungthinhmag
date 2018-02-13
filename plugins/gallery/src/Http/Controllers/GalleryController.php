<?php

namespace Botble\Gallery\Http\Controllers;

use Botble\Base\Http\Controllers\BaseController;
use Botble\Base\Http\Responses\AjaxResponse;
use Botble\Gallery\Http\DataTables\GalleryDataTable;
use Botble\Gallery\Http\Requests\GalleryRequest;
use Assets;
use Botble\Gallery\Repositories\Interfaces\GalleryInterface;
use Exception;
use Illuminate\Http\Request;
use Auth;
use Botble\Base\Events\CreatedContentEvent;
use Botble\Base\Events\DeletedContentEvent;
use Botble\Base\Events\UpdatedContentEvent;

class GalleryController extends BaseController
{

    /**
     * @var GalleryInterface
     */
    protected $galleryRepository;

    /**
     * @param GalleryInterface $galleryRepository
     * @author Sang Nguyen
     */
    public function __construct(GalleryInterface $galleryRepository)
    {
        $this->galleryRepository = $galleryRepository;
    }

    /**
     * Display all galleries
     * @param GalleryDataTable $dataTable
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @author Sang Nguyen
     */
    public function getList(GalleryDataTable $dataTable)
    {
        page_title()->setTitle(trans('gallery::gallery.list'));

        return $dataTable->renderTable([
            'title' => trans('gallery::gallery.list'),
            'icon' => 'fa fa-photo',
        ]);
    }

    /**
     * Show create form
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @author Sang Nguyen
     */
    public function getCreate()
    {
        page_title()->setTitle(trans('gallery::gallery.create'));

        Assets::addJavascript(['are-you-sure']);
        Assets::addStylesheetsDirectly(['vendor/core/plugins/gallery/css/admin-gallery.css']);

        $galleries = $this->galleryRepository->pluck('name', 'id');
        $galleries[0] = 'None';
        $galleries = array_sort_recursive($galleries);

        return view('gallery::create', compact('galleries'));
    }

    /**
     * Insert new Gallery into database
     *
     * @param GalleryRequest $request
     * @return \Illuminate\Http\RedirectResponse
     * @author Sang Nguyen
     */
    public function postCreate(GalleryRequest $request)
    {
        $gallery = $this->galleryRepository->getModel();
        $gallery->fill($request->input());
        $gallery->user_id = Auth::user()->getKey();
        $gallery->featured = $request->input('featured', false);

        $gallery = $this->galleryRepository->createOrUpdate($gallery);

        event(new CreatedContentEvent(GALLERY_MODULE_SCREEN_NAME, $request, $gallery));

        if ($request->input('submit') === 'save') {
            return redirect()->route('galleries.list')->with('success_msg', trans('bases::notices.create_success_message'));
        } else {
            return redirect()->route('galleries.edit', $gallery->id)->with('success_msg', trans('bases::notices.create_success_message'));
        }
    }

    /**
     * Show edit form
     *
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @author Sang Nguyen
     */
    public function getEdit($id)
    {
        $gallery = $this->galleryRepository->findById($id);
        if (empty($gallery)) {
            abort(404);
        }

        page_title()->setTitle(trans('gallery::gallery.edit') . ' #' . $id);

        Assets::addJavascript(['are-you-sure']);
        Assets::addStylesheetsDirectly(['vendor/core/plugins/gallery/css/admin-gallery.css']);

        $galleries = $this->galleryRepository->pluck('name', 'id');
        $galleries[0] = 'None';
        $galleries = array_sort_recursive($galleries);

        return view('gallery::edit', compact('gallery', 'galleries'));
    }

    /**
     * @param $id
     * @param GalleryRequest $request
     * @return \Illuminate\Http\RedirectResponse
     * @author Sang Nguyen
     */
    public function postEdit($id, GalleryRequest $request)
    {
        $gallery = $this->galleryRepository->findById($id);
        if (empty($gallery)) {
            abort(404);
        }
        $gallery->fill($request->input());
        $gallery->featured = $request->input('featured', false);

        $this->galleryRepository->createOrUpdate($gallery);

        event(new UpdatedContentEvent(GALLERY_MODULE_SCREEN_NAME, $request, $gallery));

        if ($request->input('submit') === 'save') {
            return redirect()->route('galleries.list')->with('success_msg', trans('bases::notices.update_success_message'));
        } else {
            return redirect()->route('galleries.edit', $id)->with('success_msg', trans('bases::notices.update_success_message'));
        }
    }

    /**
     * @param Request $request
     * @param $id
     * @param AjaxResponse $response
     * @return AjaxResponse
     * @author Sang Nguyen
     */
    public function getDelete(Request $request, $id, AjaxResponse $response)
    {
        try {
            $gallery = $this->galleryRepository->findById($id);
            if (empty($gallery)) {
                abort(404);
            }
            $this->galleryRepository->delete($gallery);
            event(new DeletedContentEvent(GALLERY_MODULE_SCREEN_NAME, $request, $gallery));

            return $response->setMessage(trans('bases::notices.delete_success_message'));
        } catch (Exception $ex) {
            return $response->setError(true)->setMessage(trans('bases::notices.cannot_delete'));
        }
    }

    /**
     * @param Request $request
     * @param AjaxResponse $response
     * @return AjaxResponse
     * @author Sang Nguyen
     */
    public function postDeleteMany(Request $request, AjaxResponse $response)
    {
        $ids = $request->input('ids');
        if (empty($ids)) {
            return $response->setError(true)->setMessage(trans('bases::notices.no_select'));
        }

        foreach ($ids as $id) {
            $gallery = $this->galleryRepository->findById($id);
            $this->galleryRepository->delete($gallery);
            event(new DeletedContentEvent(GALLERY_MODULE_SCREEN_NAME, $request, $gallery));
        }

        return $response->setMessage(trans('bases::notices.delete_success_message'));
    }

    /**
     * @param Request $request
     * @param AjaxResponse $response
     * @return AjaxResponse
     * @author Sang Nguyen
     */
    public function postChangeStatus(Request $request, AjaxResponse $response)
    {
        $ids = $request->input('ids');
        if (empty($ids)) {
            return $response->setError(true)->setMessage(trans('bases::notices.no_select'));
        }

        foreach ($ids as $id) {
            $gallery = $this->galleryRepository->findById($id);
            $gallery->status = $request->input('status');
            $this->galleryRepository->createOrUpdate($gallery);
            event(new UpdatedContentEvent(GALLERY_MODULE_SCREEN_NAME, $request, $gallery));
        }

        return $response->setData($request->input('status'))->setMessage(trans('bases::notices.update_success_message'));
    }
}
