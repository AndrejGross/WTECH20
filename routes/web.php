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
Route::resource('users', 'UserController');

Route::get('/', 'HomePageController@index')->name('home_page');

Route::get('/', function () {
    return view('home_page');
});

Route::auth();

/*
Route::get('/cart', 'CartController@index')->name('cart.index');
Route::post('/cart/{product}', 'CartController@store')->name('cart.store');
Route::patch('/cart/{product}', 'CartController@update')->name('cart.update');
Route::delete('/cart/{product}', 'CartController@destroy')->name('cart.destroy');
*/

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::middleware('auth')->group(function () {
    //Route::get('/my-profile', 'UsersController@edit')->name('users.edit');
    //Route::patch('/my-profile', 'UsersController@update')->name('users.update');

    //Route::get('/my-orders', 'OrdersController@index')->name('orders.index');
    //Route::get('/my-orders/{order}', 'OrdersController@show')->name('orders.show');
});
