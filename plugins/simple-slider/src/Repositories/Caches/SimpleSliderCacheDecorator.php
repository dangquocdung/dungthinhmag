<?php

namespace Botble\SimpleSlider\Repositories\Caches;

use Botble\Support\Repositories\Caches\CacheAbstractDecorator;
use Botble\Support\Services\Cache\CacheInterface;
use Botble\SimpleSlider\Repositories\Interfaces\SimpleSliderInterface;

class SimpleSliderCacheDecorator extends CacheAbstractDecorator implements SimpleSliderInterface
{
    /**
     * @var SimpleSliderInterface
     */
    protected $repository;

    /**
     * @var CacheInterface
     */
    protected $cache;

    /**
     * SimpleSliderCacheDecorator constructor.
     * @param SimpleSliderInterface $repository
     * @param CacheInterface $cache
     * @author Sang Nguyen
     */
    public function __construct(SimpleSliderInterface $repository, CacheInterface $cache)
    {
        $this->repository = $repository;
        $this->cache = $cache;
    }

    /**
     * @param array $condition
     * @return mixed
     * @author Sang Nguyen
     */
    public function getAllByCondition(array $condition = [])
    {
        return $this->getDataIfExistCache(__FUNCTION__, func_get_args());
    }
}
