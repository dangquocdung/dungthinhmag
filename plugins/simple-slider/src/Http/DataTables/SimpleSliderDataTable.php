<?php

namespace Botble\SimpleSlider\Http\DataTables;

use Botble\Base\Http\DataTables\DataTableAbstract;
use Botble\SimpleSlider\Repositories\Interfaces\SimpleSliderInterface;

class SimpleSliderDataTable extends DataTableAbstract
{
    /**
     * Display ajax response.
     *
     * @return \Illuminate\Http\JsonResponse
     * @author Sang Nguyen
     * @since 2.1
     */
    public function ajax()
    {
        $data = $this->datatables
            ->eloquent($this->query())
            ->editColumn('image', function ($item) {
                return view('simple-slider::partials.thumbnail', compact('item'))->render();
            })
            ->editColumn('title', function ($item) {
                return anchor_link(route('simple-slider.edit', $item->id), $item->title);
            })
            ->editColumn('checkbox', function ($item) {
                return table_checkbox($item->id);
            })
            ->editColumn('created_at', function ($item) {
                return date_from_database($item->created_at, config('cms.date_format.date'));
            })
            ->editColumn('status', function ($item) {
                return table_status($item->status);
            });

        return apply_filters(BASE_FILTER_GET_LIST_DATA, $data, SIMPLE_SLIDER_MODULE_SCREEN_NAME)
            ->addColumn('operations', function ($item) {
                return table_actions('simple-slider.edit', 'simple-slider.delete', $item);
            })
            ->escapeColumns([])
            ->make(true);
    }

    /**
     * Get the query object to be processed by datatables.
     *
     * @return \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder
     * @author Sang Nguyen
     * @since 2.1
     */
    public function query()
    {
       $model = app(SimpleSliderInterface::class)->getModel();
       /**
        * @var \Eloquent $model
        */
       $query = $model->select([
           'simple_sliders.id',
           'simple_sliders.title',
           'simple_sliders.image',
           'simple_sliders.order',
           'simple_sliders.status',
       ]);
       return $this->applyScopes(apply_filters(BASE_FILTER_DATATABLES_QUERY, $query, $model, SIMPLE_SLIDER_MODULE_SCREEN_NAME));
    }

    /**
     * @return array
     * @author Sang Nguyen
     * @since 2.1
     */
    public function columns()
    {
        return [
            'id' => [
                'title' => trans('bases::tables.id'),
                'width' => '20px',
                'class' => 'searchable searchable_id',
            ],
            'image' => [
                'title' => trans('bases::tables.image'),
                'class' => 'text-center',
            ],
            'title' => [
                'title' => trans('bases::tables.title'),
                'class' => 'text-left searchable',
            ],
            'order' => [
                'title' => trans('bases::tables.order'),
                'class' => 'text-left searchable',
            ],
            'created_at' => [
                'title' => trans('bases::tables.created_at'),
                'width' => '100px',
                'class' => 'searchable',
            ],
            'status' => [
                'title' => trans('bases::tables.status'),
                'width' => '100px',
            ],
        ];
    }

    /**
     * @return array
     * @author Sang Nguyen
     * @since 2.1
     */
    public function buttons()
    {
        $buttons = [
            'create' => [
                'link' => route('simple-slider.create'),
                'text' => view('bases::elements.tables.actions.create')->render(),
            ],
        ];
        return apply_filters(BASE_FILTER_DATATABLES_BUTTONS, $buttons, SIMPLE_SLIDER_MODULE_SCREEN_NAME);
    }

    /**
     * @return array
     * @author Sang Nguyen
     * @since 2.1
     */
    public function actions()
    {
        return [
            'delete' => [
                'link' => route('simple-slider.delete.many'),
                'text' => view('bases::elements.tables.actions.delete')->render(),
            ],
            'activate' => [
                'link' => route('simple-slider.change.status', ['status' => 1]),
                'text' => view('bases::elements.tables.actions.activate')->render(),
            ],
            'deactivate' => [
                'link' => route('simple-slider.change.status', ['status' => 0]),
                'text' => view('bases::elements.tables.actions.deactivate')->render(),
            ]
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     * @author Sang Nguyen
     * @since 2.1
     */
    protected function filename()
    {
        return SIMPLE_SLIDER_MODULE_SCREEN_NAME;
    }
}
