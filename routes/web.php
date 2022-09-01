<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaisController;
use App\Http\Controllers\MonedaController;
use App\Http\Controllers\ConversionController;


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
    return view('welcome');
});

Route::get('/pais.index',[PaisController::class,'index'])->name('pais.index');
Route::get('/pais.create',[PaisController::class,'create'])->name('pais.create');
Route::post('/pais.store',[PaisController::class,'store'])->name('pais.store');
Route::get('/editarpais/{id}',[PaisController::class,'edit'])->name('editarpais');
Route::put('/actualizarpais/{id}',[PaisController::class,'update'])->name('actualizarpais');
Route::delete('/eliminarpais/{id}',[PaisController::class,'destroy'])->name('eliminarpais');


Route::get('/moneda.index',[MonedaController::class,'index'])->name('moneda.index');
Route::get('/moneda.create',[MonedaController::class,'create'])->name('moneda.create');
Route::post('/moneda.store',[MonedaController::class,'store'])->name('moneda.store');
Route::get('/editarmoneda/{id}',[MonedaController::class,'edit'])->name('editarmoneda');
Route::put('/actualizarmoneda/{id}',[MonedaController::class,'update'])->name('actualizarmoneda');
Route::delete('/eliminarmoneda/{id}',[MonedaController::class,'destroy'])->name('eliminarmoneda');

Route::get('/conversion.create',[ConversionController::class,'index'])->name('moneda.index');


