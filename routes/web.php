<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('dashboard');
// })->middleware('auth');

// Route::get('/test', function () {

// });

Route::get('/', function () {
    return view('welcome');
});

Route::get('/kategori/{kategori}', 'FrontController@kategori')->name('kategori');
Route::get('/post/{model}/{id}', 'FrontController@show')->name('post.show');
Route::post('ckeditor/image_upload', 'CkeditorController@upload')->name('upload');

Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function () {
    Route::get('/dashboard', 'HomeController@index');
    Route::resource('ceritarakyat', 'CeritaRakyatController');
    Route::resource('sejarah', 'SejarahController');
    Route::resource('ritual', 'RitualController');
    Route::resource('alatmusik', 'AlatMusikController');
    Route::resource('rumahadat', 'RumahAdatController');
    Route::resource('adatlahiran', 'AdatLahiranController');
    Route::resource('adatpernikahan', 'AdatPernikahanController');
    Route::resource('pakaian', 'PakaianController');
    Route::resource('senjata', 'SenjataController');
    Route::resource('tradisi', 'TradisiController');
});

Auth::routes();
