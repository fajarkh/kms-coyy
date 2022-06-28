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
    Route::resource('history', 'HistoryController');
    Route::resource('ritual', 'RitualController');
    Route::resource('alatmusik', 'AlatMusikController');
});

Auth::routes();
