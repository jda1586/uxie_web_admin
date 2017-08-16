<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['namespace' => 'API', 'as' => 'api.'], function () {
    // API v1
    Route::group(['namespace' => 'v1'], function () {
        //SHOPS
        Route::group(['prefix' => 'shops', 'as' => 'shops.'], function () {
            Route::post('/','ShopsController@index')->name('index');
        });
    });
    // Users
    Route::group(['prefix' => 'users', 'as' => 'users.'], function () {
        Route::post('/exists', 'UsersController@exists')->name('exists');
    });
});
