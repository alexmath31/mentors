<?php

use Illuminate\Support\Facades\Route;


Route::get('/', [\App\Http\Controllers\WeclomContr::class, 'welcome'])->name('welcome');

Route::get('/posts', [\App\Http\Controllers\PostsController::class, 'index'])->name('posts.index');
Route::get('/posts/{id}', [\App\Http\Controllers\PostsController::class, 'show'])->name('posts.show');

Route::get('/categories', [\App\Http\Controllers\CategoryController::class, 'index'])->name('categories.index');
Route::get('/categories/{id}', [\App\Http\Controllers\CategoryController::class, 'show'])->name('categories.show');

Route::get('/users', [\App\Http\Controllers\UsersController::class, 'index'])->name('users.index');
Route::get('/users/{id}', [\App\Http\Controllers\UsersController::class, 'show'])->name('users.show');
