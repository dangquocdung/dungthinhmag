<?php

Route::group(['namespace' => 'Botble\Base\Http\Controllers', 'middleware' => 'web'], function () {

    Route::group(['prefix' => config('cms.admin_dir'), 'middleware' => 'auth'], function () {

        Route::group(['prefix' => 'system'], function () {

            Route::get('/info', [
                'as' => 'system.info',
                'uses' => 'SystemController@getInfo',
                'permission' => 'superuser',
            ]);

            Route::get('/cache', [
                'as' => 'system.cache',
                'uses' => 'SystemController@getCacheManagement',
                'permission' => 'superuser',
            ]);

            Route::post('/cache/clear', [
                'as' => 'system.cache.clear',
                'uses' => 'SystemController@postClearCache',
                'permission' => 'superuser',
            ]);

        });

        Route::group(['prefix' => 'plugins'], function () {

            Route::get('/', [
                'as' => 'plugins.list',
                'uses' => 'SystemController@getListPlugins',
            ]);

            Route::get('/change', [
                'as' => 'plugins.change.status',
                'uses' => 'SystemController@getChangePluginStatus',
                'middleware' => 'preventDemo',
                'permission' => 'plugins.list',
            ]);

        });

    });

    Route::group(apply_filters(BASE_FILTER_GROUP_PUBLIC_ROUTE, []), function () {

        Route::get('/', [
            'as' => 'public.index',
            'uses' => 'PublicController@getIndex',
        ]);

        Route::get('/sitemap.xml', [
            'as' => 'public.sitemap',
            'uses' => 'PublicController@getSiteMap',
        ]);

        Route::get('/feed/json', [
            'as' => 'public.feed.json',
            'uses' => 'PublicController@getJsonFeed',
        ]);

        Route::get('{slug}' . config('cms.public_single_ending_url'), [
            'as' => 'public.single',
            'uses' => 'PublicController@getView',
        ]);

    });
});
