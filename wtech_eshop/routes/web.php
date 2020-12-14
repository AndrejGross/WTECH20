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

Route::post('/search', [App\Http\Controllers\ShopController::class, 'get_searched_products']);
//Route::get('/search', [App\Http\Controllers\CartController::class, 'delete_session_data'])->name('search');

Route::get('/shop/{product}', [App\Http\Controllers\ShopController::class, 'show_product_detail'])->name('product-detail');

Route::get('/shop/category/{category}', [App\Http\Controllers\ShopController::class, 'index'])->name('shop');

Route::get('/orders', [App\Http\Controllers\ShopController::class, 'orders'])->name('orders');

Route::get('/shop/pc_gaming/{category}', [App\Http\Controllers\ShopPcController::class, 'get_gaming_pc'])->name('shop-pc-gaming');
Route::get('/shop/pc_office/{category}', [App\Http\Controllers\ShopPcController::class, 'get_office_pc'])->name('shop-pc-office');

Route::get('/shop/ntb_gaming/{category}', [App\Http\Controllers\ShopNtbController::class, 'get_gaming_ntb'])->name('shop-ntb-gaming');
Route::get('/shop/ntb_office/{category}', [App\Http\Controllers\ShopNtbController::class, 'get_office_ntb'])->name('shop-ntb-office');

Route::get('/shop/accessories_gaming/{category}', [App\Http\Controllers\ShopAccessController::class, 'get_gaming_access'])->name('shop-access-gaming');
Route::get('/shop/accessories_office/{category}', [App\Http\Controllers\ShopAccessController::class, 'get_office_access'])->name('shop-access-office');


Route::get('/cart/index', [App\Http\Controllers\CartController::class, 'index'])->name('cart-index');

Route::get('/cart/{product}', [App\Http\Controllers\CartController::class, 'add_to_cart'])->name('cart-add');
Route::get('/cart/added/{product}', [App\Http\Controllers\CartController::class, 'add_and_show'])->name('cart-addshow');
Route::delete('/cart/{id}', [App\Http\Controllers\CartController::class, 'delete_product'])->name('cart-delete');
Route::get('/updatePlus/{id}', [App\Http\Controllers\CartController::class, 'updatePlus'])->name('updateP');
Route::get('/updateMinus/{id}', [App\Http\Controllers\CartController::class, 'updateMinus'])->name('updateM');

Route::get('/cart_two', [App\Http\Controllers\CartController::class, 'cart_to_stage_two'])->middleware('auth')->name('cart_2');
Route::get('/cart_two/shipment_payment', [App\Http\Controllers\CartController::class, 'get_cart_faze_3'])->name('cart-faze-2');
Route::get('/cart_three/checkout', [App\Http\Controllers\OrderController::class, 'addToOrdersTables'])->name('order_checkout');



Route::auth();
