<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\BasketController;

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

Route::get('/', [MainController::class, 'main']);
Route::get('/categories', [MainController::class, 'categories']);


Route::get('/basket', [BasketController::class, 'basket'])->name('basket');


Route::get('/{code}', [MainController::class, 'category']);
Route::get('/{category}/{product?}', [MainController::class, 'product'])->name('product');


Route::get('/basket/place', [BasketController::class, 'basketPlace'])->name('basket-place');

Route::post('/basket/add/{id}', [BasketController::class, 'basketAdd'])->name('basket-add');
Route::post('/basket/remove/{id}', [BasketController::class, 'basketRemove'])->name('basket-remove');