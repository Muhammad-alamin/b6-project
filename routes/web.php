<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/','Front\FrontController@home' )->name('front.home');
Route::get('product/{id}','Front\FrontController@product_details' )->name('front.product.details');
Route::get('add-to-cart/{productId}','Front\CartController@addToCart' )->name('add.to.cart');
Route::get('cart','Front\CartController@cart' )->name('front.cart');
Route::get('checkout','Front\CheckoutController@checkout' )->name('front.checkout');
Route::post('checkout','Front\CheckoutController@store' )->name('front.place.order');
Route::get('order/success','Front\CheckoutController@success' )->name('front.order.success');
Route::get('remove-to-cart/{productId}','Front\CartController@removeFormCart' )->name('remove.to.cart');


Route::middleware('auth')->group(function (){

    Route::get('admin/dashboard',function (){
        return view('admin.dashboard');
    })->name('admin.dashboard');

    Route::resource('admin/category','Admin\CategoryController');
    Route::resource('admin/product','Admin\ProductController');
    Route::resource('admin/user','Admin\UserController');
    Route::get('admin/orders','Admin\OrderController@index' )->name('admin.index');
    Route::get('admin/order/details/{id}','Admin\OrderController@show' )->name('admin.order.show');
    Route::put('admin/order/{id}/{status}','Admin\OrderController@change_status' )->name('admin.order.change.status');

});


Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');
