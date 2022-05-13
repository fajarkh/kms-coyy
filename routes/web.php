<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
})->middleware('auth');
Route::get('/dashboard', 'HomeController@index');

Route::group(['middleware' => 'auth'], function () {
    Route::resource('history', 'HistoryController');
});

Auth::routes();
