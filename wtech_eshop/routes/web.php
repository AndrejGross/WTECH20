<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
Route::get('/', function () {
    return view('home_page');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/shop/pc', [App\Http\Controllers\ShopPcController::class, 'index'])->name('shop-pc');
Route::get('/shop/pc/gaming', [App\Http\Controllers\ShopPcController::class, 'index'])->name('shop-pc-gaming');
Route::get('/shop/pc/office', [App\Http\Controllers\ShopPcController::class, 'index'])->name('shop-pc-office');
Route::get('/cart/index', [App\Http\Controllers\CartController::class, 'index'])->name('cart-index');
Route::get('/shop/{product}', [App\Http\Controllers\ShopController::class, 'show_product_detail'])->name('product-detail');
Route::get('/cart/added/{product}', [App\Http\Controllers\CartController::class, 'add_and_show'])->name('cart-addshow');
Route::get('/cart/{product}', [App\Http\Controllers\CartController::class, 'add_to_cart'])->name('cart-add');
Route::delete('/cart/{id}', [App\Http\Controllers\CartController::class, 'delete_product'])->name('cart-delete');
Route::get('/cart/2', [App\Http\Controllers\CartController::class, 'index_2'])->name('cart-2');
Route::get('/cart/3', [App\Http\Controllers\CartController::class, 'index_3'])->name('cart-3');
Route::get('/search', [App\Http\Controllers\CartController::class, 'delete_session_data'])->name('search');

Route::auth();
