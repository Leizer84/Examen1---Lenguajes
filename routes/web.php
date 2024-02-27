<?php

use App\Http\Controllers\TipoAsientoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VuelosController;
use App\Http\Controllers\VuelosAsientosController;
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

Route::get('/', [VuelosController::class, 'index'])->name('inicio');
Route::get('/tipo_asientos', [TipoAsientoController::class , 'asientos'])->name('tiposAsientos');
