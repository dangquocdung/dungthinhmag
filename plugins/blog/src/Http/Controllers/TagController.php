<?php

namespace Botble\Blog\Http\Controllers;

use Botble\Base\Http\Controllers\BaseController;
use Botble\Base\Http\Responses\AjaxResponse;
use Botble\Blog\Http\DataTables\TagDataTable;
use Botble\Blog\Http\Requests\TagRequest;
use Assets;
use Botble\Blog\Repositories\Interfaces\TagInterface;
use Exception;
use Illuminate\Http\Request;
use Auth;
use Botble\Base\Events\CreatedContentEvent;
use Botble\Base\Events\DeletedContentEvent;
use Botble\Base\Events\UpdatedContentEvent;

class TagController extends BaseController
{

    /**
     * @var TagInterface
     */
    protected $tagRepository;

    /**
     * @param TagInterface $tagRepository
     */
    public function __construct(TagInterface $tagRepository)
    {
        $this->tagRepository = $tagRepository;
    }

    /**
     * @param TagDataTable $dataTable
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @author Sang Nguyen
     */
    public function getList(TagDataTable $dataTable)
    {

        page_title()->setTitle(trans('blog::tags.list'));

        return $dataTable->renderTable(['title' => trans('blog::tags.list')]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @author Sang Nguyen
     */
    public function getCreate()
    {
        page_title()->setTitle(trans('blog::tags.create'));

        return view('blog::tags.create');
    }

    /**
     * @param TagRequest $request
     * @return \Illuminate\Http\RedirectResponse
     * @author Sang Nguyen
     */
    public function postCreate(TagRequest $request)
    {
        $tag = $this->tagRepository->createOrUpdate(array_merge($request->input(), ['user_id' => Auth::user()->getKey()]));
        event(new CreatedContentEvent(TAG_MODULE_SCREEN_NAME, $request, $tag));
        if ($request->input('submit') === 'save') {
            return redirect()->route('tags.list')->with('success_msg', trans('bases::notices.create_success_message'));
        } else {
            return redirect()->route('tags.edit', $tag->id)->with('success_msg', trans('bases::notices.create_success_message'));
        }
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @author Sang Nguyen
     */
    public function getEdit($id)
    {
        $tag = $this->tagRepository->findById($id);
        if (empty($tag)) {
            abort(404);
        }

        page_title()->setTitle(trans('blog::tags.edit') . ' #' . $id);

        return view('blog::tags.edit', compact('tag'));
    }

    /**
     * @param $id
     * @param TagRequest $request
     * @return \Illuminate\Http\RedirectResponse
     * @author Sang Nguyen
     */
    public function postEdit($id, TagRequest $request)
    {
        $tag = $this->tagRepository->findById($id);
        if (empty($tag)) {
            abort(404);
        }
        $tag->fill($request->input());

        $this->tagRepository->createOrUpdate($tag);
        event(new UpdatedContentEvent(TAG_MODULE_SCREEN_NAME, $request, $tag));
        if ($request->input('submit') === 'save') {
            return redirect()->route('tags.list')->with('success_msg', trans('bases::notices.update_success_message'));
        } else {
            return redirect()->route('tags.edit', $id)->with('success_msg', trans('bases::notices.update_success_message'));
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
            $tag = $this->tagRepository->findById($id);
            if (empty($tag)) {
                abort(404);
            }
            $this->tagRepository->delete($tag);

            event(new DeletedContentEvent(TAG_MODULE_SCREEN_NAME, $request, $tag));

            return $response->setMessage(trans('blog::tags.deleted'));
        } catch (Exception $e) {
            return $response->setError(true)->setMessage(trans('blog::tags.cannot_delete'));
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
            return $response->setError(true)->setMessage(trans('blog::tags.notices.no_select'));
        }

        foreach ($ids as $id) {
            $tag = $this->tagRepository->findById($id);
            $this->tagRepository->delete($tag);

            event(new DeletedContentEvent(TAG_MODULE_SCREEN_NAME, $request, $tag));
        }
        return $response->setData($request->input('status'))->setMessage(trans('blog::tags.deleted'));
    }

    /**
     * Get list tags in db
     *
     * @return mixed
     * @author Sang Nguyen
     */
    public function getAllTags()
    {
        return $this->tagRepository->pluck('name');
    }
}
