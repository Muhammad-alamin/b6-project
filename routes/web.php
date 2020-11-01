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
Route::get('cart','Front\CartController@cart' )->name('cart');
Route::get('remove-to-cart/{productId}','Front\CartController@removeFormCart' )->name('remove.to.cart');

Route::middleware('auth')->group(function (){

    Route::get('admin/dashboard',function (){
        return view('admin.dashboard');
    })->name('admin.dashboard');

    Route::resource('admin/category','Admin\CategoryController');
    Route::resource('admin/product','Admin\ProductController');
    Route::resource('admin/user','Admin\UserController');

});


Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');
