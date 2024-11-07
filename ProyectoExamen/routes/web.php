<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorVistas;

/* Route::get('/',[controladorVistas::class,'home' ])->name('utilesescolares');
Route::get('/formulario',[controladorVistas::class,'insert' ])->name('rutacacas');
Route::get('/consultar',[controladorVistas::class,'select' ])->name('rutaconsultar'); */


 Route::get('/', function () {
    return view('utilesescolares');
}); 

/*
Route::view('/', 'inicio')->name('rutainicio');

Route::view('/formulario', 'formulario')->name('rutacacas');

Route::view('/consultar', 'clientes')->name('rutaconsulta');

Route::view('/co', 'clientes')->name('rutaconsulta'); 
*/

/* Route::view('/','inicio')->name('inicio');

Route::view('/formulario','formulario')->name('rutacacas');

Route::view('/consultar','clientes')->name('consulta'); 

las rutas se comentan con la tecla shit+alt+a
*/

Route::view('/component','componentes')->name('rutacomponent');
Route::post('/enviarCliente',[controladorVistas::class,'procesarCliente' ])->name('rutaenviar');