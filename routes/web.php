<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\BasketController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::resource('/admin/categories', CategoryController::class);
Route::resource('/admin/products', ProductController::class);

Route::get('/auth/login', [AuthController::class, 'loginForm'])->name('login');
Route::get('/auth/register', [AuthController::class, 'registerForm'])->name('register');

Route::post('/auth/login_process', [AuthController::class, 'login_process'])->name('login_process');
Route::post('/auth/register_process', [AuthController::class, 'register_process'])->name('register_process');

Route::get('/auth/logout', [AuthController::class, 'logout'])->name('logout');


Route::get('/', [MainController::class, 'main'])->name('main');
Route::get('/categories', [MainController::class, 'categories']);


Route::group(['prefix' => 'basket'], function() {
		Route::post('/add/{id}', [BasketController::class, 'basketAdd'])->name('basket-add');
	Route::group(['middleware' => 'basket_is_not_empty'], function() {
		Route::get('/', [BasketController::class, 'basket'])->name('basket');
		Route::post('/place', [BasketController::class, 'basketConfirm'])->name('basket-confirm');
		Route::get('/place', [BasketController::class, 'basketPlace'])->name('basket-place');
		Route::post('/remove/{id}', [BasketController::class, 'basketRemove'])->name('basket-remove');
	});
});



Route::get('/{code}', [MainController::class, 'category']);
Route::get('/{category}/{product?}', [MainController::class, 'product'])->name('product');