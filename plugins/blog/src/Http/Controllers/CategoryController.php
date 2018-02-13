<?php

namespace Botble\Blog\Http\Controllers;

use Botble\Base\Http\Controllers\BaseController;
use Botble\Base\Http\Responses\AjaxResponse;
use Botble\Blog\Http\DataTables\CategoryDataTable;
use Botble\Blog\Http\Requests\CategoryRequest;
use Assets;
use Botble\Blog\Repositories\Interfaces\CategoryInterface;
use Exception;
use Illuminate\Http\Request;
use Auth;
use Botble\Base\Events\CreatedContentEvent;
use Botble\Base\Events\DeletedContentEvent;
use Botble\Base\Events\UpdatedContentEvent;

class CategoryController extends BaseController
{

    /**
     * @var CategoryInterface
     */
    protected $categoryRepository;

    /**
     * @param CategoryInterface $categoryRepository
     * @author Sang Nguyen
     */
    public function __construct(CategoryInterface $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    /**
     * Display all categories
     * @param CategoryDataTable $dataTable
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @author Sang Nguyen
     */
    public function getList(CategoryDataTable $dataTable)
    {
        page_title()->setTitle(trans('blog::categories.list'));

        return $dataTable->renderTable(['title' => trans('blog::categories.list')]);
    }

    /**
     * Show create form
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @author Sang Nguyen
     */
    public function getCreate()
    {
        page_title()->setTitle(trans('blog::categories.create'));

        $list = get_categories();

        $categories = [];
        foreach ($list as $row) {
            $categories[$row->id] = $row->indent_text . ' ' . $row->name;
        }
        $categories[0] = __('None');
        $categories = array_sort_recursive($categories);

        return view('blog::categories.create', compact('categories'));
    }

    /**
     * Insert new Category into database
     *
     * @param CategoryRequest $request
     * @return \Illuminate\Http\RedirectResponse
     * @author Sang Nguyen
     */
    public function postCreate(CategoryRequest $request)
    {

        $category = $this->categoryRepository->createOrUpdate(array_merge($request->input(), [
            'user_id' => Auth::user()->getKey(),
            'featured' => $request->input('featured', false),
            'is_default' => $request->input('is_default', false),
        ]));

        event(new CreatedContentEvent(CATEGORY_MODULE_SCREEN_NAME, $request, $category));

        if ($request->input('submit') === 'save') {
            return redirect()->route('categories.list')->with('success_msg', trans('bases::notices.create_success_message'));
        } else {
            return redirect()->route('categories.edit', $category->id)->with('success_msg', trans('bases::notices.create_success_message'));
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
        $category = $this->categoryRepository->findById($id);

        if (empty($category)) {
            abort(404);
        }

        page_title()->setTitle(trans('blog::categories.edit') . ' #' . $id);

        $list = get_categories();

        $categories = [];
        foreach ($list as $row) {
            if ($row->id != $id) {
                $categories[$row->id] = $row->indent_text . ' ' . $row->name;
            }
        }
        $categories[0] = __('None');
        $categories = array_sort_recursive($categories);

        return view('blog::categories.edit', compact('category', 'categories'));
    }

    /**
     * @param $id
     * @param CategoryRequest $request
     * @return \Illuminate\Http\RedirectResponse
     * @author Sang Nguyen
     */
    public function postEdit($id, CategoryRequest $request)
    {
        $category = $this->categoryRepository->findById($id);
        if (empty($category)) {
            abort(404);
        }

        $category->fill($request->input());
        $category->featured = $request->input('featured', false);
        $category->is_default = $request->input('is_default', false);

        $this->categoryRepository->createOrUpdate($category);

        event(new UpdatedContentEvent(CATEGORY_MODULE_SCREEN_NAME, $request, $category));

        if ($request->input('submit') === 'save') {
            return redirect()->route('categories.list')->with('success_msg', trans('bases::notices.update_success_message'));
        }
        return redirect()->route('categories.edit', $id)->with('success_msg', trans('bases::notices.update_success_message'));
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
            $category = $this->categoryRepository->findById($id);
            if (empty($category)) {
                abort(404);
            }

            if (!$category->is_default) {
                $this->categoryRepository->delete($category);
                event(new DeletedContentEvent(CATEGORY_MODULE_SCREEN_NAME, $request, $category));
            }

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
            return $response->setMessage(trans('bases::notices.no_select'));
        }

        foreach ($ids as $id) {
            $category = $this->categoryRepository->findById($id);
            if (!$category->is_default) {
                $this->categoryRepository->delete($category);

                event(new DeletedContentEvent(CATEGORY_MODULE_SCREEN_NAME, $request, $category));
            }
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
            $category = $this->categoryRepository->findById($id);
            $category->status = $request->input('status');
            $this->categoryRepository->createOrUpdate($category);
            event(new UpdatedContentEvent(CATEGORY_MODULE_SCREEN_NAME, $request, $category));
        }

        return $response->setData($request->input('status'))
            ->setMessage(trans('bases::notices.update_success_message'));
    }
}
