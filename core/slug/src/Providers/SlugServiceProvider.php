<?php

namespace Botble\Slug\Providers;

use Botble\Base\Supports\Helper;
use Botble\Slug\Models\Slug;
use Botble\Slug\Repositories\Caches\SlugCacheDecorator;
use Botble\Slug\Repositories\Eloquent\SlugRepository;
use Botble\Slug\Repositories\Interfaces\SlugInterface;
use Botble\Support\Services\Cache\Cache;
use Illuminate\Support\ServiceProvider;

class SlugServiceProvider extends ServiceProvider
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
            $this->app->singleton(SlugInterface::class, function () {
                return new SlugCacheDecorator(new SlugRepository(new Slug()), new Cache($this->app['cache'], SlugRepository::class));
            });
        } else {
            $this->app->singleton(SlugInterface::class, function () {
                return new SlugRepository(new Slug());
            });
        }

        Helper::autoload(__DIR__ . '/../../helpers');
    }

    /**
     * @author Sang Nguyen
     */
    public function boot()
    {
        $this->loadTranslationsFrom(__DIR__ . '/../../resources/lang', 'slug');
        $this->loadRoutesFrom(__DIR__ . '/../../routes/web.php');
        $this->mergeConfigFrom(__DIR__ . '/../../config/slug.php', 'slug');
        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'slug');

        if ($this->app->runningInConsole()) {
            $this->loadMigrationsFrom(__DIR__ . '/../../database/migrations');

            $this->publishes([__DIR__ . '/../../resources/views' => resource_path('views/vendor/slug')], 'views');
            $this->publishes([__DIR__ . '/../../resources/lang' => resource_path('lang/vendor/slug')], 'lang');
            $this->publishes([__DIR__ . '/../../config/slug.php' => config_path('slug.php')], 'config');
        }

        $this->app->register(FormServiceProvider::class);
        $this->app->register(HookServiceProvider::class);
        $this->app->register(EventServiceProvider::class);
    }
}
