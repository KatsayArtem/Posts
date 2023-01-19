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

Route::get('/', [App\Http\controllers\PostController::class, 'index'])->name('/');

Route::get('create-new-post', [App\Http\controllers\PostController::class, 'create'])->name('create-new-post');

Route::get('edit/{id}', [App\Http\controllers\PostController::class, 'edit'])->name('edit');

Route::put('update/{id}', [App\Http\controllers\PostController::class, 'update'])->name('update');
Route::delete('delete/{id}', [App\Http\controllers\PostController::class, 'delete'])->name('delete');

Route::post('store-post', [App\Http\controllers\PostController::class, 'store'])->name('store-post');
