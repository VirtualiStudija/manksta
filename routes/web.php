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

Route::get('/', 'PostController@index');
Route::post('/create', 'PostController@store');
Route::get('/redaguoti/{id}', 'PostController@edit');
Route::put('/redaguoti/{id}', 'PostController@update');
Route::delete('/istrinti/{id}', 'PostController@delete');


