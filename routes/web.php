<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\AuthController;

// Halaman Utama / Dashboard
Route::get('/', [AuthController::class, 'showDashboard'])->name('dashboard');

// Register Routes
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register')->middleware('guest');
Route::post('/register', [AuthController::class, 'register']);

// Login Routes
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'login']);

// Logout Route
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Protected Routes
Route::get('/profile', [AuthController::class, 'showProfile'])->name('profile')->middleware('auth');
Route::get('/products', [AuthController::class, 'showProducts'])->name('products')->middleware('auth');
