<?php

namespace Botble\Page\Providers;

use Botble\Page\Repositories\Interfaces\PageInterface;
use Illuminate\Support\ServiceProvider;
use Menu;

class HookServiceProvider extends ServiceProvider
{

    /**
     * Boot the service provider.
     * @author Sang Nguyen
     */
    public function boot()
    {
        add_action(MENU_ACTION_SIDEBAR_OPTIONS, [$this, 'registerMenuOptions'], 10);
        add_filter(DASHBOARD_FILTER_TOP_BLOCKS, [$this, 'addPageStatsWidget'], 15, 1);
    }

    /**
     * Register sidebar options in menu
     */
    public function registerMenuOptions()
    {
        $pages = Menu::generateSelect([
            'model' => app(PageInterface::class)->getModel(),
            'screen' => PAGE_MODULE_SCREEN_NAME,
            'theme' => false,
            'options' => [
                'class' => 'list-item',
            ],
        ]);
        echo view('pages::partials.menu-options', compact('pages'));
    }

    /**
     * @param $widgets
     * @return string
     * @author Sang Nguyen
     * @throws \Throwable
     */
    public function addPageStatsWidget($widgets)
    {
        $pages = app(PageInterface::class)->count(['status' => 1]);

        return $widgets . view('pages::partials.widgets.stats', compact('pages'))->render();
    }
}
