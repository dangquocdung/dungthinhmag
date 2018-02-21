<?php

namespace Botble\Backup\Http\Controllers;

use Artisan;
use Assets;
use Botble\Backup\Supports\Backup;
use Botble\Base\Http\Controllers\BaseController;
use Botble\Base\Http\Responses\AjaxResponse;
use Exception;
use Illuminate\Http\Request;

class BackupController extends BaseController
{

    /**
     * @var Backup
     */
    protected $backup;

    /**
     * BackupController constructor.
     * @param Backup $backup
     * @author Sang Nguyen
     */
    public function __construct(Backup $backup)
    {
        $this->backup = $backup;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @author Sang Nguyen
     */
    public function getIndex()
    {
        page_title()->setTitle(trans('backup::backup.name'));

        Assets::addJavascriptDirectly('vendor/core/plugins/backup/js/backup.js');
        $backups = $this->backup->getBackupList();
        return view('backup::index', compact('backups'));
    }

    /**
     * @param Request $request
     * @param AjaxResponse $response
     * @return AjaxResponse
     * @author Sang Nguyen
     * @throws \Throwable
     */
    public function postCreate(Request $request, AjaxResponse $response)
    {
        try {
            $data = $this->backup->createBackupFolder($request);
            $this->backup->backupDb();
            $this->backup->backupFolder(public_path('uploads'));
            do_action(BACKUP_ACTION_AFTER_BACKUP, BACKUP_MODULE_SCREEN_NAME, $request);
            return $response->setData(view('backup::partials.backup-item', $data)->render())
                ->setMessage(trans('backup::backup.create_backup_success'));
        } catch (Exception $ex) {
            return $response->setError(true)->setMessage($ex->getMessage());
        }
    }

    /**
     * @param $folder
     * @param AjaxResponse $response
     * @return AjaxResponse
     * @author Sang Nguyen
     */
    public function getDelete($folder, AjaxResponse $response)
    {
        try {
            $this->backup->deleteFolderBackup(storage_path('app/backup/') . $folder);
            return $response->setMessage(trans('backup::backup.delete_backup_success'));
        } catch (Exception $ex) {
            return $response->setError(true)->setMessage($ex->getMessage());
        }
    }

    /**
     * @param $folder
     * @param Request $request
     * @param AjaxResponse $response
     * @return AjaxResponse
     * @author Sang Nguyen
     */
    public function getRestore($folder, Request $request, AjaxResponse $response)
    {
        try {
            info('Starting restore backup...');
            $path = storage_path('app/backup/') . $folder;
            foreach (scan_folder($path) as $file) {
                if (str_contains(basename($file), 'database')) {
                    $this->backup->restoreDb($path . DIRECTORY_SEPARATOR . $file, $path);
                }

                if (str_contains(basename($file), 'uploads')) {
                    $this->backup->restore($path . DIRECTORY_SEPARATOR . $file, public_path('uploads'));
                }
            }
            Artisan::call('cache:clear');
            do_action(BACKUP_ACTION_AFTER_RESTORE, BACKUP_MODULE_SCREEN_NAME, $request);
            info('Restore backup completed!');
            return $response->setMessage(trans('backup::backup.restore_backup_success'));
        } catch (Exception $ex) {
            return $response->setError(true)->setMessage($ex->getMessage());
        }
    }

    /**
     * @param $folder
     * @return \Symfony\Component\HttpFoundation\BinaryFileResponse|boolean
     * @author Sang Nguyen
     */
    public function getDownloadDatabase($folder)
    {
        $path = storage_path('app/backup/') . $folder;
        foreach (scan_folder($path) as $file) {
            if (str_contains(basename($file), 'database')) {
                return response()->download($path . DIRECTORY_SEPARATOR . $file);
            }
        }
        return true;
    }

    /**
     * @param $folder
     * @return \Symfony\Component\HttpFoundation\BinaryFileResponse|boolean
     * @author Sang Nguyen
     */
    public function getDownloadUploadFolder($folder)
    {
        $path = storage_path('app/backup/') . $folder;
        foreach (scan_folder($path) as $file) {
            if (str_contains(basename($file), 'uploads')) {
                return response()->download($path . DIRECTORY_SEPARATOR . $file);
            }
        }
        return true;
    }
}