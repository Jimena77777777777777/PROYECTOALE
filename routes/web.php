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
    ///
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// rutas servicios
Route::get('/servicios', [App\Http\Controllers\ServicesController::class, 'index']);

Route::get('/servicios/create', [App\Http\Controllers\ServicesController::class, 'create']);
Route::get('/servicios/¨{services}/edit', [App\Http\Controllers\ServicesController::class, 'edit']);
Route::post('/servicios', [App\Http\Controllers\ServicesController::class, 'sendData']);

Route::put('/servicios/{services}', [App\Http\Controllers\ServicesController::class, 'update']);
Route::delete('/servicios/{services}', [App\Http\Controllers\ServicesController::class, 'destroy']);


// ruta campus
Route::get('/sedes', [App\Http\Controllers\CampusController ::class, 'index']);

Route::get('/sedes/create', [App\Http\Controllers\CampusController::class, 'create']);
Route::get('/sedes/¨{campuses}/edit', [App\Http\Controllers\CampusController::class, 'edit']);
Route::post('/sedes', [App\Http\Controllers\CampusController::class, 'sendData']);

Route::put('/sedes/{campuses}', [App\Http\Controllers\CampusController::class, 'update']);
Route::delete('/sedes/{campuses}', [App\Http\Controllers\CampusController::class, 'destroy']);