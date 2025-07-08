<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\PM\PMDashboardController;
use App\Http\Controllers\HOD\HODDashboardController;
use App\Http\Controllers\Staff\StaffDashboardController;

// Halaman landing
Route::get('/', function () {
    return view('welcome');
});

// Autentikasi login/logout menggunakan LoginController
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Grup route untuk Admin
Route::middleware(['auth', 'role:Admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');
    // Tambahkan route lain khusus admin di sini
});

// Grup route untuk PM
Route::middleware(['auth', 'role:PM'])->prefix('pm')->name('pm.')->group(function () {
    Route::get('/dashboard', [PMDashboardController::class, 'index'])->name('dashboard');
    // Tambahkan route lain khusus PM di sini
});

// Grup route untuk HOD
Route::middleware(['auth', 'role:HOD'])->prefix('hod')->name('hod.')->group(function () {
    Route::get('/dashboard', [HODDashboardController::class, 'index'])->name('dashboard');
    // Tambahkan route lain khusus HOD di sini
});

// Grup route untuk Staff
Route::middleware(['auth', 'role:Staff'])->prefix('staff')->name('staff.')->group(function () {
    Route::get('/dashboard', [StaffDashboardController::class, 'index'])->name('dashboard');
    // Tambahkan route lain khusus Staff di sini
});
