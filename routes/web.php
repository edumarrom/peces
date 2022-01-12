<?php

use App\Http\Controllers\UrnasController;
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
    return view('home');
});

Route::get('/index', function () {
    return view('home');
});

/*
|--------------------------------------------------------------------------
| Urnas
|--------------------------------------------------------------------------
| Aquí están todas las rutas necesarias para controlar la tabla "urnas".
| El orden de las rutas es importante (Programación defensiva). Por el
| momento ordenaré las rutas por aparición en su acrónimo CRUD:
| (CREATE, READ, UPDATE, DELETE)
|
*/

/* Read */
Route::get('/urnas', [UrnasController::class, 'index']);
Route::get('/urnas/index', [UrnasController::class, 'index']);
