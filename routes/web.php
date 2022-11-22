<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use App\Http\Controllers\ServicioController;

=======
use App\Http\Controllers\AutoController;
use App\Http\Controllers\ClienteController;
>>>>>>> b3b34599b35ce6e747f56f4b1ba68386e70f84cb

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

Route::get('/', function () {
    return view('index');
});
<<<<<<< HEAD
Route::resource("servicio", ServicioController::class);
=======

Route::resource('auto', AutoController::class);

Route::resource('cliente', ClienteController::class);
>>>>>>> b3b34599b35ce6e747f56f4b1ba68386e70f84cb
