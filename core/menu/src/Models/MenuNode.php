<?php

namespace Botble\Menu\Models;

use Botble\Slug\Repositories\Interfaces\SlugInterface;
use Eloquent;
use stdClass;

class MenuNode extends Eloquent
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'menu_nodes';

    /**
     * @return mixed
     * @author Sang Nguyen
     */
    public function parent()
    {
        return $this->belongsTo(MenuNode::class, 'parent_id');
    }

    /**
     * @return mixed
     * @author Sang Nguyen
     */
    public function child()
    {
        return $this->hasMany(MenuNode::class, 'parent_id');
    }

    /**
     * @return mixed
     * @author Sang Nguyen
     */
    public function getRelated()
    {
        $item = new stdClass;
        $item->name = $this->title;
        $item->url = $this->url ? url($this->url) : url('/');

        if ($this->type != 'custom-link' && $this->key != null) {
            $item->url = route('public.single', $this->key);
        }

        return $item;
    }

    /**
     * @return bool
     * @author Sang Nguyen
     */
    public function hasChild()
    {
        return $this->has_child == 1;
    }
}
