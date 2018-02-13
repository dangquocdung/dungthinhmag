<?php

namespace Botble\Gallery\Providers;

use Botble\Gallery\Repositories\Interfaces\GalleryInterface;
use Eloquent;
use Gallery;
use Illuminate\Support\ServiceProvider;
use Theme;

class HookServiceProvider extends ServiceProvider
{

    /**
     * @author Sang Nguyen
     */
    public function boot()
    {
        add_action(BASE_ACTION_META_BOXES, [$this, 'addGalleryBox'], 13, 3);
        add_shortcode('gallery', __('Gallery images'), __('Add a gallery'), [$this, 'render']);
        shortcode()->setAdminConfig('gallery', view('gallery::partials.short-code-admin-config')->render());
        add_filter(BASE_FILTER_PUBLIC_SINGLE_DATA, [$this, 'handleSingleView'], 3, 1);

        Theme::asset()->add('gallery-css', 'vendor/core/plugins/gallery/css/gallery.css');
    }

    /**
     * @param $screen
     * @author Sang Nguyen
     */
    public function addGalleryBox($screen)
    {
        if (in_array($screen, Gallery::getScreens())) {
            add_meta_box('gallery_wrap', trans('gallery::gallery.gallery_box'), [$this, 'galleryMetaField'], $screen, 'advanced', 'default');
        }
    }

    /**
     * @author Sang Nguyen
     * @throws \Throwable
     */
    public function galleryMetaField()
    {
        $value = null;
        $args = func_get_args();
        if (!empty($args[0])) {
            $value = gallery_meta_data($args[0]->id, $args[1]);
        }
        return view('gallery::gallery-box', compact('value'))->render();
    }

    /**
     * @param $shortcode
     * @return null
     * @author Sang Nguyen
     */
    public function render($shortcode)
    {
        return render_galleries($shortcode->limit);
    }

    /**
     * @param $slug
     * @return array
     * @author Sang Nguyen
     */
    public function handleSingleView($slug)
    {
        if ($slug instanceof Eloquent && $slug->reference == GALLERY_MODULE_SCREEN_NAME) {
            Gallery::registerAssets();
            $gallery = app(GalleryInterface::class)->findById($slug->reference_id);
            $gallery = apply_filters(BASE_FILTER_BEFORE_GET_SINGLE, $gallery, app(GalleryInterface::class)->getModel(), GALLERY_MODULE_SCREEN_NAME);

            Theme::breadcrumb()->add(__('Home'), route('public.index'))->add($gallery->name, route('public.single', $slug->key));

            do_action(BASE_ACTION_PUBLIC_RENDER_SINGLE, GALLERY_MODULE_SCREEN_NAME, $gallery);

            return [
                'view' => 'gallery',
                'data' => compact('gallery'),
            ];
        }
        return $slug;
    }
}
