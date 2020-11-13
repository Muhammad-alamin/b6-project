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
                        <div class="alert alert-success">Order Status Changed Successfully</div>
                    @endif
                    <div class="card">
                        <div class="card-body table-responsive p-15">
                            <div class="row">
                                <div class="col-4">
                                    <table>
                                        <tr>
                                            <th>Order Id : </th>
                                            <td>{{$order->order_id}}</td>
                                        </tr>
                                        <tr>
                                            <th>Total amount : </th>
                                            <td>{{ number_format($order->total_amount,2) }}</td>
                                        </tr>
                                        <tr>
                                            <th>Status : </th>
                                            <td>{{$order->status}}</td>
                                        </tr>
                                    </table>
                                </div>

                                <div class="col-8">
                                    <table>
                                        <tr>
                                            <th>Client Name : </th>
                                            <td>{{$order->first_name.' '.$order->last_name}}</td>
                                        </tr>
                                        <tr>
                                            <th>Client address : </th>
                                            <td>{{$order->street_address.' '.$order->city.' '.$order->country.'-'.$order->postcode}}</td>
                                        </tr>
                                        <tr>
                                            <th>Client email : </th>
                                            <td>{{$order->email}}</td>
                                        </tr>
                                        <tr>
                                            <th>Client phone no : </th>
                                            <td>{{$order->phone}}</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 form-inline ">
                                    <form action="{{route('admin.order.change.status',[$order->id, \App\Order::STATUS_PROCESSING])}}" method="post">
                                        @csrf
                                        @method('put')
                                        <button type="submit" class="btn btn-warning" onclick="return confirm('Are you confirm to Processing this order')" >Processing</button>
                                    </form>
                                    <form action="{{route('admin.order.change.status',[$order->id, \App\Order::STATUS_SHIPPED])}}"method="post">
                                        @csrf
                                        @method('put')
                                        <button type="submit" class="btn btn-info" onclick="return confirm('Are you confirm to Shipped this order')" >Shipped</button>
                                    </form>
                                    <form action="{{route('admin.order.change.status',[$order->id,\App\Order::STATUS_DELIVERED])}}"method="post">
                                        @csrf
                                        @method('put')
                                        <button type="submit" class="btn btn-success" onclick="return confirm('Are you confirm to Delivered this order')" >Delivered</button>
                                    </form>
                                    <form action="{{route('admin.order.change.status',[$order->id, \App\Order::STATUS_CANCELED])}}"method="post">
                                        @csrf
                                        @method('put')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you confirm to Canceled this order')" >Canceled</button>
                                    </form>
                                </div>
                            </div>

                        </div>


                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


    <div class="content-header" >
        <div class="container-fluid">
            <div class="row">
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Product name</th>
                            <th>Product category</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Sub total</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($order->order_details as $key=>$order_deatail)
                            <tr>
                                <td>{{++ $key}}</td>
                                <td>{{$order_deatail->product->name}}</td>
                                <td>{{$order_deatail->product->category->name}}</td>
                                <td>{{ number_format( $order_deatail->product->price,2)}}</td>
                                <td>{{$order_deatail->quantity}}</td>
                                <td>{{ number_format( $order_deatail->sub_total,2)}}</td>


                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>

            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>


@endsection
