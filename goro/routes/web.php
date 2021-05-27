<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CatalogoController;
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

Route::get('/', HomeController::class);

Route::get('catalogo', [CatalogoController::class, 'index']);

Route::get('catalogo/venta', [CatalogoController::class, 'create']);

Route::get('catalogo/{linea}', [CatalogoController::class, 'show']);
