<?php

namespace Botble\Gallery\Repositories\Eloquent;

use Botble\Support\Repositories\Eloquent\RepositoriesAbstract;
use Botble\Gallery\Repositories\Interfaces\GalleryInterface;

class GalleryRepository extends RepositoriesAbstract implements GalleryInterface
{

    /**
     * Get all galleries.c
     *
     * @return mixed
     * @author Sang Nguyen
     */
    public function getAll()
    {
        $data = $this->model->where('galleries.status', '=', 1);

        $data = apply_filters(BASE_FILTER_BEFORE_GET_FRONT_PAGE_ITEM, $data, $this->model, GALLERY_MODULE_SCREEN_NAME)->get();
        $this->resetModel();
        return $data;
    }

    /**
     * @return mixed
     * @author Sang Nguyen
     */
    public function getDataSiteMap()
    {
        $data = $this->model->where('galleries.status', '=', 1)
            ->select('galleries.*')
            ->orderBy('galleries.created_at', 'desc');
        $data = apply_filters(BASE_FILTER_BEFORE_GET_FRONT_PAGE_ITEM, $data, $this->model, GALLERY_MODULE_SCREEN_NAME)->get();
        $this->resetModel();
        return $data;
    }

    /**
     * @param $limit
     * @return mixed
     * @author Sang Nguyen
     */
    public function getFeaturedGalleries($limit)
    {
        $data = $this->model->with(['user'])->where(['galleries.status' => 1, 'galleries.featured' => 1])
            ->select('galleries.id', 'galleries.name', 'galleries.user_id', 'galleries.image', 'galleries.created_at')
            ->orderBy('galleries.order', 'asc')
            ->limit($limit);
        $data = apply_filters(BASE_FILTER_BEFORE_GET_FRONT_PAGE_ITEM, $data, $this->model, GALLERY_MODULE_SCREEN_NAME)->get();
        $this->resetModel();
        return $data;
    }
}
