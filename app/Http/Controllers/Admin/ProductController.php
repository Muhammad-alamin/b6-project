<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['title'] = 'List of Product';
        $data ['products'] = Product::orderBy('id','DESC')->paginate(2);
        return view('admin.product.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['title'] = 'Add New Product';
        $data['categories'] = Category::all();
        return view('admin.product.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'category_id'   => 'required',
            'name'          => 'required',
            'price'         => 'required',
            'stock'        =>   'required',
            'status'        => 'required',
            'image'         =>  'mimes:jpeg,png'
        ]);

        $product = new Product();

        $product->category_id = $request->category_id;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->color = $request->color;
        $product->size = $request->size;
        $product->price = $request->price;
        $product->status = $request->status;
        $product->stock = $request->stock;

        if ($request->has('is_featured')) {
            $product->is_featured = $request->is_featured;
        }



        if ($request->hasFile('image')){

            $path = 'images/product';
            $img = $request->file('image');
            $file_name = rand(0000,9999).'-'.$img->getFilename().'.'.$img->getClientOriginalExtension();
            $img->move($path,$file_name);

            if ($product->image != null && file_exists($product->image)){
                unlink($product->image);
            }

            $product->image = $path .'/'. $file_name;

        }
        $product->save();

        session()->flash('success','Product Created Successfully');
        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $data['title'] = 'Edit Product';
        $data['categories'] = Category::all();
        $data['product']= $product;
        return view('admin.product.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'category_id'   => 'required',
            'name'          => 'required',
            'price'         => 'required',
            'stock'        =>   'required',
            'image'         =>  'mimes:jpeg,png'

        ]);

        $product->category_id = $request->category_id;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->color = $request->color;
        $product->size = $request->size;
        $product->price = $request->price;
        $product->status = $request->status;
        $product->stock = $request->stock;

        if ($request->has('is_featured'))
        {

            $product->is_featured = $request->is_featured;


        }

        else

        {
            $product->is_featured = 0 ;
        }

        if ($request->hasFile('image')){

            $path = 'images/product';
            $img = $request->file('image');
            $file_name = rand(0000,9999).'-'.$img->getFilename().'.'.$img->getClientOriginalExtension();
            $img->move($path,$file_name);


            if ($product->image != null && file_exists($product->image)){
                unlink($product->image);
            }

            $product->image = $path .'/'. $file_name;



        }

        $product->save();
        session()->flash('success','Product Updated Successfully');
        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        if ($product->image != null && file_exists($product->image)){
            unlink($product->image);
        }
        $product->delete();
        session()->flash('success','Product Deleted Successfully');
        return redirect()->route('product.index');
    }
}
