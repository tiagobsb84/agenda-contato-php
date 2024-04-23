<?php

use App\Http\Controllers\AgendaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/lista', [AgendaController::class, 'index']);
Route::get('/formulario', [AgendaController::class, 'create']);
Route::post('/formulario/salvar', [AgendaController::class, 'store']);
