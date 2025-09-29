<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;

Route::get('/', fn() => view('home'))->name('home');

Route::get('/login', [LoginController::class, 'showLogin'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [LoginController::class, 'showRegister'])->name('register');
Route::post('/register', [LoginController::class, 'register']);


Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', fn() => view('dashboards.admin'))->name('admin.dashboard');
});

Route::middleware(['auth', 'role:seller'])->group(function () {
    Route::get('/seller/dashboard', fn() => view('dashboards.seller'))->name('seller.dashboard');
});

Route::middleware(['auth', 'role:buyer'])->group(function () {
    Route::get('/buyer/dashboard', fn() => view('dashboards.buyer'))->name('buyer.dashboard');
});
