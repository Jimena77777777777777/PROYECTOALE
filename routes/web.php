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
Route::get('/servicios', [App\Http\Controllers\ServicesController::class, 'index']);

Route::get('/servicios/create', [App\Http\Controllers\ServicesController::class, 'create']);

Route::get('/servicios/{service}/edit', [App\Http\Controllers\ServicesController::class, 'edit']);

Route::post('/servicios', [App\Http\Controllers\ServicesController::class, 'senData']);
