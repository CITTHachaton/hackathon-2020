<?php

use Illuminate\Support\Facades\Route;


Route::get('/offline', function () { return view('offline');});
Route::get('/', 'HomeController@index');
Route::get('/web', 'HomeController@presentacion')->name('home');




