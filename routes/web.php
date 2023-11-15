<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrestamoController;
use App\Http\Controllers\AmortizacionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/prestamos/crear', [PrestamoController::class, 'create'])->name('prestamo.crear');

Route::post('/prestamos/guardar', [PrestamoController::class, 'store'])->name('prestamo.guardar');

Route::get('/amortizaciones', [AmortizacionController::class, 'index'])->name('amortizacion.inicio');

Route::get('/amortizaciones/crear/{id}', [AmortizacionController::class, 'create'])->name('amortizacion.crear');


