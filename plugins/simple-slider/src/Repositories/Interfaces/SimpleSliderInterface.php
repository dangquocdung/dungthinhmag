<?php

namespace Botble\SimpleSlider\Repositories\Interfaces;

use Botble\Support\Repositories\Interfaces\RepositoryInterface;

interface SimpleSliderInterface extends RepositoryInterface
{
    /**
     * @param array $condition
     * @return mixed
     * @author Sang Nguyen
     */
    public function getAllByCondition(array $condition = []);
}
