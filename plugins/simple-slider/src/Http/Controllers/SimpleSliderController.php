<?php

namespace Botble\SimpleSlider\Http\Controllers;

use Botble\Base\Events\CreatedContentEvent;
use Botble\Base\Events\DeletedContentEvent;
use Botble\Base\Events\UpdatedContentEvent;
use Botble\Base\Http\Responses\AjaxResponse;
use Botble\SimpleSlider\Http\Requests\SimpleSliderRequest;
use Botble\SimpleSlider\Repositories\Interfaces\SimpleSliderInterface;
use Botble\Base\Http\Controllers\BaseController;
use Illuminate\Http\Request;
use MongoDB\Driver\Exception\Exception;
use Botble\SimpleSlider\Http\DataTables\SimpleSliderDataTable;

class SimpleSliderController extends BaseController
{
    /**
     * @var SimpleSliderInterface
     */
    protected $simpleSliderRepository;

    /**
     * SimpleSliderController constructor.
     * @param SimpleSliderInterface $simpleSliderRepository
     * @author Sang Nguyen
     */
    public function __construct(SimpleSliderInterface $simpleSliderRepository)
    {
        $this->simpleSliderRepository = $simpleSliderRepository;
    }

    /**
     * Display all simple-slider
     * @param SimpleSliderDataTable $dataTable
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @author Sang Nguyen
     */
    public function getList(SimpleSliderDataTable $dataTable)
    {

        page_title()->setTitle(trans('simple-slider::simple-slider.list'));

        return $dataTable->renderTable(['title' => trans('simple-slider::simple-slider.list')]);
    }

    /**
     * Show create form
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @author Sang Nguyen
     */
    public function getCreate()
    {
        page_title()->setTitle(trans('simple-slider::simple-slider.create'));

        return view('simple-slider::create');
    }

    /**
     * Insert new SimpleSlider into database
     *
     * @param SimpleSliderRequest $request
     * @return \Illuminate\Http\RedirectResponse
     * @author Sang Nguyen
     */
    public function postCreate(SimpleSliderRequest $request)
    {
        $simple_slider = $this->simpleSliderRepository->createOrUpdate($request->input());

        event(new CreatedContentEvent(SIMPLE_SLIDER_MODULE_SCREEN_NAME, $request, $simple_slider));

        if ($request->input('submit') === 'save') {
            return redirect()->route('simple-slider.list')->with('success_msg', trans('bases::notices.create_success_message'));
        } else {
            return redirect()->route('simple-slider.edit', $simple_slider->id)->with('success_msg', trans('bases::notices.create_success_message'));
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
        page_title()->setTitle(trans('simple-slider::simple-slider.edit') . ' #' . $id);

        $simple_slider = $this->simpleSliderRepository->findById($id);
        return view('simple-slider::edit', compact('simple_slider'));
    }

    /**
     * @param $id
     * @param SimpleSliderRequest $request
     * @return \Illuminate\Http\RedirectResponse
     * @author Sang Nguyen
     */
    public function postEdit($id, SimpleSliderRequest $request)
    {
        $simple_slider = $this->simpleSliderRepository->findById($id);
        $simple_slider->fill($request->input());

        $this->simpleSliderRepository->createOrUpdate($simple_slider);

        event(new UpdatedContentEvent(SIMPLE_SLIDER_MODULE_SCREEN_NAME, $request, $simple_slider));

        if ($request->input('submit') === 'save') {
            return redirect()->route('simple-slider.list')->with('success_msg', trans('bases::notices.update_success_message'));
        } else {
            return redirect()->route('simple-slider.edit', $id)->with('success_msg', trans('bases::notices.update_success_message'));
        }
    }

    /**
     * @param Request $request
     * @param $id
     * @param AjaxResponse $response
     * @return array|AjaxResponse
     * @author Sang Nguyen
     */
    public function getDelete(Request $request, $id, AjaxResponse $response)
    {
        try {
            $simple_slider = $this->simpleSliderRepository->findById($id);
            $this->simpleSliderRepository->delete($simple_slider);

            event(new DeletedContentEvent(SIMPLE_SLIDER_MODULE_SCREEN_NAME, $request, $simple_slider));

            return $response->setMessage(trans('bases::notices.deleted'));
        } catch (Exception $e) {
            return $response->setError(true)->setMessage(trans('bases::notices.cannot_delete'));
        }
    }

    /**
     * @param Request $request
     * @param AjaxResponse $response
     * @return array|AjaxResponse|\Illuminate\Http\JsonResponse
     * @author Sang Nguyen
     */
    public function postDeleteMany(Request $request, AjaxResponse $response)
    {
        $ids = $request->input('ids');
        if (empty($ids)) {
            return $response->setError(true)->setMessage(trans('bases::notices.no_select'));
        }

        foreach ($ids as $id) {
            $simple_slider = $this->simpleSliderRepository->findById($id);
            $this->simpleSliderRepository->delete($simple_slider);
            event(new DeletedContentEvent(SIMPLE_SLIDER_MODULE_SCREEN_NAME, $request, $simple_slider));
        }

        return $response->setMessage(trans('bases::notices.delete_success_message'));
    }

    /**
     * @param Request $request
     * @param AjaxResponse $response
     * @return array|AjaxResponse
     * @author Sang Nguyen
     */
    public function postChangeStatus(Request $request, AjaxResponse $response)
    {
        $ids = $request->input('ids');
        if (empty($ids)) {
            return $response->setError(true)->setMessage(trans('bases::notices.no_select'));
        }

        foreach ($ids as $id) {
            $simple_slider = $this->simpleSliderRepository->findById($id);
            $simple_slider->status = $request->input('status');
            $this->simpleSliderRepository->createOrUpdate($simple_slider);

            event(new UpdatedContentEvent(SIMPLE_SLIDER_MODULE_SCREEN_NAME, $request, $simple_slider));
        }

        return $response->setData($request->input('status'))
            ->setMessage(trans('bases::notices.update_success_message'));
    }
}
