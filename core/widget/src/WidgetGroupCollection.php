<?php

namespace Botble\Widget;

use Botble\Widget\Contracts\ApplicationWrapperContract;

class WidgetGroupCollection
{
    /**
     * The array of widget groups.
     *
     * @var array
     */
    protected $groups;

    /**
     * Constructor.
     *
     * @param ApplicationWrapperContract $app
     * @author Sang Nguyen
     */
    public function __construct(ApplicationWrapperContract $app)
    {
        $this->app = $app;
    }

    /**
     * Get the widget group object.
     *
     * @param $sidebar_id
     *
     * @return WidgetGroup
     * @author Sang Nguyen
     */
    public function group($sidebar_id)
    {
        if (isset($this->groups[$sidebar_id])) {
            return $this->groups[$sidebar_id];
        }
        $this->groups[$sidebar_id] = new WidgetGroup(['id' => $sidebar_id, 'name' => $sidebar_id], $this->app);
        return $this->groups[$sidebar_id];
    }

    /**
     * @param $args
     * @return $this|mixed
     * @author Sang Nguyen
     */
    public function setGroup($args)
    {
        if (isset($this->groups[$args['id']])) {
            $group = $this->groups[$args['id']];
            $group->setName(array_get($args, 'name'));
            $group->setDescription(array_get($args, 'description'));
            $this->groups[$args['id']] = $group;
        } else {
            $this->groups[$args['id']] = new WidgetGroup($args, $this->app);
        }
        return $this;
    }

    /**
     * @param $group_id
     * @return $this
     * @author Sang Nguyen
     */
    public function removeGroup($group_id)
    {
        if (isset($this->groups[$group_id])) {
            unset($this->groups[$group_id]);
        }
        return $this;
    }

    /**
     * @return array
     * @author Sang Nguyen
     */
    public function getGroups()
    {
        return $this->groups;
    }
}
