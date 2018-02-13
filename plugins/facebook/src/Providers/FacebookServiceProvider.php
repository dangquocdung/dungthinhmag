<?php

namespace Botble\Facebook\Providers;

use Botble\Base\Events\SessionStarted;
use Botble\Facebook\Widgets\FacebookWidget;
use Event;
use Illuminate\Support\ServiceProvider;
use Botble\Base\Supports\Helper;

class FacebookServiceProvider extends ServiceProvider
{
    /**
     * @var \Illuminate\Foundation\Application
     */
    protected $app;

    /**
     * @author Sang Nguyen
     */
    public function register()
    {
        Helper::autoload(__DIR__ . '/../../helpers');
    }

    /**
     * @author Sang Nguyen
     */
    public function boot()
    {
        $this->loadTranslationsFrom(__DIR__ . '/../../resources/lang', 'facebook');
        $this->loadRoutesFrom(__DIR__ . '/../../routes/web.php');
        $this->mergeConfigFrom(__DIR__ . '/../../config/facebook.php', 'facebook');
        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'facebook');

        if ($this->app->runningInConsole()) {
            $this->publishes([__DIR__ . '/../../resources/views' => resource_path('views/vendor/facebook')], 'views');
            $this->publishes([__DIR__ . '/../../resources/lang' => resource_path('lang/vendor/facebook')], 'lang');
            $this->publishes([__DIR__ . '/../../config/facebook.php' => config_path('facebook.php')], 'config');
            $this->publishes([__DIR__ . '/../../resources/assets' => resource_path('assets/core/plugins/facebook')], 'resources');
            $this->publishes([__DIR__ . '/../../public/assets' => public_path('vendor/core/plugins/facebook'),], 'assets');
        }

        if (setting('facebook_enable')) {
            $this->app->register(HookServiceProvider::class);
            $this->app->register(EventServiceProvider::class);
        }

        Event::listen(SessionStarted::class, function () {
            dashboard_menu()->registerItem([
                'id' => 'cms-plugins-facebook',
                'priority' => 3,
                'parent_id' => 'cms-core-settings',
                'name' => __('Facebook'),
                'icon' => null,
                'url' => route('facebook.settings'),
                'permissions' => ['facebook.settings'],
            ]);
        });

        if (defined('POST_MODULE_SCREEN_NAME')) {
            config()->set('facebook.screen_supported_auto_post', array_merge(config('facebook.screen_supported_auto_post', []), [POST_MODULE_SCREEN_NAME]));
        }

        if (defined('PRODUCT_MODULE_SCREEN_NAME')) {
            config()->set('facebook.screen_supported_auto_post', array_merge(config('facebook.screen_supported_auto_post', []), [PRODUCT_MODULE_SCREEN_NAME]));
        }

        $this->app->booted(function () {
            register_widget(FacebookWidget::class);
        });
    }
}
