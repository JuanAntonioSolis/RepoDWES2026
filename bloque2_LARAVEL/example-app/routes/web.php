<?php

use App\Http\Controllers\IncidenciaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('incidencias')->group(function(){
    //Pintar todas las incidencias
    Route::get('', [IncidenciaController::class, 'index'])->name('incidencias.index');

    //Eliminar incidencia por id -> IncidenciaController
    Route::get('/delete/{id}', [IncidenciaController::class, 'delete'])->name('incidencias.delete');

    //Añadir incidencia
    Route::post('/store', [IncidenciaController::class, 'store'])->name('incidencias.store');

    //Ver incidencia
    Route::get('/show/{id}', [IncidenciaController::class, 'show'])->name('incidencias.show');
});


