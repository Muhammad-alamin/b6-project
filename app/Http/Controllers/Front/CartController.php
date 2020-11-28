<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\View\View;
use MongoDB\Driver\Session;
use phpDocumentor\Reflection\DocBlock\Tags\See;
use RealRashid\SweetAlert\Facades\Alert;

class CartController extends Controller
{
    public function cart(){
        return  view('front.cart');
    }

    public function addToCart($productId){
        $product = Product::findOrFail($productId);

        $cart = session('cart');
        if (is_array($cart) && array_key_exists($productId, $cart)){

            $cart[$productId]['quantity'] += 1;
        }

        else{

            $cart [$productId]['quantity'] = 1;
            $cart [$productId]['name'] = $product->name ;
            $cart [$productId]['description'] = $product->description;
            $cart [$productId]['price'] = $product->price;
            $cart [$productId]['image'] = $product->image;

        }

        session()->put('cart',$cart);
        Alert::success('Success', 'Product is added into your cart');
        return redirect()->back();
    }

    public function removeFormCart($productId){
        $cart = session('cart');
        unset($cart[$productId]);
        session()->put('cart',$cart);
        return redirect()->back();
    }
}
