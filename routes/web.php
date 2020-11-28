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
Route::get('contact','Front\ContactController@contact' )->name('front.contact');
Route::post('contact/store','Front\ContactController@store' )->name('front.contact.store');
Route::get('product/{id}','Front\FrontController@product_details' )->name('front.product.details');
Route::get('shop','Front\FrontController@shop')->name('front.product.shop');
Route::get('add-to-cart/{productId}','Front\CartController@addToCart' )->name('add.to.cart');
Route::get('cart','Front\CartController@cart' )->name('front.cart');
Route::get('checkout','Front\CheckoutController@checkout' )->name('front.checkout');
Route::post('checkout','Front\CheckoutController@store' )->name('front.place.order');
Route::get('remove-to-cart/{productId}','Front\CartController@removeFormCart' )->name('remove.to.cart');
Route::get('order/{id}/payment','Front\PaymentController@index' )->name('front.order.index');
Route::get('order/{id}/pay-now','Front\PaymentController@pay_now' )->name('front.order.pay_now');
Route::post('payments/success','Front\PaymentController@success' )->name('front.order.payment.success');
Route::post('payments/fail','Front\PaymentController@fail' )->name('front.order.payment.fail');
Route::post('payments/cancel','Front\PaymentController@cancel' )->name('front.order.payment.cancel');



Route::middleware('auth')->group(function (){

    Route::get('admin/dashboard',function (){
        return view('admin.dashboard');
    })->name('admin.dashboard');

    Route::resource('admin/category','Admin\CategoryController');
    Route::resource('admin/product','Admin\ProductController');
    Route::resource('admin/user','Admin\UserController');
    Route::middleware('IsAdmin')->group(function (){
        Route::get('admin/contact/index','Admin\ContactController@index' )->name('admin.contact.index');
        Route::get('admin/orders','Admin\OrderController@index' )->name('admin.index');
        Route::get('admin/order/details/{id}','Admin\OrderController@show' )->name('admin.order.show');
        Route::put('admin/order/{id}/{status}','Admin\OrderController@change_status' )->name('admin.order.change.status');
        Route::get('admin/orders/export/{status}', 'Admin\OrderController@export')->name('admin.order.export');
    });
    Route::get('admin.unauthorized',function (){
        return 'unauthorized';
    })->name('admin.unauthorized');


});


Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');
