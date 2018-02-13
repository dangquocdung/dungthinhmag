<?php

namespace Botble\Blog\Repositories\Eloquent;

use Botble\Support\Repositories\Eloquent\RepositoriesAbstract;
use Botble\Blog\Repositories\Interfaces\TagInterface;

class TagRepository extends RepositoriesAbstract implements TagInterface
{

    /**
     * @return mixed
     * @author Sang Nguyen
     */
    public function getDataSiteMap()
    {
        $data = $this->model->where('tags.status', '=', 1)
            ->select('tags.*')
            ->orderBy('tags.created_at', 'desc');
        $data = apply_filters(BASE_FILTER_BEFORE_GET_FRONT_PAGE_ITEM, $data, $this->model, TAG_MODULE_SCREEN_NAME)->get();
        $this->resetModel();
        return $data;
    }

    /**
     * @param $limit
     * @return mixed
     * @author Sang Nguyen
     */
    public function getPopularTags($limit)
    {
        $data = $this->model->orderBy('tags.id', 'DESC')
            ->select('tags.*')
            ->limit($limit);
        $data = apply_filters(BASE_FILTER_BEFORE_GET_FRONT_PAGE_ITEM, $data, $this->model, TAG_MODULE_SCREEN_NAME)->get();
        $this->resetModel();
        return $data;
    }

    /**
     * @param bool $active
     * @return mixed
     * @author Sang Nguyen
     */
    public function getAllTags($active = true)
    {
        $data = $this->model->select('tags.*');
        if ($active) {
            $data = $data->where(['tags.status' => 1]);
        }

        $data = apply_filters(BASE_FILTER_BEFORE_GET_FRONT_PAGE_ITEM, $data, $this->model, TAG_MODULE_SCREEN_NAME)
            ->get();
        $this->resetModel();
        return $data;
    }
}
