<?php

use App\Http\Controllers\Articulo_Controller;
use App\Http\Controllers\Cliente_Controller;
use App\Http\Controllers\Venta_Controller;
use App\Http\Controllers\Detalle_Venta_Controller;
use App\Http\Controllers\Detalle_Ingreso_Controller;
use App\Http\Controllers\Trabajador_Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('articulos', App\Http\Controllers\Articulo_Controller::class);
Route::resource('clientes', App\Http\Controllers\Cliente_Controller::class);
Route::resource('ventas', App\Http\Controllers\Venta_Controller::class);
Route::resource('detalles-ventas', App\Http\Controllers\Detalle_Venta_Controller::class);
Route::resource('detalles-ingresos', App\Http\Controllers\Detalle_Ingreso_Controller::class);
Route::resource('trabajador', App\Http\Controllers\Trabajador_Controller::class);
