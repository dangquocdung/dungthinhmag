<?php

namespace Botble\Optimize\Providers;

use Botble\Optimize\Http\Middleware\CollapseWhitespace;
use Botble\Optimize\Http\Middleware\ElideAttributes;
use Botble\Optimize\Http\Middleware\InlineCss;
use Botble\Optimize\Http\Middleware\InsertDNSPrefetch;
use Botble\Optimize\Http\Middleware\RemoveComments;
use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;

class OptimizeServiceProvider extends ServiceProvider
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
    }

    /**
     * @author Sang Nguyen
     */
    public function boot()
    {
        $this->mergeConfigFrom(__DIR__ . '/../../config/optimize.php', 'optimize');

        /**
         * @var Router $router
         */
        $router = $this->app['router'];

        $router->pushMiddlewareToGroup('web', CollapseWhitespace::class);
        $router->pushMiddlewareToGroup('web', ElideAttributes::class);
        $router->pushMiddlewareToGroup('web', InsertDNSPrefetch::class);
        $router->pushMiddlewareToGroup('web', RemoveComments::class);
        $router->pushMiddlewareToGroup('web', InlineCss::class);
        //$router->pushMiddlewareToGroup('web', RemoveQuotes::class);
        //$router->pushMiddlewareToGroup('web', TrimUrls::class);

        if ($this->app->runningInConsole()) {
            $this->publishes([__DIR__ . '/../../config/optimize.php' => config_path('optimize.php')], 'config');
        }
    }
}
