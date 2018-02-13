<?php

namespace Botble\SeoHelper\Bases;

use Botble\Base\Supports\Collection;
use Botble\SeoHelper\Contracts\Entities\MetaCollectionContract;
use Botble\SeoHelper\Contracts\Helpers\MetaContract;
use Botble\SeoHelper\Contracts\RenderableContract;
use Botble\SeoHelper\Helpers\Meta;

abstract class MetaCollection extends Collection implements MetaCollectionContract
{

    /**
     * Meta tag prefix.
     *
     * @var string
     */
    protected $prefix = '';

    /**
     * Meta tag name property.
     *
     * @var string
     */
    protected $nameProperty = 'name';

    /**
     * The items contained in the collection.
     *
     * @var array
     */
    protected $items = [];

    /**
     * Ignored tags, they have dedicated class.
     *
     * @var array
     */
    protected $ignored = [];

    /**
     * Set meta prefix name.
     *
     * @param  string $prefix
     *
     * @return \Botble\SeoHelper\Bases\MetaCollection
     * @author ARCANEDEV <arcanedev.maroc@gmail.com>
     */
    public function setPrefix($prefix)
    {
        $this->prefix = $prefix;

        return $this->refresh();
    }

    /**
     * Add many meta tags.
     *
     * @param  array $meta
     *
     * @return \Botble\SeoHelper\Bases\MetaCollection
     * @author ARCANEDEV <arcanedev.maroc@gmail.com>
     */
    public function addMany(array $meta)
    {
        foreach ($meta as $name => $content) {
            $this->add($name, $content);
        }

        return $this;
    }

    /**
     * Add a meta to collection.
     *
     * @param  string $name
     * @param  string $content
     *
     * @return \Botble\SeoHelper\Bases\MetaCollection
     * @author ARCANEDEV <arcanedev.maroc@gmail.com>
     */
    public function add($name, $content)
    {
        if (empty($name) || empty($content)) {
            return $this;
        }

        return $this->addMeta($name, $content);
    }

    /**
     * Make a meta and add it to collection.
     *
     * @param  string $name
     * @param  string $content
     *
     * @return \Botble\SeoHelper\Bases\MetaCollection
     * @author ARCANEDEV <arcanedev.maroc@gmail.com>
     */
    protected function addMeta($name, $content)
    {
        $meta = Meta::make($name, $content, $this->nameProperty, $this->prefix);

        $this->put($meta->key(), $meta);

        return $this;
    }

    /**
     * Remove a meta from the collection by key.
     *
     * @param  array|string $names
     *
     * @return \Botble\SeoHelper\Bases\MetaCollection
     * @author ARCANEDEV <arcanedev.maroc@gmail.com>
     */
    public function remove($names)
    {
        $names = $this->prepareName($names);

        return $this->forget($names);
    }

    /**
     * Render the tag.
     *
     * @return string
     * @author ARCANEDEV <arcanedev.maroc@gmail.com>
     */
    public function render()
    {
        $output = $this->map(function (RenderableContract $meta) {
            return $meta->render();
        })->toArray();

        return implode(PHP_EOL, array_filter($output));
    }

    /**
     * Render the tag.
     *
     * @return string
     * @author ARCANEDEV <arcanedev.maroc@gmail.com>
     */
    public function __toString()
    {
        return $this->render();
    }

    /**
     * Check if meta is ignored.
     *
     * @param  string $name
     *
     * @return bool
     * @author ARCANEDEV <arcanedev.maroc@gmail.com>
     */
    protected function isIgnored($name)
    {
        return in_array($name, $this->ignored);
    }

    /**
     * Remove an item from the collection by key.
     *
     * @param  string|array $keys
     *
     * @return \Botble\SeoHelper\Bases\MetaCollection
     * @author ARCANEDEV <arcanedev.maroc@gmail.com>
     */
    public function forget($keys)
    {
        foreach ((array)$keys as $key) {
            $this->offsetUnset($key);
        }

        return $this;
    }

    /**
     * Refresh meta collection items.
     *
     * @return \Botble\SeoHelper\Bases\MetaCollection
     * @author ARCANEDEV <arcanedev.maroc@gmail.com>
     */
    private function refresh()
    {
        return $this->map(function (MetaContract $meta) {
            return $meta->setPrefix($this->prefix);
        });
    }

    /**
     * Prepare names.
     *
     * @param  array|string $names
     *
     * @return array
     * @author ARCANEDEV <arcanedev.maroc@gmail.com>
     */
    protected function prepareName($names)
    {
        return array_map(function ($name) {
            return strtolower(trim($name));
        }, (array)$names);
    }
}
