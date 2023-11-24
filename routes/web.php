<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Public routes
Route::get('/', [\App\Http\Controllers\WeclomContr::class, 'welcome'])->name('welcome');

Route::resource('posts', \App\Http\Controllers\PostsController::class);

Route::get('users', [\App\Http\Controllers\UsersController::class, 'index'])->name('users.index');
Route::get('users/{id}', [\App\Http\Controllers\UsersController::class, 'show'])->name('users.show');

Route::get('categories', [\App\Http\Controllers\CategoryController::class, 'index'])->name('categories.index');
Route::get('categories/{id}', [\App\Http\Controllers\CategoryController::class, 'show'])->name('categories.show');

require __DIR__.'/auth.php';

// Authenticated User only
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Admin only
Route::name('admin.')->middleware(['auth', 'is.admin'])->group( function() {
    Route::resource('/admin/categories', \App\Http\Controllers\AdminCategoryController::class);
});
