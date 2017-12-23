<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['namespace' => 'V1', 'prefix' => 'v1'], function () {
    Route::get('/twitter', 'TwitterController@index');
});


Route::get('/', function () {
    return view('welcome');
});
