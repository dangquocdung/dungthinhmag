<?php

use Botble\Theme\Facades\ThemeOptionFacade;

if (!function_exists('theme')) {
    /**
     * Get the theme instance.
     *
     * @param  string $themeName
     * @param  string $layoutName
     * @return Theme
     * @author Teepluss <admin@laravel.in.th>
     */
    function theme($themeName = null, $layoutName = null)
    {
        $theme = app('theme');

        if ($themeName) {
            $theme->theme($themeName);
        }

        if ($layoutName) {
            $theme->layout($layoutName);
        }
        return $theme;
    }
}

if (!function_exists('theme_option')) {
    /**
     * @return mixed
     * @author Sang Nguyen
     */
    function theme_option($key = null, $default = null)
    {

        if (!empty($key)) {
            return ThemeOption::getOption($key, $default);
        }

        return ThemeOptionFacade::getFacadeRoot();
    }
}