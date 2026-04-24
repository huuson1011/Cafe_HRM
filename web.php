<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ShiftController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

// Trang chủ
Route::get('/', function () {
    return view('home');
})->name('home');

// Đăng nhập / Đăng xuất
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Nhóm yêu cầu Đăng nhập (Dashboard & Quản lý)
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    
    Route::prefix('admin')->group(function () {
        Route::resource('employees', EmployeeController::class);
        
        // Thêm dòng này để kết nối với ShiftController
        Route::resource('shifts', ShiftController::class); 
    });
});