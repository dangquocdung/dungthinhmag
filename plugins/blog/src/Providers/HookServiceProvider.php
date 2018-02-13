<?php

namespace Botble\Blog\Providers;

use Botble\Base\Supports\Helper;
use Eloquent;
use Illuminate\Support\ServiceProvider;
use Botble\Blog\Repositories\Interfaces\CategoryInterface;
use Botble\Blog\Repositories\Interfaces\TagInterface;
use Menu;
use Botble\Blog\Repositories\Interfaces\PostInterface;
use Botble\Dashboard\Repositories\Interfaces\DashboardWidgetInterface;
use Botble\Dashboard\Repositories\Interfaces\DashboardWidgetSettingInterface;
use Auth;
use SeoHelper;
use Theme;

class HookServiceProvider extends ServiceProvider
{

    /**
     * Boot the service provider.
     * @author Sang Nguyen
     */
    public function boot()
    {
        add_action(MENU_ACTION_SIDEBAR_OPTIONS, [$this, 'registerMenuOptions'], 2);
        add_filter(DASHBOARD_FILTER_ADMIN_LIST, [$this, 'registerDashboardWidgets'], 21, 1);
        add_filter(DASHBOARD_FILTER_TOP_BLOCKS, [$this, 'addStatsWidgets'], 13, 1);
        add_filter(BASE_FILTER_PUBLIC_SINGLE_DATA, [$this, 'handleSingleView'], 2, 1);

        admin_bar()->registerLink('Post', route('posts.create'), 'add-new');
    }

    /**
     * Register sidebar options in menu
     */
    public function registerMenuOptions()
    {
        $categories = Menu::generateSelect([
            'model' => app(CategoryInterface::class)->getModel(),
            'screen' => CATEGORY_MODULE_SCREEN_NAME,
            'theme' => false,
            'options' => [
                'class' => 'list-item',
            ],
        ]);
        echo view('blog::categories.partials.menu-options', compact('categories'));

        $tags = Menu::generateSelect([
            'model' => app(TagInterface::class)->getModel(),
            'screen' => TAG_MODULE_SCREEN_NAME,
            'theme' => false,
            'options' => [
                'class' => 'list-item',
            ]
        ]);
        echo view('blog::tags.partials.menu-options', compact('tags'));
    }

    /**
     * @param $widgets
     * @return array
     * @author Sang Nguyen
     */
    public function registerDashboardWidgets($widgets)
    {
        $widget = app(DashboardWidgetInterface::class)->firstOrCreate(['name' => 'widget_posts_recent']);
        $widget_setting = app(DashboardWidgetSettingInterface::class)->getFirstBy([
            'widget_id' => $widget->id,
            'user_id' => Auth::user()->getKey(),
        ], ['status', 'order']);

        if (empty($widget_setting) || array_key_exists($widget_setting->order, $widgets)) {
            $widgets[] = view('blog::posts.widgets.base', compact('widget', 'widget_setting'))->render();
        } else {
            $widgets[$widget_setting->order] = view('blog::posts.widgets.base', compact('widget', 'widget_setting'))->render();
        }
        return $widgets;
    }

    /**
     * @param $widgets
     * @return string
     * @author Sang Nguyen
     */
    public function addStatsWidgets($widgets)
    {
        $posts = app(PostInterface::class)->count(['status' => 1]);
        $categories = app(CategoryInterface::class)->count(['status' => 1]);

        $widgets = $widgets . view('blog::posts.widgets.stats', compact('posts'))->render();
        $widgets = $widgets . view('blog::categories.widgets.stats', compact('categories'))->render();

        return $widgets;
    }

    /**
     * @param $slug
     * @return array
     * @author Sang Nguyen
     */
    public function handleSingleView($slug)
    {
        if ($slug instanceof Eloquent) {
            $data = [];
            switch ($slug->reference) {
                case POST_MODULE_SCREEN_NAME:
                    $post = app(PostInterface::class)->findById($slug->reference_id);
                    $post = apply_filters(BASE_FILTER_BEFORE_GET_SINGLE, $post, app(PostInterface::class)->getModel(), POST_MODULE_SCREEN_NAME);
                    if (!empty($post)) {

                        Helper::handleViewCount($post, 'viewed_post');

                        SeoHelper::setTitle($post->name)->setDescription($post->description);

                        admin_bar()->registerLink(trans('blog::posts.edit_this_post'), route('posts.edit', $post->id));

                        Theme::breadcrumb()->add(__('Home'), route('public.index'))->add($post->name, route('public.single', $slug->key));

                        do_action(BASE_ACTION_PUBLIC_RENDER_SINGLE, POST_MODULE_SCREEN_NAME, $post);

                        $data = [
                            'view' => 'post',
                            'data' => compact('post'),
                        ];
                    }
                    break;
                case CATEGORY_MODULE_SCREEN_NAME:
                    $category = app(CategoryInterface::class)->findById($slug->reference_id);
                    $category = apply_filters(BASE_FILTER_BEFORE_GET_SINGLE, $category, app(CategoryInterface::class)->getModel(), CATEGORY_MODULE_SCREEN_NAME);
                    if (!empty($category)) {
                        SeoHelper::setTitle($category->name)->setDescription($category->description);

                        admin_bar()->registerLink(trans('blog::categories.edit_this_category'), route('categories.edit', $category->id));

                        $allRelatedCategoryIds = array_unique(array_merge(app(CategoryInterface::class)->getAllRelatedChildrenIds($category), [$category->id]));

                        $posts = app(PostInterface::class)->getByCategory($allRelatedCategoryIds, 12);

                        Theme::breadcrumb()->add(__('Home'), route('public.index'))->add($category->name, route('public.single', $slug->key));

                        do_action(BASE_ACTION_PUBLIC_RENDER_SINGLE, CATEGORY_MODULE_SCREEN_NAME, $category);
                        return [
                            'view' => 'category',
                            'data' => compact('category', 'posts'),
                        ];
                    }
                    break;
                case TAG_MODULE_SCREEN_NAME:
                    $tag = app(TagInterface::class)->findById($slug->reference_id);
                    $tag = apply_filters(BASE_FILTER_BEFORE_GET_SINGLE, $tag, app(TagInterface::class)->getModel(), TAG_MODULE_SCREEN_NAME);

                    if (!$tag) {
                        return abort(404);
                    }

                    SeoHelper::setTitle($tag->name)->setDescription($tag->description);

                    admin_bar()->registerLink(trans('blog::tags.edit_this_tag'), route('tags.edit', $tag->id));

                    $posts = get_posts_by_tag($tag->id);

                    Theme::breadcrumb()->add(__('Home'), route('public.index'))->add($tag->name, route('public.single', $slug->key));

                    do_action(BASE_ACTION_PUBLIC_RENDER_SINGLE, TAG_MODULE_SCREEN_NAME, $tag);
                    $data = [
                        'view' => 'tag',
                        'data' => compact('tag', 'posts'),
                    ];
                    break;
            }
            if (!empty($data)) {
                return $data;
            }
        }

        return $slug;
    }
}
