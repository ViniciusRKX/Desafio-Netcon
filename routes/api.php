<?php

use App\Http\Controllers\ConversorController;
use Illuminate\Support\Facades\Route;

Route::post('/quilometros', [ConversorController::class, 'quilometrosParaAnosLuz']);
Route::post('/anosLuz', [ConversorController::class, 'anosLuzParaQuilometros']);

