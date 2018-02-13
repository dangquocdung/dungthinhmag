<?php

namespace Botble\Facebook\Providers;

use Illuminate\Support\ServiceProvider;

class HookServiceProvider extends ServiceProvider
{
    /**
     * Boot the service provider.
     * @author Sang Nguyen
     */
    public function boot()
    {
        if (setting('facebook_add_script', true)) {
            add_filter(THEME_FRONT_FOOTER, [$this, 'registerFacebookScripts'], 1920);
        }
        if (setting('facebook_show_chat_box', true)) {
            add_filter(THEME_FRONT_FOOTER, [$this, 'registerFacebookChat'], 1921);
        }

        add_action(BASE_ACTION_META_BOXES, [$this, 'addFacebookBox'], 134, 3);

        if (setting('facebook_use_comments', true)) {
            add_filter(BASE_FILTER_PUBLIC_COMMENT_AREA, [$this, 'addFacebookComments'], 137, 1);
        }
    }

    /**
     * @param string $html
     * @return string
     * @author Sang Nguyen
     * @throws \Throwable
     */
    public function registerFacebookScripts($html)
    {
        return $html . view('facebook::scripts')->render();
    }

    /**
     * @param string $html
     * @return string
     * @author Sang Nguyen
     * @throws \Throwable
     */
    public function registerFacebookChat($html)
    {
        return $html . view('facebook::chat')->render();
    }

    /**
     * @param $screen
     * @param $position
     * @param $object
     * @author Sang Nguyen
     */
    public function addFacebookBox($screen)
    {
        $args = func_get_args();
        if (count($args) == 2 || (count($args) == 3 && empty($args[2]))) {
            if (in_array($screen, config('facebook.screen_supported_auto_post', []))) {
                add_meta_box('facebook_box_wrap', trans('facebook::facebook.facebook_box_title'), [$this, 'facebookMetaField'], $screen, 'top', 'default');
            }
        }
    }

    /**
     * @author Sang Nguyen
     * @throws \Throwable
     */
    public function facebookMetaField()
    {
        return view('facebook::meta-box')->render();
    }

    /**
     * @param $view
     * @author Sang Nguyen
     */
    public function addFacebookComments($view)
    {
        return view('facebook::comments');
    }
}
