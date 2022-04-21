<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\AuthController;


Route::middleware('guest:admin')->group(function() {
	Route::get('/admin/login', [AuthController::class, 'loginForm'])->name('admin_login');
	Route::post('/admin/login_process', [AuthController::class, 'login_process'])->name('admin_login_process');
});

Route::middleware('auth:admin')->group(function() {
	Route::get('/admin/logout', [AuthController::class, 'logout'])->name('admin_logout');
	Route::get('/admin/orders/index', [OrderController::class, 'index'])->name('admin_index');
	Route::get('/admin/orders/{order}', [OrderController::class, 'show'])->name('admin_order_show');
});