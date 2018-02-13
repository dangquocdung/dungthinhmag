<?php

namespace Botble\Blog;

use Artisan;
use Botble\Base\Supports\Commands\Permission;
use Botble\Blog\Providers\BlogServiceProvider;
use Schema;
use Botble\Base\Interfaces\PluginInterface;

class Plugin implements PluginInterface
{

    /**
     * @return array
     * @author Sang Nguyen
     */
    public static function permissions()
    {
        return [
            [
                'name' => 'Posts',
                'flag' => 'posts.list',
                'is_feature' => true,
            ],
            [
                'name' => 'Create',
                'flag' => 'posts.create',
                'parent_flag' => 'posts.list',
            ],
            [
                'name' => 'Edit',
                'flag' => 'posts.edit',
                'parent_flag' => 'posts.list',
            ],
            [
                'name' => 'Delete',
                'flag' => 'posts.delete',
                'parent_flag' => 'posts.list',
            ],

            [
                'name' => 'Categories',
                'flag' => 'categories.list',
                'is_feature' => true,
            ],
            [
                'name' => 'Create',
                'flag' => 'categories.create',
                'parent_flag' => 'categories.list',
            ],
            [
                'name' => 'Edit',
                'flag' => 'categories.edit',
                'parent_flag' => 'categories.list',
            ],
            [
                'name' => 'Delete',
                'flag' => 'categories.delete',
                'parent_flag' => 'categories.list',
            ],

            [
                'name' => 'Tags',
                'flag' => 'tags.list',
                'is_feature' => true,
            ],
            [
                'name' => 'Create',
                'flag' => 'tags.create',
                'parent_flag' => 'tags.list',
            ],
            [
                'name' => 'Edit',
                'flag' => 'tags.edit',
                'parent_flag' => 'tags.list',
            ],
            [
                'name' => 'Delete',
                'flag' => 'tags.delete',
                'parent_flag' => 'tags.list',
            ],
        ];
    }

    /**
     * @author Sang Nguyen
     */
    public static function activate()
    {
        Permission::registerPermission(self::permissions());
        Artisan::call('migrate', [
            '--force' => true,
            '--path' => 'plugins/blog/database/migrations',
        ]);

        Artisan::call('vendor:publish', [
            '--force' => true,
            '--tag' => 'assets',
            '--provider' => BlogServiceProvider::class,
        ]);
    }

    /**
     * @author Sang Nguyen
     */
    public static function deactivate()
    {

    }

    /**
     * @author Sang Nguyen
     */
    public static function remove()
    {
        Permission::removePermission(self::permissions());
        Schema::dropIfExists('posts');
        Schema::dropIfExists('categories');
        Schema::dropIfExists('tags');
    }
}