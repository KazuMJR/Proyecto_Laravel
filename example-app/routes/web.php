<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\CamionController;
use App\Http\Controllers\MarcaController;
use App\Http\Controllers\TransporteController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('camiones', CamionController::class)->parameters([
    'camiones' => 'camion'
]);


Route::resource('marcas', MarcaController::class);

Route::resource('transportes', TransporteController::class);
