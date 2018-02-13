<?php

namespace Botble\SimpleSlider;

use Artisan;
use Botble\Base\Supports\Commands\Permission;
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
                'name' => 'Simple Sliders',
                'flag' => 'simple-slider.list',
                'is_feature' => true,
            ],
            [
                'name' => 'Create',
                'flag' => 'simple-slider.create',
                'parent_flag' => 'simple-slider.list',
            ],
            [
                'name' => 'Edit',
                'flag' => 'simple-slider.edit',
                'parent_flag' => 'simple-slider.list',
            ],
            [
                'name' => 'Delete',
                'flag' => 'simple-slider.delete',
                'parent_flag' => 'simple-slider.list',
            ]
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
            '--path' => 'plugins/simple-slider/database/migrations',
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
        Schema::dropIfExists('simple-sliders');
    }
}