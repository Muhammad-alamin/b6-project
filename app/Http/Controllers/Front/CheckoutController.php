<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Order;
use App\OrderDetail;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function checkout(){
        return view('front.checkout');
    }

    public function success(){
        return view('front.success');
    }

    public function store(Request $request){
        $request->validate([
           'first_name' => 'required',
           'last_name' => 'required',
            'country' => 'required',
            'street_address' => 'required',
            'city' => 'required',
            'postcode' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'payment_method' => 'required'

        ]);

        $order = new Order();
        $order->order_id = 'O-'.time();
        $order->first_name = $request->first_name;
        $order->last_name = $request->last_name;
        $order->country = $request->country;
        $order->street_address = $request->street_address;
        $order->city = $request->city;
        $order->postcode = $request->postcode;
        $order->phone = $request->phone;
        $order->email = $request->email;
        $order->payment_method = $request->payment_method;
        $order->total_amount = 0;
        $order->save();

        foreach (session('cart') as $product_id=>$cart){
            $order_deatail = new OrderDetail();
            $order_deatail->order_id = $order->id;
            $order_deatail->product_id = $product_id;
            $order_deatail->quantity = $cart['quantity'];
            $order_deatail->price = $cart['price'];
            $order_deatail->sub_total = $cart['price'] * $cart['quantity'];
            $order_deatail->save();
            $order->total_amount += $cart['price'] * $cart['quantity'];
        }
        $order->save();
        return redirect()->route('front.order.success');
    }
}