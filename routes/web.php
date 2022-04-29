<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\PublicController;

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

Route::get('/', [PublicController::class, 'index'])->name('welcome');

/* CRUD IMAGES */
Route::get('/images/create', [ImageController::class, 'create'])->name('image.create');
Route::post('/images/store', [ImageController::class, 'store'])->name('image.store');
Route::get('/images/index', [ImageController::class, 'index'])->name('image.index');
Route::get('images/{id}', [ImageController::class,'show'])->name('image.show');
Route::get('images/{id}/edit', [ImageController::class,'edit'])->name('image.edit');
Route::put('images/{id}', [ImageController::class,'update'])->name('image.update');
Route::delete('images/{id}', [ImageController::class,'destroy'])->name('image.destroy');

