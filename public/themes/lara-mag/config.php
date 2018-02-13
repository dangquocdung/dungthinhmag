<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Inherit from another theme
    |--------------------------------------------------------------------------
    |
    | Set up inherit from another if the file is not exists,
    | this is work with "layouts", "partials" and "views"
    |
    | [Notice] assets cannot inherit.
    |
    */

    'inherit' => null, //default

    /*
    |--------------------------------------------------------------------------
    | Listener from events
    |--------------------------------------------------------------------------
    |
    | You can hook a theme when event fired on activities
    | this is cool feature to set up a title, meta, default styles and scripts.
    |
    | [Notice] these event can be override by package config.
    |
    */

    'events' => [

        // Before event inherit from package config and the theme that call before,
        // you can use this event to set meta, breadcrumb template or anything
        // you want inheriting.
        'before' => function ($theme) {
            // You can remove this line anytime.
            $theme->setTitle('Copyright ©  2017 - botble.com');
        },

        // Listen on event before render a theme,
        // this event should call to assign some assets,
        // breadcrumb template.
        'beforeRenderTheme' => function ($theme) {
            // You may use this event to set up your assets.
            // $theme->asset()->usePath()->add('lara-mag-css', 'css/lara-mag.css');
            $theme->asset()->usePath()->writeStyle('lara-mag-css', str_replace('/../', $theme->asset()->url(''), file_get_contents(public_path($theme->asset()->url('css/lara-mag.css')))));

            $theme->asset()->container('footer')->usePath()->add('lara-mag-js', 'js/lara-mag.js');

            $theme->composer(['page', 'post', 'index', 'category', 'tag', 'gallery'], function ($view) {
                $view->withShortcodes();
            });
        },

        // Listen on event before render a layout,
        // this should call to assign style, script for a layout.
        'beforeRenderLayout' => [

            'default' => function ($theme) {
                // $theme->asset()->usePath()->add('ipad', 'css/layouts/ipad.css');
            }
        ]
    ]
];
