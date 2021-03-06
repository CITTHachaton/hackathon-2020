<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('contagiados', function () {
    $persona = array(
        'nombre' => 'Benjamin',
        'covid'  => true,
        'date'   => date('d-m-Y'),
    );
    return $persona;
});


Route::get('regiones', 'HomeController@regiones');
Route::get('covid', 'HomeController@covid');