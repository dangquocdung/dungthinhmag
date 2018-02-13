<?php

Route::group(['namespace' => 'Botble\Setting\Http\Controllers', 'middleware' => 'web'], function () {

    Route::group(['prefix' => env('ADMIN_DIR'), 'middleware' => 'auth'], function () {
        Route::group(['prefix' => 'settings'], function () {
            /**
             * for general config
             */
            Route::get('/', [
                'as' => 'settings.options',
                'uses' => 'SettingController@getOptions',
            ]);

            Route::post('/edit', [
                'as' => 'settings.edit',
                'uses' => 'SettingController@postEdit',
            ]);

            /**
             * for email config
             */
            Route::get('/email', [
                'as' => 'settings.email',
                'uses' => 'SettingController@getEmailConfig',
            ]);

            Route::post('/email/edit', [
                'as' => 'settings.email.edit',
                'uses' => 'SettingController@postEditEmailConfig',
            ]);
        });
    });

});