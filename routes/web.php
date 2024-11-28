<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConversorController;

#Route::get('/', function () {
   # return view('welcome');
#});

Route::prefix('api')
 ->middleware('api')
 ->group(function () {
     Route::post('/quilometros', [ConversorController::class, 'quilometrosParaAnosLuz']);
     Route::post('/anosLuz', [ConversorController::class, 'anosLuzParaQuilometros']);
});

Route::get('/km-anos-luz', function () {
    return view('km-anos-luz');
});

Route::get('/anos-luz-km', function () {
    return view('anos-luz-km');
});

Route::get('/', function () {
    return view('anos-luz-km');
});

