<?php

use App\Http\Controllers\ResolTablaDatoSimController;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/resol_tabla_dato_sim/{id}/edit', [ResolTablaDatoSimController::class, 'edit'])->name('resol_tabla_dato_sim.edit');
Route::resource('resol_tabla_dato_sim', ResolTablaDatoSimController::class);


