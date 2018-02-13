<?php

require_once __DIR__ . '/../vendor/autoload.php';

Route::group(['namespace' => 'Theme\LaraMag\Http\Controllers', 'middleware' => 'web'], function () {

    Route::group(apply_filters(BASE_FILTER_GROUP_PUBLIC_ROUTE, []), function () {


    });

});
