<?php

<<<<<<< HEAD
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\CamionController;
use App\Http\Controllers\MarcaController;
use App\Http\Controllers\TransporteController;
=======
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
>>>>>>> 13ce53e018c518ca5e0f6b7ca83322484f55b004

Route::get('/', function () {
    return view('welcome');
});

<<<<<<< HEAD
Route::resource('camiones', CamionController::class)->parameters([
    'camiones' => 'camion'
]);


Route::resource('marcas', MarcaController::class);

Route::resource('transportes', TransporteController::class);
=======
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
>>>>>>> 13ce53e018c518ca5e0f6b7ca83322484f55b004
