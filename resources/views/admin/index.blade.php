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
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                    <form action="" method="">
                        <div class="row">
                            <div class="col-md-4">
                                <input type="text" value="{{request('client_information')}}" name="client_information" placeholder="Search by customer information" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <input type="text" value="{{request('order_id')}}" id="order_id" name="order_id" placeholder="Search by Order id" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <select name="status" class="form-control">
                                    <option value="" >Select by status</option>
                                    <option {{(request('status')==\App\Order::STATUS_PENDING? 'selected':null)}} value="{{\App\Order::STATUS_PENDING}}" >{{\App\Order::STATUS_PENDING}}</option>
                                    <option {{(request('status')==\App\Order::STATUS_PROCESSING?'selected':null)}}value="{{\App\Order::STATUS_PROCESSING}}" >{{\App\Order::STATUS_PROCESSING}}</option>
                                    <option {{(request('status')==\App\Order::STATUS_SHIPPED?'selected':null)}} value="{{\App\Order::STATUS_SHIPPED}}" >{{\App\Order::STATUS_SHIPPED}}</option>
                                    <option {{(request('status')==\App\Order::STATUS_DELIVERED?'selected':null)}} value="{{\App\Order::STATUS_DELIVERED}}" >{{\App\Order::STATUS_DELIVERED}}</option>
                                    <option {{(request('status')==\App\Order::STATUS_CANCELED?'selected':null)}} value="{{\App\Order::STATUS_CANCELED}}" >{{\App\Order::STATUS_CANCELED}}</option>
                                </select>
                            </div>

                          <button type="submit" class="form-control col-md-2 btn btn-primary">Search</button>

                        </div>
                    </form>
            </div>
        </div>
    </div>

    <div class="content-header" >
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Order List</h3>

                            <div class="card-tools ">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <div class="input-group-append pl-5">
                                        <a class="btn btn-warning " href="{{route('admin.order.export','all')}}" style="">Export</a>
                                    </div>
                                    <div>
                                        <a class="btn btn-info " href="{{route('admin.order.export',\App\Order::STATUS_PENDING)}}" style="">Pending Order</a>
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
                                    <th>Order Id</th>
                                    <th>Customer Name</th>
                                    <th>Customer Address</th>
                                    <th>Phone No</th>
                                    <th>Order Status</th>
                                    <th>Total Amount</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($orders as $key=>$order )
                                    <tr>
                                        <td>{{$orders->firstItem() + $key}}</td>
                                        <td>{{$order->order_id}}</td>
                                        <td>{{$order->first_name.' '.$order->last_name}}</td>
                                        <td>{{$order->street_address.' '.$order->city.' '.$order->country.'-'.$order->post_code}}</td>
                                        <td>{{$order->phone}}</td>
                                        <td>{{$order->status}}</td>
                                        <td>{{number_format( $order->total_amount,2)}}</td>
                                        <td> <a class="btn btn-primary btn-xs" href="{{route('admin.order.show',$order->id)}}">Details</a> </td>
                                        <td>


                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    {{$orders->render()}}
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
