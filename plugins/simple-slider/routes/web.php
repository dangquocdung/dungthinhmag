<?php

Route::group(['namespace' => 'Botble\SimpleSlider\Http\Controllers', 'middleware' => 'web'], function () {

    Route::group(['prefix' => config('cms.admin_dir'), 'middleware' => 'auth'], function () {
        Route::group(['prefix' => 'simple-sliders'], function () {

            Route::get('/', [
                'as' => 'simple-slider.list',
                'uses' => 'SimpleSliderController@getList',
            ]);

            Route::get('/create', [
                'as' => 'simple-slider.create',
                'uses' => 'SimpleSliderController@getCreate',
            ]);

            Route::post('/create', [
                'as' => 'simple-slider.create',
                'uses' => 'SimpleSliderController@postCreate',
            ]);

            Route::get('/edit/{id}', [
                'as' => 'simple-slider.edit',
                'uses' => 'SimpleSliderController@getEdit',
            ]);

            Route::post('/edit/{id}', [
                'as' => 'simple-slider.edit',
                'uses' => 'SimpleSliderController@postEdit',
            ]);

            Route::get('/delete/{id}', [
                'as' => 'simple-slider.delete',
                'uses' => 'SimpleSliderController@getDelete',
            ]);

            Route::post('/delete-many', [
                'as' => 'simple-slider.delete.many',
                'uses' => 'SimpleSliderController@postDeleteMany',
                'permission' => 'simple-slider.delete',
            ]);

            Route::post('/change-status', [
                'as' => 'simple-slider.change.status',
                'uses' => 'SimpleSliderController@postChangeStatus',
                'permission' => 'simple-slider.edit',
            ]);
        });
    });
    
});