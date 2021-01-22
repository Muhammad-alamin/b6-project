<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['title'] = 'Category List';
        $data['categories'] = Category::orderBy('id','DESC')->paginate(5);
        return view('admin.category.index' ,$data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function create()
    {
        $data['title'] = 'Add New Category';
        return view('admin.category.create',$data);
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
           'name'   => 'required',

           'status' => 'required',

            'image'         =>  'mimes:jpeg,png'
        ]);

        $category = new Category();

        $category->name = $request->name;
        $category->description = $request->description;
        $category->status = $request->status;

        if ($request->has('is_featured'))
        {
            $category->is_featured = $request->is_featured;
        }

        if ($request->hasFile('image')){

            $path = 'images/category';
            $img = $request->file('image');
            $file_name = rand(0000,9999).'-'.$img->getFilename().'.'.$img->getClientOriginalExtension();
            $img->move($path,$file_name);
            $category->image = $path .'/'. $file_name;

        }


        $category->save();
        Alert::success('Success', 'Category Created successfully');
        return redirect()->route('category.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function edit($id)
    {
        $data['title'] = 'Edit Category';
        $data['category'] = Category::find($id);
        return view('admin.category.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'  => 'required',
            'status'  => 'required',
            'image'         =>  'mimes:jpeg,png'
        ]);

        $category = Category::find($id);
        $category->name = $request->name;
        $category->description = $request->description;
        $category->status = $request->status;

        if ($request->has('is_featured'))
        {

            $category->is_featured = $request->is_featured;


        }

        else

        {
            $category->is_featured = 0 ;
        }

        if ($request->hasFile('image')){

            $path = 'images/category';
            $img = $request->file('image');
            $file_name = rand(0000,9999).'-'.$img->getFilename().'.'.$img->getClientOriginalExtension();
            $img->move($path,$file_name);


            if ($category->image != null && file_exists($category->image)){
                unlink($category->image);
            }

            $category->image = $path .'/'. $file_name;



        }

        $category->save();
        Alert::success('Updated', 'Category has been successfully updated');
        return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)

    {
        $category =Category::find($id);

        if ($category->image != null && file_exists($category->image)){
            unlink($category->image);
        }
        Category::destroy($id);
        session()->flash('success', 'Category deleted Successfully');
        return redirect()->route('category.index');
    }
}
