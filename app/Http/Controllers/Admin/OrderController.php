<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\OrderCanceled;
use App\Mail\OrderShipped;
use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
   public function index(Request $request){
       $data['title'] = 'Oder List';
       $order = new Order();
       $append =[];
       if ( $request->has('client_information') && $request->client_information != null){
           $order = $order->where(function ($query) use ($request){
           $query->where('first_name', 'like', '%' . $request->client_information . '%')
               ->orWhere('last_name', 'like', '%' . $request->client_information . '%')
               ->orWhere('phone', 'like', '%' . $request->client_information . '%')
               ->orWhere('email', 'like', '%' . $request->client_information . '%');
       });
           $append['client_information'] = $request->client_information;
       }
       if($request->has('order_id') && $request->order_id != null){
           $order = $order->where('order_id','like','%'.$request->order_id.'%');

           $append['order_id'] = $request->order_id;
       }

       if($request->has('status') && $request->status != null){
           $order = $order->where('status',$request->status);

           $append['status'] = $request->status;
       }
        $order = $order->orderBy('id','desc')->paginate(10);
       $data['orders'] = $order->appends($append);
       return view('admin.index',$data);
   }

   public function show ($id){
       $data['title'] = 'Order Details';
       $data['order'] = Order::with(['order_details' => function($product){
           return $product->with(['product' => function($category){
               return $category->with('category');
           }]);
       }])->findOrFail($id);
       return view('admin.show',$data);
   }
   public function change_status($order_id,$order_status){
       $order = Order::findOrFail($order_id);
       $order->status = $order_status;
       $order->save();
       if ($order_status == Order::STATUS_SHIPPED){
           Mail::to($order->email)->send(new OrderShipped($order));

       }
       if($order_status == Order::STATUS_CANCELED){
           Mail::to($order->email)->send(new OrderCanceled($order));
       }
       session()->flash('success','Order Status Changed Successfully');
       return redirect()->back();

   }
}
