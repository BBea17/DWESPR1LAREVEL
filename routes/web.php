<?php

use App\Http\Controllers\CortoController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index');
})->name('index');


Route::get('listado', [CortoController::class, 'index'])->name('listado');
Route::get('listado/{id}', [CortoController::class, 'show'])->name('listadoShow');
