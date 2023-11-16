<?php

use Illuminate\Support\Facades\Route;


Route::get('/', [\App\Http\Controllers\WeclomContr::class, 'welcome']);
Route::get('/posts', [\App\Http\Controllers\PostsController::class, 'index'])->name('posts.index');
