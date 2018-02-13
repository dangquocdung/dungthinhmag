<?php

namespace Botble\Slug\Providers;

use Assets;
use Illuminate\Database\Query\Builder;
use Illuminate\Database\Query\JoinClause;
use Illuminate\Support\ServiceProvider;

class HookServiceProvider extends ServiceProvider
{

    /**
     * Boot the service provider.
     * @author Sang Nguyen
     */
    public function boot()
    {
        add_filter(BASE_FILTER_SLUG_AREA, [$this, 'addSlugBox'], 17, 3);

        add_filter(BASE_FILTER_BEFORE_GET_FRONT_PAGE_ITEM, [$this, 'getItemSlug'], 3, 3);
    }

    /**
     * @param $screen
     * @param $object
     * @param null $public_route
     * @return null|string
     * @throws \Throwable
     * @author Sang Nguyen
     */
    public function addSlugBox($screen, $object = null, $public_route = null)
    {
        if (in_array($screen, config('slug.supported'))) {
            Assets::addAppModule(['slug']);
            if (empty($public_route)) {
                $public_route = 'public.single';
            }
            return view('slug::partials.slug', compact('object', 'screen', 'public_route'))->render();
        }
        return null;
    }

    /**
     * @param $data
     * @param $model
     * @param $screen
     * @return mixed
     * @author Sang Nguyen
     */
    public function getItemSlug($data, $model, $screen)
    {
        if (in_array($screen, config('slug.supported')) && $screen == $model->getScreen()) {
            $table = $model->getTable();
            $select = [$table . '.*'];
            $query = $data->getRawBindings()->getQuery();
            if ($query instanceof Builder) {
                $querySelect = $data->getQuery()->columns;
                if (!empty($querySelect)) {
                    $select = $querySelect;
                }
            }
            $select = array_merge($select, ['slugs.key']);
            return $data->join('slugs', function (JoinClause $join) use ($table, $model) {
                $join->on('slugs.reference_id', '=', $table . '.id');
            })
                ->select($select)
                ->where('slugs.reference', '=', $model->getScreen());
        }
        return $data;
    }
}
