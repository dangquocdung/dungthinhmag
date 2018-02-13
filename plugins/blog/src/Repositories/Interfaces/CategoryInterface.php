<?php

namespace Botble\Blog\Repositories\Interfaces;

use Botble\Support\Repositories\Interfaces\RepositoryInterface;
use Illuminate\Support\Collection;

interface CategoryInterface extends RepositoryInterface
{

    /**
     * @return mixed
     * @author Sang Nguyen
     */
    public function getDataSiteMap();

    /**
     * @param $limit
     * @author Sang Nguyen
     */
    public function getFeaturedCategories($limit);

    /**
     * @param array $condition
     * @return mixed
     * @author Sang Nguyen
     */
    public function getAllCategories(array $condition = []);

    /**
     * @param $id
     * @return mixed
     */
    public function getCategoryById($id);

    /**
     * @param array $select
     * @param array $orderBy
     * @return Collection
     */
    public function getCategories(array $select, array $orderBy);

    /**
     * @param $id
     * @return array|null
     */
    public function getAllRelatedChildrenIds($id);
}
