<?php

use App\Http\Controllers\ResolTablaDatoInmController;
use App\Http\Controllers\ResolTablaDatoRodController;
use App\Http\Controllers\SimulacionController;
use Illuminate\Support\Facades\Auth;
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
    return redirect()->route('login');
});

Auth::routes();

Route::middleware(['auth'])->group(function () {
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/resol_tabla_dato_inm/{id}/edit', [ResolTablaDatoInmController::class, 'edit'])->name('resol_tabla_dato_inm.edit');
Route::put('/resol_tabla_dato_inm/{id}', [ResolTablaDatoInmController::class, 'update'])->name('resol_tabla_dato_inm.update');
Route::resource('resol_tabla_dato_inm', ResolTablaDatoInmController::class);
Route::get('/ejecutar-simulacion-inmueble', [SimulacionController::class, 'ejecutarInmueble'])->name('simulacion.ejecutarInmueble');
Route::get('/resol_tabla_dato_rod/{id}/edit', [ResolTablaDatoRodController::class, 'edit'])->name('resol_tabla_dato_rod.edit');
Route::put('/resol_tabla_dato_rod/{id}', [ResolTablaDatoRodController::class, 'update'])->name('resol_tabla_dato_rod.update');
Route::resource('resol_tabla_dato_rod', ResolTablaDatoRodController::class);
Route::get('/ejecutar-simulacion-rodados', [SimulacionController::class, 'ejecutarRodado'])->name('simulacion.ejecutarRodado');

});


