<?php

namespace Botble\Slug\Providers;

use Form;
use Illuminate\Support\ServiceProvider;

class FormServiceProvider extends ServiceProvider
{

    /**
     * Boot the service provider.
     * @return void
     * @author Sang Nguyen
     */
    public function boot()
    {
        $this->app->booted(function () {
            Form::component('permalink', 'slug::permalink', [
                'name',
                'value' => null,
                'id' => null,
                'url' => null,
                'preview' => route('public.single', config('slug.pattern')),
                'default_slug' => url('/'),
                'ending_url' => config('cms.public_single_ending_url'),
                'attributes' => [],
            ]);
        });
    }
}
