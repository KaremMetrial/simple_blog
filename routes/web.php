<?php

use App\Http\Controllers\PostController;
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
    return view('welcome');
});

Route::get('/posts', [PostController::class, 'index'])->name('home');
Route::get('/posts/create', [PostController::class, 'create'])->name('post.create');
Route::post('posts', [PostController::class, 'store'])->name('post.store');
Route::get('/posts/{id}', [PostController::class, 'show'])->name('post.show');
Route::get('/posts/{id}/edit', [PostController::class, 'edit'])->name('post.edit');
Route::put('/posts/{id}', [PostController::class, 'update'])->name('post.update');
Route::delete('/posts/{id}', [PostController::class, 'destroy'])->name('post.destroy');
