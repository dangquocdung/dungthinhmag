<?php

namespace Botble\Base\Supports;

use Theme;

class JsonFeedManager
{
    /**
     * @var mixed
     */
    protected $items = [];

    /**
     * JsonFeedManager constructor.
     * @author Sang Nguyen
     */
    public function __construct()
    {
        admin_bar()->setDisplay(false);
    }

    /**
     * @param array $item
     * @return $this
     * @author Sang Nguyen
     */
    public function addItem($key, array $item)
    {
        $this->items[$key][] = $item;
        return $this;
    }

    /**
     * @return mixed
     * @author Sang Nguyen
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @return mixed
     * @author Sang Nguyen
     */
    public function render()
    {
        return [
            'version' => 'https://jsonfeed.org/version/1',
            'title' => 'Json Feed',
            'home_page_url' => route('public.index'),
            'feed_url' => route('public.feed.json'),
            'icon' => Theme::asset()->url('images/favicon.png'),
            'favicon' => Theme::asset()->url('images/favicon.png'),
            'items' => $this->getItems(),
        ];
    }
}