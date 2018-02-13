<?php

namespace Botble\Widget\Http\Controllers;

use Assets;
use Botble\Base\Http\Controllers\BaseController;
use Botble\Base\Http\Responses\AjaxResponse;
use Botble\Widget\Factories\AbstractWidgetFactory;
use Botble\Widget\Repositories\Interfaces\WidgetInterface;
use Botble\Widget\WidgetId;
use Exception;
use Illuminate\Http\Request;
use WidgetGroup;

class WidgetController extends BaseController
{
    /**
     * @var WidgetInterface
     */
    protected $widgetRepository;

    /**
     * WidgetController constructor.
     * @param WidgetInterface $widgetRepository
     * @author Sang Nguyen
     */
    public function __construct(WidgetInterface $widgetRepository)
    {
        $this->widgetRepository = $widgetRepository;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @author Sang Nguyen
     * @since 24/09/2016 2:10 PM
     */
    public function getList()
    {
        page_title()->setTitle(trans('widgets::global.name'));

        Assets::addJavascript(['sortable']);
        Assets::addAppModule(['widget']);

        $widgets = $this->widgetRepository->getByTheme();
        foreach ($widgets as $widget) {
            WidgetGroup::group($widget->sidebar_id)->position($widget->position)->addWidget($widget->widget_id, $widget->data);
        }

        return view('widgets::list');
    }

    /**
     * @param Request $request
     * @param AjaxResponse $response
     * @return AjaxResponse
     * @author Sang Nguyen
     * @since 24/09/2016 3:14 PM
     */
    public function postSaveWidgetToSidebar(Request $request, AjaxResponse $response)
    {
        try {
            $sidebar_id = $request->get('sidebar_id');
            $this->widgetRepository->deleteBy([
                'sidebar_id' => $sidebar_id,
                'theme' => setting('theme'),
            ]);
            foreach ($request->get('items', []) as $key => $item) {
                parse_str($item, $data);
                $args = [
                    'sidebar_id' => $sidebar_id,
                    'widget_id' => $data['id'],
                    'theme' => setting('theme'),
                    'position' => $key,
                    'data' => $data,
                ];
                $this->widgetRepository->createOrUpdate($args);
            }

            $widget_areas = $this->widgetRepository->allBy([
                'sidebar_id' => $sidebar_id,
                'theme' => setting('theme'),
            ]);
            return $response
                ->setData(view('widgets::item', compact('widget_areas'))->render())
                ->setMessage(trans('widgets::global.save_success'));
        } catch (Exception $ex) {
            return $response->setError(true)->setMessage($ex->getMessage());
        }
    }

    /**
     * @param Request $request
     * @param AjaxResponse $response
     * @return AjaxResponse
     * @author Sang Nguyen
     */
    public function postDelete(Request $request, AjaxResponse $response)
    {
        try {
            $this->widgetRepository->deleteBy([
                'theme' => setting('theme'),
                'sidebar_id' => $request->get('sidebar_id'),
                'position' => $request->get('position'),
                'widget_id' => $request->get('widget_id'),
            ]);
            return $response->setMessage(trans('widgets::global.delete_success'));
        } catch (Exception $ex) {
            return $response->setError(true)->setMessage($ex->getMessage());
        }

    }

    /**
     * The action to show widget output via ajax.
     *
     * @param Request $request
     *
     * @return mixed
     */
    public function showWidget(Request $request)
    {
        $this->prepareGlobals($request);

        $factory = app()->make('botble.widget');
        $widgetName = $request->input('name', '');
        $widgetParams = $factory->decryptWidgetParams($request->input('params', ''));

        return call_user_func_array([$factory, $widgetName], $widgetParams);
    }

    /**
     * Set some specials variables to modify the workflow of the widget factory.
     *
     * @param Request $request
     */
    protected function prepareGlobals(Request $request)
    {
        WidgetId::set($request->input('id', 1) - 1);
        AbstractWidgetFactory::$skipWidgetContainer = true;
    }
}
