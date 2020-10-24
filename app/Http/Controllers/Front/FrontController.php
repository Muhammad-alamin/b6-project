<?php

namespace App\Http\Controllers\Front;

use App\Category;
use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home(){
        $data['featured_product'] = Product::where('is_featured',1)->limit(8)->get();
        $data['featured_category'] = Category::where('is_featured',1)->limit(4)->get();
        return view('front.home',$data);
    }

    public function product_details($id){
        $data['product'] = Product::with('category')->findOrFail($id);
        $data['related_products'] = Product::where('category_id','=', $data['product']->category->id)->where('id', '!=', $data['product']->id)->orderBy('id','DESC')->limit(4)->get();
        return view('front.product-details', $data);
    }
}
