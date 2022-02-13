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
    return view('inicio');
});



Route::resource('proyecto', 'ProyectoController');
Route::get('proyecto/{id}/download', 'ProyectoController@download')->name('proy.download');

Route::resource('avances', 'AvancesController');
Route::get('avances/{id}/download', 'AvancesController@download')->name('avan.download');

Route::resource('estadisticas', 'EstadisticasController');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
