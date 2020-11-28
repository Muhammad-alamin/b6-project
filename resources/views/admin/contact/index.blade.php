@extends('admin.layouts.master')
@section('content')

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

    <div class="content-header" >
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{session()->get('success')}}
                        </div>
                    @endif
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Contact List</h3>

                            <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Subject</th>
                                    <th>Description</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($contacts as $key=>$contact )
                                    <tr>
                                        <td>{{++$key}}</td>
                                        <td>{{$contact->name}}</td>
                                        <td>{{$contact->subject}}</td>
                                        <td><textarea class="form-control">{{$contact->description}}</textarea></td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

@endsection
