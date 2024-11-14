<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorVistas;

 Route::get('/', function () {
    return view('utilesescolares');
}); 

Route::view('/utiles', 'utiles')->name('rutacacas');
Route::view('/component','componentes')->name('rutacomponent');
Route::post('/enviarCliente',[controladorVistas::class,'procesarCliente' ])->name('rutaenviar');