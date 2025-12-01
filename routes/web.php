<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

// Public pages
Route::get('/', fn() => view('index'));
Route::get('/aboutus', fn() => view('aboutus'));
Route::get('/contact', fn() => view('contact'));

// Auth routes
// Login + Register
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');

Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.submit');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


// Admin-only routes
Route::middleware('admin')->group(function () {
    Route::resource('posts', PostController::class);
     Route::resource('users', UserController::class);
     Route::resource('categories', CategoryController::class);
});

