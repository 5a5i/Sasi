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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('movies', 'MovieController');
Route::resource('person', 'PersonController');
Route::get('/', 'MovieController@index');
Route::get('/fetch_data?{page}', 'MovieController@fetch_data');
/*Route::get('create/fetch_data', 'MovieController@fetch_data');*/
/*Route::get('/add_movie', 'MovieController@create');*/
/*Route::get('/movies/{id}', 'MovieController@show');*/
/*Route::resource('add_movie', 'PersonController');*/

Route::get('blade', function () {
    return view('child');
});