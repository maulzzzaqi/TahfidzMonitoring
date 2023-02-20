<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TahfidzController;
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

Route::get('/', [HomeController::class, 'index']);

Route::get('/tahfidz', [TahfidzController::class, 'index']);

Route::get('/tahfidz/create', [TahfidzController::class, 'create']);

Route::post('/tahfidz', [TahfidzController::class, 'store']);

Route::get('/tahfidz/{id}/edit', [TahfidzController::class, 'edit']);

Route::patch('/tahfidz/{id}', [TahfidzController::class, 'update']);