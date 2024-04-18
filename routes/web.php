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

//  rutas servicios
// rutas de servicios
Route::get('/servicios', [App\Http\Controllers\ServicesController::class, 'index']);

Route::get('/servicios/create', [App\Http\Controllers\ServicesController::class, 'create']);
Route::get('/servicios/¨{services}/edit', [App\Http\Controllers\ServicesController::class, 'edit']);
Route::post('/servicios', [App\Http\Controllers\ServicesController::class, 'sendData']);

Route::put('/servicios/{services}', [App\Http\Controllers\ServicesController::class, 'update']);
Route::delete('/servicios/{services}', [App\Http\Controllers\ServicesController::class, 'destroy']);