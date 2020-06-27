<?php

use Illuminate\Support\Facades\Route;


Route::get('/offline', function () { return view('offline');});

Route::get('/', 'HomeController@presentacion')->name('home');
Route::get('/mapa', function () { return view('mapa');});

Route::get('/h', 'HomeController@hospitales');

Route::get('/new', 'HomeController@new_hospitales');
