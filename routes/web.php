<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ServicioController;
use App\Http\Controllers\AutoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\EmpleadoController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::view("/", "index")->name("index");

Route::resource("servicio", ServicioController::class);

Route::resource('auto', AutoController::class);

Route::resource('cliente', ClienteController::class);

Route::resource('empleado', EmpleadoController::class);
