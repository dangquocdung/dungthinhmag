<?php

namespace Botble\Base\Supports;

use Assets;

class Editor
{
    /**
     * Editor constructor.
     */
    public function __construct()
    {
        add_action(BASE_ACTION_ENQUEUE_SCRIPTS, [$this, 'registerAssets'], 12, 1);
    }

    /**
     * Register Editor's assets
     * @author Sang Nguyen
     */
    public function registerAssets()
    {
        Assets::addJavascriptDirectly(config('cms.editor.' . setting('rich_editor', config('cms.editor.primary')) . '.js'));
        Assets::addAppModule(['editor']);
    }

    /**
     * @param $name
     * @param null $value
     * @param bool $with_short_code
     * @param array $attributes
     * @return string
     * @author Sang Nguyen
     */
    public function render($name, $value = null, $with_short_code = false, array $attributes = [])
    {
        $attributes['class'] = array_get($attributes, 'class', '') . 'form-control editor-' . setting('rich_editor', config('cms.editor.primary'));
        $attributes['id'] = array_has($attributes, 'id') ? $attributes['id'] : $name;

        return view('bases::elements.forms.editor', compact('name', 'value', 'with_short_code', 'attributes'))->render();
    }
}