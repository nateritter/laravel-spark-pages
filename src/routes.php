<?php

Route::group(['middleware' => ['web', 'dev']], function () {
    Route::get('/pages/create', '\NateRitter\LaravelSparkPages\PageController@create');
    Route::post('/pages', '\NateRitter\LaravelSparkPages\PageController@store');
    Route::put('/pages/{slug}', '\NateRitter\LaravelSparkPages\PageController@update');
    Route::delete('/pages/{slug}', '\NateRitter\LaravelSparkPages\PageController@destroy');
    Route::get('/pages/{slug}/edit', '\NateRitter\LaravelSparkPages\PageController@edit');
});

Route::get('/{slug1}/{slug2?}', '\NateRitter\LaravelSparkPages\PageController@show');
