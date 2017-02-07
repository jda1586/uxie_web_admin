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
        Route::any('/logout', 'AuthController@logout')->name('logout');

        Route::get('/', 'DashboardController@index')->name('home');

        Route::group(['prefix' => 'shops', 'as' => 'shops.'], function () {
            Route::get('/', 'ShopsController@index')->name('index');
            Route::get('/create/{email?}', 'ShopsController@create')->name('create');
            Route::post('/store', 'ShopsController@store')->name('store');
        });

        Route::group(['prefix' => 'users', 'as' => 'users.'], function () {
            Route::get('/', 'UsersController@index')->name('index');
            Route::get('/create', 'UsersController@create')->name('create');
            Route::post('/store', 'UsersController@store')->name('store');
        });
    });

    Route::group(['as' => 'auth.'], function () {
        Route::get('/login', 'AuthController@index')->name('index');
        Route::post('/login/request', 'AuthController@login')->name('login');
    });

});