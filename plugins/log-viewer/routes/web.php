<?php

Route::group(['namespace' => 'Botble\LogViewer\Http\Controllers', 'middleware' => 'web'], function () {

    Route::group(['prefix' => config('cms.admin_dir'), 'middleware' => 'auth'], function () {
        Route::group(['prefix' => 'system/logs'], function () {

            Route::get('/', [
                'as' => 'log-viewer::dashboard',
                'uses' => 'LogViewerController@index',
                'permission' => 'logs.list',
            ]);

            Route::get('/list', [
                'as' => 'log-viewer::logs.list',
                'uses' => 'LogViewerController@listLogs',
                'permission' => 'logs.list',
            ]);

            Route::delete('delete', [
                'as' => 'log-viewer::logs.delete',
                'uses' => 'LogViewerController@delete',
                'permission' => 'logs.delete',
            ]);

            Route::group([
                'prefix' => '{date}',
            ], function () {
                Route::get('/', [
                    'as' => 'log-viewer::logs.show',
                    'uses' => 'LogViewerController@show',
                    'permission' => 'logs.list',
                ]);

                Route::get('download', [
                    'as' => 'log-viewer::logs.download',
                    'uses' => 'LogViewerController@download',
                    'permission' => 'logs.list',
                ]);

                Route::get('{level}', [
                    'as' => 'log-viewer::logs.filter',
                    'uses' => 'LogViewerController@showByLevel',
                    'permission' => 'logs.list',
                ]);
            });

        });
    });

});