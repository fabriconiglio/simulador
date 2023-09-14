<?php

use App\Http\Controllers\ResolTablaDatoInmController;
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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/resol_tabla_dato_inm/{id}/edit', [ResolTablaDatoInmController::class, 'edit'])->name('resol_tabla_dato_inm.edit');
Route::put('/resol_tabla_dato_inm/{id}', [ResolTablaDatoInmController::class, 'update'])->name('resol_tabla_dato_inm.update');
Route::resource('resol_tabla_dato_inm', ResolTablaDatoInmController::class);


