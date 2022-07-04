<?php

use Illuminate\Support\Facades\Route;

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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('paises', App\Http\Controllers\PaiseController::class)->middleware('auth');

Route::resource('ciudades', App\Http\Controllers\CiudadeController::class)->middleware('auth');

Route::resource('proveedores', App\Http\Controllers\ProveedoreController::class)->middleware('auth');

Route::resource('tipo-documentos', App\Http\Controllers\TipoDocumentoController::class)->middleware('auth');

Route::resource('entrada-cabeceras', App\Http\Controllers\EntradaCabeceraController::class)->middleware('auth');

Route::resource('tipo-productos', App\Http\Controllers\TipoProductoController::class)->middleware('auth');

Route::resource('productos', App\Http\Controllers\ProductoController::class)->middleware('auth');

Route::resource('inventario', App\Http\Controllers\InventarioController::class)->middleware('auth');

Route::resource('entrada-detalle', App\Http\Controllers\EntradaDetalleController::class)->middleware('auth');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
