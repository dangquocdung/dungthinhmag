<?php

Route::group(['namespace' => 'Botble\Facebook\Http\Controllers', 'middleware' => 'web'], function () {

    Route::group(['prefix' => config('cms.admin_dir'), 'middleware' => 'auth'], function () {
        Route::group(['prefix' => 'facebook'], function () {
            Route::get('/settings', [
                'as' => 'facebook.settings',
                'uses' => 'FacebookController@getSettings',
            ]);
            Route::post('/settings', [
                'as' => 'facebook.settings',
                'uses' => 'FacebookController@postSettings',
            ]);

            Route::get('/access-token', [
                'as' => 'facebook.get-access-token',
                'uses' => 'FacebookController@getAccessToken',
                'permission' => 'facebook.settings',
            ]);

            Route::get('/remove-access-token', [
                'as' => 'facebook.remove-access-token',
                'uses' => 'FacebookController@getRemoveAccessToken',
                'permission' => 'facebook.settings',
            ]);

            Route::get('/callback', [
                'as' => 'facebook.callback',
                'uses' => 'FacebookController@getHandleCallback',
                'permission' => 'facebook.settings',
            ]);
        });
    });

});