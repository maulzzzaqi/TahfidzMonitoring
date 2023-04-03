<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TahfidzController;
use App\Http\Requests\TahfidzRequest;
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

Route::get('/tahfidz/create', [TahfidzController::class, 'create'])->middleware('is_admin');

Route::post('/tahfidz', [TahfidzController::class, 'store'])->middleware('is_admin');

Route::get('/tahfidz/{id}/edit', [TahfidzController::class, 'edit'])->middleware('is_admin');

Route::patch('/tahfidz/{id}', [TahfidzController::class, 'update'])->middleware('is_admin');

Route::delete('/tahfidz/{id}', [TahfidzController::class, 'delete'])->middleware('is_admin');