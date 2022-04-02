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
Route::group(['middleware' => ['auth']], function(){
   Route::get('/','StoreController@index');
   Route::get('/stores/create','StoreController@create');
   Route::get('/stores/{store}/reviews','StoreController@show');
   Route::get('/stores/{store}/reviews/create','ReviewController@create');
   Route::post('/stores','StoreController@store');
   Route::post('/stores/{store}/reviews', 'ReviewController@store');
   Route::delete('/reviews/{review}', 'ReviewController@delete');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
