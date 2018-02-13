<?php

namespace Botble\Blog\Providers;

use Botble\Base\Events\SessionStarted;
use Botble\Base\Supports\Helper;
use Botble\Blog\Models\Post;
use Botble\Blog\Repositories\Caches\PostCacheDecorator;
use Botble\Blog\Repositories\Eloquent\PostRepository;
use Botble\Blog\Repositories\Interfaces\PostInterface;
use Botble\Support\Services\Cache\Cache;
use Event;
use Illuminate\Support\ServiceProvider;
use Botble\Blog\Models\Category;
use Botble\Blog\Repositories\Caches\CategoryCacheDecorator;
use Botble\Blog\Repositories\Eloquent\CategoryRepository;
use Botble\Blog\Repositories\Interfaces\CategoryInterface;
use Botble\Blog\Models\Tag;
use Botble\Blog\Repositories\Caches\TagCacheDecorator;
use Botble\Blog\Repositories\Eloquent\TagRepository;
use Botble\Blog\Repositories\Interfaces\TagInterface;

/**
 * Class PostServiceProvider
 * @package Botble\Blog\Post
 * @author Sang Nguyen
 * @since 02/07/2016 09:50 AM
 */
class BlogServiceProvider extends ServiceProvider
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
            $this->app->singleton(PostInterface::class, function () {
                return new PostCacheDecorator(new PostRepository(new Post()), new Cache($this->app['cache'], __CLASS__));
            });

            $this->app->singleton(CategoryInterface::class, function () {
                return new CategoryCacheDecorator(new CategoryRepository(new Category()), new Cache($this->app['cache'], __CLASS__));
            });

            $this->app->singleton(TagInterface::class, function () {
                return new TagCacheDecorator(new TagRepository(new Tag()), new Cache($this->app['cache'], __CLASS__));
            });
        } else {
            $this->app->singleton(PostInterface::class, function () {
                return new PostRepository(new Post());
            });

            $this->app->singleton(CategoryInterface::class, function () {
                return new CategoryRepository(new Category());
            });

            $this->app->singleton(TagInterface::class, function () {
                return new TagRepository(new Tag());
            });
        }

        Helper::autoload(__DIR__ . '/../../helpers');
    }

    /**
     * Boot the service provider.
     * @author Sang Nguyen
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'blog');
        $this->loadTranslationsFrom(__DIR__ . '/../../resources/lang', 'blog');

        if ($this->app->runningInConsole()) {
            $this->loadMigrationsFrom(__DIR__ . '/../../database/migrations');

            $this->publishes([__DIR__ . '/../../resources/views' => resource_path('views/vendor/blog')], 'views');
            $this->publishes([__DIR__ . '/../../resources/lang' => resource_path('lang/vendor/blog')], 'lang');
            $this->publishes([__DIR__ . '/../../resources/assets' => resource_path('assets/core')], 'resources');
            $this->publishes([__DIR__ . '/../../public/assets' => public_path('vendor/core'),], 'assets');
        }

        $this->app->register(RouteServiceProvider::class);
        $this->app->register(HookServiceProvider::class);
        $this->app->register(EventServiceProvider::class);

        Event::listen(SessionStarted::class, function () {
            dashboard_menu()->registerItem([
                'id' => 'cms-plugins-blog',
                'priority' => 3,
                'parent_id' => null,
                'name' => trans('blog::posts.menu_name'),
                'icon' => 'fa fa-edit',
                'url' => route('posts.list'),
                'permissions' => ['posts.list'],
            ])
                ->registerItem([
                    'id' => 'cms-plugins-blog-post',
                    'priority' => 1,
                    'parent_id' => 'cms-plugins-blog',
                    'name' => trans('blog::posts.all_posts'),
                    'icon' => null,
                    'url' => route('posts.list'),
                    'permissions' => ['posts.list'],
                ])
                ->registerItem([
                    'id' => 'cms-plugins-blog-categories',
                    'priority' => 2,
                    'parent_id' => 'cms-plugins-blog',
                    'name' => trans('blog::categories.menu_name'),
                    'icon' => null,
                    'url' => route('categories.list'),
                    'permissions' => ['categories.list'],
                ])
                ->registerItem([
                    'id' => 'cms-plugins-blog-tags',
                    'priority' => 3,
                    'parent_id' => 'cms-plugins-blog',
                    'name' => trans('blog::tags.menu_name'),
                    'icon' => null,
                    'url' => route('tags.list'),
                    'permissions' => ['tags.list'],
                ]);
        });

        $this->app->booted(function () {
            config(['slug.supported' => array_merge(config('slug.supported'), [POST_MODULE_SCREEN_NAME, CATEGORY_MODULE_SCREEN_NAME, TAG_MODULE_SCREEN_NAME])]);
            config(['seo-helper.supported' => array_merge(config('seo-helper.supported'), [POST_MODULE_SCREEN_NAME, CATEGORY_MODULE_SCREEN_NAME, TAG_MODULE_SCREEN_NAME])]);

            if (defined('LANGUAGE_MODULE_SCREEN_NAME')) {
                config(['language.supported' => array_merge(config('language.supported'), [POST_MODULE_SCREEN_NAME, CATEGORY_MODULE_SCREEN_NAME, TAG_MODULE_SCREEN_NAME])]);
            }
        });
    }
}
