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
Route::get('/dashboard', 'HomeController@index');

Route::group(['middleware' => 'auth'], function () {
    Route::resource('ceritarakyat', 'CeritaRakyatController');
    Route::resource('ritual', 'RitualController');
    Route::resource('alatmusik', 'AlatMusikController');
    Route::resource('rumahadat', 'RumahAdatController');
    Route::resource('adatlahiran', 'AdatLahiranController');
    Route::resource('adatpernikahan', 'AdatPernikahanController');
    Route::resource('pakaian', 'PakaianController');
    Route::resource('senjata', 'SenjataController');
});

Auth::routes();
