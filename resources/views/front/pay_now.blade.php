@extends('front.layouts.master')

@section('content')


    <div class="hero-wrap hero-bread" style="background-image: url({{asset('assets/front/images/bg_1.jpg')}});">
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span class="mr-2"><a href="index.html">Product</a></span> <span>Product Single</span></p>
                    <h1 class="mb-0 bread">Pay Now</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section ftco-cart">
        <div class="container">
            <h3 class="text-center">Order Details</h3>
            <div class="row">
                <div class="col-md-12  table-responsive">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>Order Id</th>
                            <td>{{$order->order_id}}</td>
                        </tr>
                        <tr>
                            <th>Customer Name</th>
                            <td>{{$order->first_name.' '.$order->last_name}}</td>
                        </tr>
                        <tr>
                            <th>Phone Number</th>
                            <td>{{$order->phone}}</td>
                        </tr>
                        <tr>
                            <th>Total Amount</th>
                            <td>${{number_format( $order->total_amount ,2)}}</td>
                        </tr>

                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <a class="btn btn-success btn-lg " href=" {{route('front.order.pay_now', $order->id)}}">Pay Now</a>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pt ftco-no-pb py-5 bg-light">
        <div class="container py-4">
            <div class="row d-flex justify-content-center py-5">
                <div class="col-md-6">
                    <h2 style="font-size: 22px;" class="mb-0">Subcribe to our Newsletter</h2>
                    <span>Get e-mail updates about our latest shops and special offers</span>
                </div>
                <div class="col-md-6 d-flex align-items-center">
                    <form action="#" class="subscribe-form">
                        <div class="form-group d-flex">
                            <input type="text" class="form-control" placeholder="Enter email address">
                            <input type="submit" value="Subscribe" class="submit px-3">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection
