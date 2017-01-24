<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::group(['namespace' => 'WEB'], function () {

    Route::group(['middleware' => 'auth'], function () {
        Route::get('/', 'DashboardController@index')->name('home');

        Route::group(['prefix' => 'shops', 'as' => 'shops.'], function () {
            Route::get('/', 'ShopsController@index')->name('index');
        });
    });

});

Route::group(['as' => 'auth.'], function () {
    Route::get('/login', 'AuthController@index')->name('index');
    Route::post('/login/request', 'AuthController@login')->name('login');
});