<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AboutController;

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/blog', [BlogController::class, 'blog'])->name('blog');
Route::get('/about', [AboutController::class, 'about'])->name('about');
