<?php

Route::group(['namespace' => 'Botble\Translation\Http\Controllers', 'middleware' => 'web'], function () {

    Route::group(['prefix' => config('cms.admin_dir'), 'middleware' => 'auth'], function () {
        Route::group(['prefix' => 'system/translations', 'permission' => false], function () {

            Route::get('view/{groupKey?}', [
                'as' => 'translations.group.view',
                'uses' => 'TranslationController@getView',
            ])->where('groupKey', '.*');

            Route::get('/{groupKey?}', [
                'as' => 'translations.list',
                'uses' => 'TranslationController@getIndex',
            ])->where('groupKey', '.*');

            Route::post('edit/{groupKey}', [
                'as' => 'translations.group.edit',
                'uses' => 'TranslationController@postEdit',
            ])->where('groupKey', '.*');

            Route::post('add/{groupKey}', [
                'as' => 'translations.group.add',
                'uses' => 'TranslationController@postAdd',
            ])->where('groupKey', '.*');

            Route::post('/delete/{groupKey}/{translationKey}', [
                'as' => 'translations.group.delete',
                'uses' => 'TranslationController@postDelete',
            ])->where('groupKey', '.*');

            Route::post('/publish/{groupKey}', [
                'as' => 'translations.group.publish',
                'uses' => 'TranslationController@postPublish',
            ])->where('groupKey', '.*');

            Route::post('/import', [
                'as' => 'translations.import',
                'uses' => 'TranslationController@postImport',
            ]);

            Route::post('/find', [
                'as' => 'translations.find',
                'uses' => 'TranslationController@postFind',
            ]);
        });
    });

});