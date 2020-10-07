@extends('admin.layouts.master')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header" xmlns="http://www.w3.org/1999/html">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">{{$title}}</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">{{$title}}</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="col-md-10">
        <div class="card card-success">
            <div class="card-header">
                <h3 class="card-title">Fill the form</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{route('category.update', $category->id)}}"  method="post">
                @csrf
                @method('put')
                <div class="card-body">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" id="name" value="{{old('name', $category->name)}}" placeholder="Enter Category Name">
                        @error('name')<i class="text-danger">{{$message}}</i>@enderror
                    </div>

                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea type="text" name="description" class="form-control" id="description" placeholder="Enter Category Description">{{old('description',$category->description)}}</textarea>
                    </div>

                    <div class="form-group">
                        <label>Status</label>
                        <div class="form-check">
                            <input type="radio" @if(old('status',$category->status)  == 'Active') checked @endif name="status" class="form-check-input" value="active" id="active">
                            <label  for="active">Active</label>
                        </div>

                        <div class="form-check">
                            <input type="radio" @if(old('status',$category->status)  == 'Inactive') checked @endif name="status" class="form-check-input" value="inactive" id="inactive">
                            <label for="inactive">Inactive</label>
                        </div>
                        @error('status')<i class="text-danger">{{ $message }}</i>@enderror
                    </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </form>
        </div>
    </div>
    <!-- /.card -->
@endsection
