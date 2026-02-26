<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/posts', [PublicController::class, 'index'])->name('posts.index');
Route::get('/posts/create', [PublicController::class, 'create'])->name('posts.create');
Route::post('/posts', [PublicController::class, 'store'])->name('posts.store');
Route::get('/posts/{post}', [PublicController::class, 'show'])->name('posts.show');
Route::get('/posts/{post}/edit', [PublicController::class, 'edit'])->name('posts.edit');
Route::put('/posts/{post}', [PublicController::class, 'update'])->name('posts.update');
Route::delete('/posts/{post}', [PublicController::class, 'destroy'])->name('posts.destroy');
