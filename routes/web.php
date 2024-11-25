<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/login', [App\Http\Controllers\Auth\AuthController::class, 'login'])->name('login');
Route::get('/register', [App\Http\Controllers\Auth\AuthController::class, 'register'])->name('register');
Route::get('/logout', [App\Http\Controllers\Auth\AuthController::class, 'logout'])->name('logout');
