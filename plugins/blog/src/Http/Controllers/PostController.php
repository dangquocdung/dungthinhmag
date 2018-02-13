<?php

namespace Botble\Blog\Http\Controllers;

use Botble\Base\Http\Controllers\BaseController;
use Botble\Base\Http\Responses\AjaxResponse;
use Botble\Blog\Http\Requests\PostRequest;
use Assets;
use Botble\Blog\Models\Post;
use Botble\Blog\Repositories\Interfaces\CategoryInterface;
use Botble\Blog\Repositories\Interfaces\PostInterface;
use Botble\Blog\Http\DataTables\PostDataTable;
use Botble\Blog\Repositories\Interfaces\TagInterface;
use Botble\Blog\Services\StoreCategoryService;
use Botble\Blog\Services\StoreTagService;
use Exception;
use Illuminate\Http\Request;
use Auth;
use Botble\Base\Events\CreatedContentEvent;
use Botble\Base\Events\DeletedContentEvent;
use Botble\Base\Events\UpdatedContentEvent;

class PostController extends BaseController
{

    /**
     * @var PostInterface
     */
    protected $postRepository;

    /**
     * @var TagInterface
     */
    protected $tagRepository;

    /**
     * @var CategoryInterface
     */
    protected $categoryRepository;

    /**
     * @param PostInterface $postRepository
     * @param TagInterface $tagRepository
     * @param CategoryInterface $categoryRepository
     * @author Sang Nguyen
     */
    public function __construct(
        PostInterface $postRepository,
        TagInterface $tagRepository,
        CategoryInterface $categoryRepository
    )
    {
        $this->postRepository = $postRepository;
        $this->tagRepository = $tagRepository;
        $this->categoryRepository = $categoryRepository;
    }

    /**
     * @param PostDataTable $dataTable
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @author Sang Nguyen
     */
    public function getList(PostDataTable $dataTable)
    {
        page_title()->setTitle(trans('blog::posts.list'));

        return $dataTable->renderTable(['title' => trans('blog::posts.list'), 'icon' => 'fa fa-edit']);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @author Sang Nguyen
     */
    public function getCreate()
    {
        page_title()->setTitle(trans('blog::posts.create'));

        Assets::addJavascript(['bootstrap-tagsinput', 'typeahead', 'are-you-sure']);
        Assets::addStylesheets(['bootstrap-tagsinput']);
        Assets::addAppModule(['tags']);

        $categories = get_categories_with_children();

        return view('blog::posts.create', compact('categories'));
    }

    /**
     * @param PostRequest $request
     * @param StoreTagService $tagService
     * @param StoreCategoryService $categoryService
     * @return \Illuminate\Http\RedirectResponse
     * @author Sang Nguyen
     */
    public function postCreate(PostRequest $request, StoreTagService $tagService, StoreCategoryService $categoryService)
    {
        /**
         * @var Post $post
         */
        $post = $this->postRepository->createOrUpdate(array_merge($request->input(), [
            'user_id' => Auth::user()->getKey(),
            'featured' => $request->input('featured', false),
        ]));

        event(new CreatedContentEvent(POST_MODULE_SCREEN_NAME, $request, $post));

        $tagService->execute($request, $post);

        $categoryService->execute($request, $post);

        if ($request->input('submit') === 'save') {
            return redirect()->route('posts.list')->with('success_msg', trans('bases::notices.create_success_message'));
        } else {
            return redirect()->route('posts.edit', $post->id)->with('success_msg', trans('bases::notices.create_success_message'));
        }
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @author Sang Nguyen
     */
    public function getEdit($id)
    {

        $post = $this->postRepository->findById($id);

        if (empty($post)) {
            abort(404);
        }

        page_title()->setTitle(trans('blog::posts.edit') . ' #' . $id);

        Assets::addJavascript(['bootstrap-tagsinput', 'typeahead']);
        Assets::addStylesheets(['bootstrap-tagsinput']);
        Assets::addAppModule(['tags']);

        $selected_categories = [];
        if ($post->categories != null) {
            $selected_categories = $post->categories->pluck('id')->all();
        }

        $tags = $post->tags->pluck('name')->all();
        $tags = implode(',', $tags);
        $categories = get_categories_with_children();

        return view('blog::posts.edit', compact('post', 'tags', 'categories', 'selected_categories'));
    }

    /**
     * @param $id
     * @param PostRequest $request
     * @param StoreTagService $tagService
     * @param StoreCategoryService $categoryService
     * @return \Illuminate\Http\RedirectResponse
     * @author Sang Nguyen
     */
    public function postEdit($id, PostRequest $request, StoreTagService $tagService, StoreCategoryService $categoryService)
    {
        $post = $this->postRepository->findById($id);
        if (empty($post)) {
            abort(404);
        }

        $post->fill($request->input());
        $post->featured = $request->input('featured', false);

        $this->postRepository->createOrUpdate($post);

        event(new UpdatedContentEvent(POST_MODULE_SCREEN_NAME, $request, $post));

        $tagService->execute($request, $post);

        $categoryService->execute($request, $post);

        if ($request->input('submit') === 'save') {
            return redirect()->route('posts.list')->with('success_msg', trans('bases::notices.update_success_message'));
        } else {
            return redirect()->route('posts.edit', $id)->with('success_msg', trans('bases::notices.update_success_message'));
        }
    }

    /**
     * @param $id
     * @param Request $request
     * @return AjaxResponse
     * @author Sang Nguyen
     */
    public function getDelete(Request $request, $id, AjaxResponse $response)
    {
        try {
            $post = $this->postRepository->findById($id);
            if (empty($post)) {
                abort(404);
            }
            $this->postRepository->delete($post);

            event(new DeletedContentEvent(POST_MODULE_SCREEN_NAME, $request, $post));

            return $response->setError(false)->setMessage(trans('bases::notices.delete_success_message'));
        } catch (Exception $e) {
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
            $post = $this->postRepository->findById($id);
            $this->postRepository->delete($post);
            event(new DeletedContentEvent(POST_MODULE_SCREEN_NAME, $request, $post));
        }

        return $response->setError(false)->setMessage(trans('bases::notices.delete_success_message'));
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
            $post = $this->postRepository->findById($id);
            $post->status = $request->input('status');
            $this->postRepository->createOrUpdate($post);
            event(new UpdatedContentEvent(POST_MODULE_SCREEN_NAME, $request, $post));
        }

        return $response->setError(false)->setMessage(trans('bases::notices.update_success_message'))->setData($request->input('status'));
    }

    /**
     * @param AjaxResponse $response
     * @return AjaxResponse
     * @author Sang Nguyen
     */
    public function getWidgetRecentPosts(AjaxResponse $response)
    {
        $limit = request()->input('paginate', 10);
        $posts = $this->postRepository->getModel()->orderBy('created_at', 'desc')->paginate($limit);
        return $response->setError(false)->setData(view('blog::posts.widgets.posts', compact('posts', 'limit'))->render());
    }
}
