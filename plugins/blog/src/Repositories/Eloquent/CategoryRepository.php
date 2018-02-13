<?php

namespace Botble\Blog\Repositories\Eloquent;

use Botble\Support\Repositories\Eloquent\RepositoriesAbstract;
use Botble\Blog\Repositories\Interfaces\CategoryInterface;
use Eloquent;
use Illuminate\Support\Collection;

class CategoryRepository extends RepositoriesAbstract implements CategoryInterface
{

    /**
     * @return mixed
     * @author Sang Nguyen
     */
    public function getDataSiteMap()
    {
        $data = $this->model->where('categories.status', '=', 1)
            ->select('categories.*')
            ->orderBy('categories.created_at', 'desc');
        $data = apply_filters(BASE_FILTER_BEFORE_GET_FRONT_PAGE_ITEM, $data, $this->model, CATEGORY_MODULE_SCREEN_NAME)->get();
        $this->resetModel();
        return $data;
    }

    /**
     * @param $limit
     * @author Sang Nguyen
     * @return $this
     */
    public function getFeaturedCategories($limit)
    {
        $data = $this->model->where(['categories.status' => 1, 'categories.featured' => 1])
            ->select('categories.id', 'categories.name', 'categories.icon')
            ->orderBy('categories.order', 'asc')
            ->select('categories.*')
            ->limit($limit);
        $data = apply_filters(BASE_FILTER_BEFORE_GET_FRONT_PAGE_ITEM, $data, $this->model, CATEGORY_MODULE_SCREEN_NAME)->get();

        $this->resetModel();
        return $data;
    }

    /**
     * @param array $condition
     * @return mixed
     * @author Sang Nguyen
     */
    public function getAllCategories(array $condition = [])
    {
        $data = $this->model->select('categories.*');
        if (!empty($condition)) {
            $data = $data->where($condition);
        }

        $data = $data->orderBy('order', 'DESC');

        $data = apply_filters(BASE_FILTER_BEFORE_GET_FRONT_PAGE_ITEM, $data, $this->model, CATEGORY_MODULE_SCREEN_NAME)
            ->get();
        $this->resetModel();
        return $data;
    }

    /**
     * @param $id
     * @return mixed
     */
    public function getCategoryById($id)
    {
        $data = $this->model->where(['categories.id' => $id, 'categories.status' => 1]);

        $data = apply_filters(BASE_FILTER_BEFORE_GET_FRONT_PAGE_ITEM, $data, $this->model, CATEGORY_MODULE_SCREEN_NAME)->first();

        $this->resetModel();
        return $data;
    }

    /**
     * @param array $select
     * @param array $orderBy
     * @return Collection
     */
    public function getCategories(array $select, array $orderBy)
    {
        $model = $this->model->select($select);
        foreach ($orderBy as $by => $direction) {
            $model = $model->orderBy($by, $direction);
        }
        $data = $model->get();
        $this->resetModel();
        return $data;
    }

    /**
     * @param $id
     * @return array|null
     */
    public function getAllRelatedChildrenIds($id)
    {
        if ($id instanceof Eloquent) {
            $model = $id;
        } else {
            $model = $this->getFirstBy(['categories.id' => $id]);
        }
        if (!$model) {
            return null;
        }

        $result = [];

        $children = $model->children()->select('categories.id')->get();

        foreach ($children as $child) {
            $result[] = $child->id;
            $result = array_merge($this->getAllRelatedChildrenIds($child), $result);
        }
        $this->resetModel();
        return array_unique($result);
    }
}
