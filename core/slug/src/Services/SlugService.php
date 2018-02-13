<?php

namespace Botble\Slug\Services;

use Botble\Slug\Repositories\Interfaces\SlugInterface;

/**
 * Class SlugService
 *
 * @package Botble\Slug\Services
 */
class SlugService
{
    /**
     * @var SlugInterface
     */
    protected $slugRepository;

    /**
     * SlugService constructor.
     * @param SlugInterface $slugRepository
     * @author Sang Nguyen
     */
    public function __construct(SlugInterface $slugRepository)
    {
        $this->slugRepository = $slugRepository;
    }

    /**
     * @param $name
     * @param int $slug_id
     * @return int|string
     * @author Sang Nguyen
     */
    public function create($name, $slug_id = 0)
    {
        $slug = str_slug($name);
        $index = 1;
        $baseSlug = $slug;
        while ($this->slugRepository->getModel()->where(['key' => $slug])->where('id', '!=', $slug_id)->count() > 0) {
            $slug = $baseSlug . '-' . $index++;
        }

        if (empty($slug)) {
            $slug = time();
        }

        return $slug;
    }
}