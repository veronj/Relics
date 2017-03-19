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

Route::get('/', 'itemsController@index');
Route::get('/items/{item}', 'itemsController@show');
Route::post('/items', 'itemsController@store');

Route::get('/parts/create', 'PartsController@create');
Route::post('/parts/', 'PartsController@store');

Route::resource('/relics', 'RelicsController');