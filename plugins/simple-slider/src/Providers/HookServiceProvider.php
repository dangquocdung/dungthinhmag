<?php

namespace Botble\SimpleSlider\Providers;

use Illuminate\Support\ServiceProvider;
use Theme;

class HookServiceProvider extends ServiceProvider
{
    /**
     * @var \Illuminate\Foundation\Application
     */
    protected $app;

    /**
     * @author Sang Nguyen
     */
    public function boot()
    {
        Theme::asset()->container('footer')->add('owl.carousel', 'vendor/core/plugins/simple-slider/packages/owl-carousel/owl.carousel.css');
        Theme::asset()->container('footer')->add('simple-slider-css', 'vendor/core/plugins/simple-slider/css/simple-slider.css');
        Theme::asset()->container('footer')->add('carousel', 'vendor/core/plugins/simple-slider/packages/owl-carousel/owl.carousel.js', ['jquery']);
        Theme::asset()->container('footer')->add('simple-slider-js', 'vendor/core/plugins/simple-slider/js/simple-slider.js', ['jquery']);
    }
}
