<?php

use App\Http\Controllers\Admin\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', [PostController::class, 'index'])->name('posts.index');

Route::get('category/{category}', [PostController::class, 'category'])->name('posts.category');

Route::get('posts/{post}', [PostController::class, 'show'])->name('posts.show');

Route::get('tag/{tag}', [PostController::class, 'tag'])->name('posts.tag');

Route::get('admin', [HomeController::class,'index']);
