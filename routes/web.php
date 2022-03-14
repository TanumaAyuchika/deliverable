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

Route::get('/','StoreController@index');
Route::get('/stores/create','StoreController@create');
Route::get('/stores/{store}/reviews','StoreController@show');
Route::get('/reviews/create','StoreController@create');
Route::post('/stores','StoreController@store');

Auth::routes();
