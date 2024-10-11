<?php

use Illuminate\Support\Facades\Route;

/* Route::get('/', function () {
    return view('welcome');
}); */

/*
Route::view('/', 'inicio')->name('rutainicio');

Route::view('/formulario', 'formulario')->name('rutacacas');

Route::view('/consultar', 'clientes')->name('rutaconsulta');

Route::view('/co', 'clientes')->name('rutaconsulta'); 
*/

Route::view('/','inicio')->name('inicio');

Route::view('/formulario','formulario')->name('formu');

Route::view('/consultar','clientes')->name('consulta');

Route::view('/component','componentes')->name('rutacomponent');