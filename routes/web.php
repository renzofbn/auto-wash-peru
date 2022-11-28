<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ServicioController;
use App\Http\Controllers\AutoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\VentaController;


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

/* Route::resource('venta', VentaController::class); */

Route::get("/venta", [VentaController::class, "index"])->name("venta.index");
Route::get("/venta/crear", [VentaController::class, "create"])->name("venta.create");

Route::get("/venta/{venta}/editar", [VentaController::class, "edit"])->name("venta.edit");
Route::put("/venta/{venta}", [VentaController::class, "update"])->name("venta.update");

Route::get("/venta/{id}", [VentaController::class, "show"])->name("venta.show");
Route::post("/venta", [VentaController::class, "store"])->name("venta.store");

Route::delete("/venta/{venta}", [VentaController::class, "destroy"])->name("venta.destroy");


