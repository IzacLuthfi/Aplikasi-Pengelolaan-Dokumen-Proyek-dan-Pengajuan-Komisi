<?php

use App\Http\Controllers\AuthController;

Route::get('/', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// Contoh redirect halaman utama sesuai peran
Route::get('/dashboard', function () {
    $role = auth()->user()->role->name;
    return view("dashboard.$role");
})->middleware('auth');
