<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\clienteController;

Route::get('/',[clienteController::class, 'home'])->name('rutainicio');
Route::resource('cliente',clienteController::class);
