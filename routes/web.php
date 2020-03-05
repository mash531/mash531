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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/about','AboutController@index')->name('about');
Route::get('/welcome','WelcommeController@index')->name('welcome');
Auth::routes();

Route::get('/upload', 'UploadController@index')->name('upload-index');
Route::post('/upload', 'UploadController@upload')->name('upload');
Route::get('/download', 'DownloadController@download')->name('download');

