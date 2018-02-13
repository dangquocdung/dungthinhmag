<?php

namespace Botble\Gallery;

use Botble\Gallery\Events\GalleryBoxEvent;
use Botble\Gallery\Repositories\Interfaces\GalleryMetaInterface;
use Theme;

class Gallery
{
    /**
     * @var array
     */
    protected $screens = [];

    /**
     * @var GalleryMetaInterface
     */
    protected $galleryMetaRepository;

    /**
     * Gallery constructor.
     * @author Sang Nguyen
     */
    public function __construct(GalleryMetaInterface $galleryMetaRepository)
    {
        $this->screens = [
            GALLERY_MODULE_SCREEN_NAME,
            PAGE_MODULE_SCREEN_NAME,
        ];

        if (defined('POST_MODULE_SCREEN_NAME')) {
            $this->screens[] = POST_MODULE_SCREEN_NAME;
        }

        $this->galleryMetaRepository = $galleryMetaRepository;
    }

    /**
     * @param $module
     * @author Sang Nguyen
     */
    public function registerModule($screen)
    {
        $this->screens[] = $screen;
    }

    /**
     * @return array
     * @author Sang Nguyen
     */
    public function getScreens()
    {
        event(GalleryBoxEvent::class);

        return $this->screens;
    }

    /**
     * @param string $screen
     * @param \Illuminate\Http\Request $request
     * @param \Eloquent|false $data
     */
    public function saveGallery($screen, $request, $data)
    {
        if ($data != false && in_array($screen, Gallery::getScreens())) {
            if (empty($request->input('gallery'))) {
                $this->galleryMetaRepository->deleteBy([
                    'content_id' => $data->id,
                    'reference' => $screen,
                ]);
            }
            $meta = $this->galleryMetaRepository->getFirstBy([
                'content_id' => $data->id,
                'reference' => $screen,
            ]);
            if (!$meta) {
                $meta = $this->galleryMetaRepository->getModel();
                $meta->content_id = $data->id;
                $meta->reference = $screen;
            }

            $meta->images = $request->input('gallery');
            $this->galleryMetaRepository->createOrUpdate($meta);
        }
    }

    /**
     * @param string $screen
     * @param \Eloquent|false $data
     */
    public function deleteGallery($screen, $data)
    {
        if (in_array($screen, Gallery::getScreens())) {
            $this->galleryMetaRepository->deleteBy([
                'content_id' => $data->id,
                'reference' => $screen,
            ]);
        }
        return true;
    }

    /**
     * @return $this
     * @author Sang Nguyen
     */
    public function registerAssets()
    {
        Theme::asset()->add('lightgallery-css', 'vendor/core/plugins/gallery/css/lightgallery.min.css');
        Theme::asset()->container('footer')->add('lightgallery-js', 'vendor/core/plugins/gallery/js/lightgallery.min.js', ['jquery']);
        Theme::asset()->container('footer')->add('imagesloaded', 'vendor/core/plugins/gallery/js/imagesloaded.pkgd.min.js', ['jquery']);
        Theme::asset()->container('footer')->add('masonry', 'vendor/core/plugins/gallery/js/masonry.pkgd.min.js', ['jquery']);
        Theme::asset()->container('footer')->add('gallery-js', 'vendor/core/plugins/gallery/js/gallery.js', ['jquery']);

        return $this;
    }
}