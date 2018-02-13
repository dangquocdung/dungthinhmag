<?php

namespace Botble\SimpleSlider\Repositories\Eloquent;

use Botble\Support\Repositories\Eloquent\RepositoriesAbstract;
use Botble\SimpleSlider\Repositories\Interfaces\SimpleSliderInterface;

class SimpleSliderRepository extends RepositoriesAbstract implements SimpleSliderInterface
{
    /**
     * @param array $condition
     * @return mixed
     * @author Sang Nguyen
     */
    public function getAllByCondition(array $condition = [])
    {
        $data = $this->model->where('simple_sliders.status', '=', 1)
            ->where($condition)
            ->select('simple_sliders.*')
            ->orderBy('simple_sliders.order', 'desc');

        $data = apply_filters(BASE_FILTER_BEFORE_GET_FRONT_PAGE_ITEM, $data, $this->model, SIMPLE_SLIDER_MODULE_SCREEN_NAME)->get();
        $this->resetModel();
        return $data;
    }
}
