<?php

namespace Botble\Contact\Http\Controllers;

use Botble\Base\Http\Controllers\BaseController;
use Botble\Base\Http\Responses\AjaxResponse;
use Botble\Contact\Http\DataTables\ContactDataTable;
use Botble\Contact\Repositories\Interfaces\ContactInterface;
use Exception;
use Illuminate\Http\Request;
use Botble\Base\Events\DeletedContentEvent;
use Botble\Base\Events\UpdatedContentEvent;

class ContactController extends BaseController
{

    /**
     * @var ContactInterface
     */
    protected $contactRepository;

    /**
     * @param ContactInterface $contactRepository
     * @author Sang Nguyen
     */
    public function __construct(ContactInterface $contactRepository)
    {
        $this->contactRepository = $contactRepository;
    }

    /**
     * @param ContactDataTable $dataTable
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @author Sang Nguyen
     */
    public function getList(ContactDataTable $dataTable)
    {
        page_title()->setTitle(trans('contact::contact.list'));

        return $dataTable->renderTable(['title' => trans('contact::contact.list'), 'icon' => 'fa fa-envelope-o']);
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @author Sang Nguyen
     */
    public function getEdit($id)
    {
        page_title()->setTitle(trans('contact::contact.edit'));

        $contact = $this->contactRepository->createOrUpdate(['is_read' => 1], ['id' => $id]);

        return view('contact::edit', compact('contact'));
    }

    /**
     * @param $id
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @author Sang Nguyen
     */
    public function postEdit($id, Request $request)
    {
        $contact = $this->contactRepository->findById($id);

        if (!$request->input('is_read')) {
            $contact->is_read = false;
        } else {
            $contact->is_read = true;
        }

        $this->contactRepository->createOrUpdate($contact);
        event(new UpdatedContentEvent(CONTACT_MODULE_SCREEN_NAME, $request, $contact));

        if ($request->input('submit') === 'save') {
            return redirect()->route('contacts.list')->with('success_msg', trans('bases::notices.update_success_message'));
        } else {
            return redirect()->route('contacts.edit', $id)->with('success_msg', trans('bases::notices.update_success_message'));
        }
    }

    /**
     * @param $id
     * @param Request $request
     * @param AjaxResponse $response
     * @return AjaxResponse
     * @author Sang Nguyen
     */
    public function getDelete($id, Request $request, AjaxResponse $response)
    {
        try {
            $contact = $this->contactRepository->findById($id);
            $this->contactRepository->delete($contact);
            event(new DeletedContentEvent(CONTACT_MODULE_SCREEN_NAME, $request, $contact));
            return $response->setMessage(trans('contact::contact.deleted'));
        } catch (Exception $e) {
            return $response->setError(true)->setMessage(trans('contact::contact.cannot_delete'));
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
            return $response->setError(true)->setMessage(trans('contact::contact.notices.no_select'));
        }

        foreach ($ids as $id) {
            $contact = $this->contactRepository->findById($id);
            $this->contactRepository->delete($contact);
            event(new DeletedContentEvent(CONTACT_MODULE_SCREEN_NAME, $request, $contact));
        }

        return $response->setData($request->input('status'))
            ->setMessage(trans('contact::contact.deleted'));
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
            return $response->setError(true)->setMessage(trans('contact::contact.notices.no_select'));
        }

        foreach ($ids as $id) {
            $contact = $this->contactRepository->findById($id);
            $contact->is_read = $request->input('status');
            $this->contactRepository->createOrUpdate($contact);
            event(new UpdatedContentEvent(CONTACT_MODULE_SCREEN_NAME, $request, $contact));
        }

        return $response->setMessage(trans('contact::contact.notices.update_success_message'));
    }
}
