<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('dashboard');
// })->middleware('auth');

// Route::get('/test', function () {

// });

Route::get('/', function () {
    $itemProfil = App\Models\Profil::orderBy('updated_at', 'desc')->get()->take(3);
    $itemPengetahuan = \App\Models\Budaya::first()->getLatestPengetahuan()->random(5);
    return view('welcome', compact('itemProfil', 'itemPengetahuan'));
});

Route::get('/kategori/{kategori}', 'FrontController@kategori')->name('kategori');
Route::get('/post/{model}/{id}', 'FrontController@show')->name('post.show');
Route::post('ckeditor/image_upload', 'CkeditorController@upload')->name('upload');
Route::get('search-results', 'FrontController@search')->name('search.result');
Route::get('profil', 'FrontController@profil')->name('profil');

Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function () {
    Route::get('/dashboard', 'HomeController@index');
    Route::resource('profil', 'profilController');
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
