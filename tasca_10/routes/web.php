<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\LlistaController;
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
Route::get('/', HomeController::class);
Route::get('login', [LoginController::class, 'login']);
Route::get('logout', [LogoutController::class, 'logout']);
Route::get('catalog',[LlistaController::class, 'index']);
Route::get('catalog/show/{id}',[LlistaController::class, 'show']);
Route::get('catalog/edit/{id}',[LlistaController::class, 'edit']);
Route::get('catalog/create',[LlistaController::class, 'create']);