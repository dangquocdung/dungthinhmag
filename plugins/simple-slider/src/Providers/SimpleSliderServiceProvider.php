<?php

namespace Botble\SimpleSlider\Providers;

use Botble\Base\Events\SessionStarted;
use Botble\SimpleSlider\Models\SimpleSlider;
use Event;
use Illuminate\Support\ServiceProvider;
use Botble\SimpleSlider\Repositories\Caches\SimpleSliderCacheDecorator;
use Botble\SimpleSlider\Repositories\Eloquent\SimpleSliderRepository;
use Botble\SimpleSlider\Repositories\Interfaces\SimpleSliderInterface;
use Botble\Support\Services\Cache\Cache;
use Botble\Base\Supports\Helper;

class SimpleSliderServiceProvider extends ServiceProvider
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
        if (setting('enable_cache', false)) {
            $this->app->singleton(SimpleSliderInterface::class, function () {
                return new SimpleSliderCacheDecorator(new SimpleSliderRepository(new SimpleSlider()), new Cache($this->app['cache'], SimpleSliderRepository::class));
            });
        } else {
            $this->app->singleton(SimpleSliderInterface::class, function () {
                return new SimpleSliderRepository(new SimpleSlider());
            });
        }

        Helper::autoload(__DIR__ . '/../../helpers');
    }

    /**
     * @author Sang Nguyen
     */
    public function boot()
    {
        $this->loadTranslationsFrom(__DIR__ . '/../../resources/lang', 'simple-slider');
        $this->loadRoutesFrom(__DIR__.'/../../routes/web.php');
        $this->mergeConfigFrom(__DIR__ . '/../../config/simple-slider.php', 'simple-slider');
        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'simple-slider');

        if ($this->app->runningInConsole()) {
            $this->loadMigrationsFrom(__DIR__ . '/../../database/migrations');

            $this->publishes([__DIR__ . '/../../resources/views' => resource_path('views/vendor/simple-slider')], 'views');
            $this->publishes([__DIR__ . '/../../resources/lang' => resource_path('lang/vendor/simple-slider')], 'lang');
            $this->publishes([__DIR__ . '/../../config/simple-slider.php' => config_path('simple-slider.php')], 'config');
            $this->publishes([__DIR__ . '/../../resources/assets' => resource_path('assets/core/plugins/simple-slider')], 'resources');
            $this->publishes([__DIR__ . '/../../public/assets' => public_path('vendor/core/plugins/simple-slider')], 'assets');
        }

        $this->app->register(HookServiceProvider::class);

        Event::listen(SessionStarted::class, function () {
            dashboard_menu()->registerItem([
                'id' => 'cms-plugins-simple-slider',
                'priority' => 100,
                'parent_id' => null,
                'name' => trans('simple-slider::simple-slider.menu'),
                'icon' => 'fa fa-picture-o',
                'url' => route('simple-slider.list'),
                'permissions' => ['simple-slider.list'],
            ]);
        });

        $this->app->booted(function () {
            if (defined('LANGUAGE_MODULE_SCREEN_NAME')) {
                config(['language.supported' => array_merge(config('language.supported'), [SIMPLE_SLIDER_MODULE_SCREEN_NAME])]);
            }
        });
    }
}
