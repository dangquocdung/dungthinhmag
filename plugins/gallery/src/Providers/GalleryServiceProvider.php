<?php

namespace Botble\Gallery\Providers;

use Botble\Base\Events\SessionStarted;
use Botble\Base\Supports\Helper;
use Botble\Gallery\Facades\GalleryFacade;
use Botble\Gallery\Models\Gallery;
use Botble\Gallery\Models\GalleryMeta;
use Botble\Gallery\Repositories\Caches\GalleryMetaCacheDecorator;
use Botble\Gallery\Repositories\Eloquent\GalleryMetaRepository;
use Botble\Gallery\Repositories\Interfaces\GalleryMetaInterface;
use Event;
use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\ServiceProvider;
use Botble\Gallery\Repositories\Caches\GalleryCacheDecorator;
use Botble\Gallery\Repositories\Eloquent\GalleryRepository;
use Botble\Gallery\Repositories\Interfaces\GalleryInterface;
use Botble\Support\Services\Cache\Cache;

class GalleryServiceProvider extends ServiceProvider
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
            $this->app->singleton(GalleryInterface::class, function () {
                return new GalleryCacheDecorator(new GalleryRepository(new Gallery()), new Cache($this->app['cache'], GalleryRepository::class));
            });

            $this->app->singleton(GalleryMetaInterface::class, function () {
                return new GalleryMetaCacheDecorator(new GalleryMetaRepository(new GalleryMeta()), new Cache($this->app['cache'], GalleryMetaRepository::class));
            });
        } else {
            $this->app->singleton(GalleryInterface::class, function () {
                return new GalleryRepository(new Gallery());
            });

            $this->app->singleton(GalleryMetaInterface::class, function () {
                return new GalleryMetaRepository(new GalleryMeta());
            });
        }

        Helper::autoload(__DIR__ . '/../../helpers');

        AliasLoader::getInstance()->alias('Gallery', GalleryFacade::class);
    }

    /**
     * @author Sang Nguyen
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../../routes/web.php');
        $this->mergeConfigFrom(__DIR__ . '/../../config/gallery.php', 'gallery');
        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'gallery');
        $this->loadTranslationsFrom(__DIR__ . '/../../resources/lang', 'gallery');

        if ($this->app->runningInConsole()) {
            $this->loadMigrationsFrom(__DIR__ . '/../../database/migrations');

            $this->publishes([__DIR__ . '/../../resources/views' => resource_path('views/vendor/gallery')], 'views');
            $this->publishes([__DIR__ . '/../../resources/lang' => resource_path('lang/vendor/gallery')], 'lang');
            $this->publishes([__DIR__ . '/../../config/gallery.php' => config_path('gallery.php')], 'config');
            $this->publishes([__DIR__ . '/../../resources/assets' => resource_path('assets/core/plugins/gallery')], 'resources');
            $this->publishes([__DIR__ . '/../../public/assets' => public_path('vendor/core/plugins/gallery'),], 'assets');
        }

        $this->app->register(HookServiceProvider::class);
        $this->app->register(EventServiceProvider::class);

        Event::listen(SessionStarted::class, function () {
            dashboard_menu()->registerItem([
                'id' => 'cms-plugins-gallery', // key of menu, it should unique
                'priority' => 5,
                'parent_id' => null,
                'name' => trans('gallery::gallery.menu_name'), // menu name, if you don't need translation, you can use the name in plain text
                'icon' => 'fa fa-camera',
                'url' => route('galleries.list'),
                'permissions' => ['galleries.list'], // permission should same with route name, you can see that flag in Plugin.php
            ]);
        });

        $this->app->booted(function () {
            config(['slug.supported' => array_merge(config('slug.supported'), [GALLERY_MODULE_SCREEN_NAME])]);
            if (defined('LANGUAGE_MODULE_SCREEN_NAME')) {
                config(['language.supported' => array_merge(config('language.supported'), [GALLERY_MODULE_SCREEN_NAME])]);
            }
        });
    }
}
