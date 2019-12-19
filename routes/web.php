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

Route::get('resizeImage', 'ImageController@resizeImage');
Route::get('resizeImage2', 'ImageController@resizeImage2');
Route::post('resizeImagePost', 'ImageController@resizeImagePost')->name('resizeImagePost');
Route::post('resizeImagePost', 'ImageController@resizeAndWatermakingImagePost')->name('resizeImagePost2');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
