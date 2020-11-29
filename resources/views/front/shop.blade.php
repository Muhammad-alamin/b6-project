@extends('front.layouts.master')

@section('content')

    <div class="hero-wrap hero-bread" style="background-image: url({{asset('assets/front/images/bg_1.jpg')}});">
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Contact us</span></p>
                    <h1 class="mb-0 bread">Products</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 mb-5 text-center">
                    <ul class="product-category">
                        <li><a href="{{route('front.product.shop')}}" class="active">All</a></li>
                        <li><a href="{{route('front.product.shop')}}">Vegetables</a></li>
                        <li><a href="{{route('front.product.shop')}}">Fruits</a></li>
                        <li><a href="{{route('front.product.shop')}}">Juice</a></li>
                        <li><a href="{{route('front.product.shop')}}">Dried</a></li>
                    </ul>
                </div>
            </div>
        <div class="container">
            <div class="row">
                @foreach($products as $key=>$product)
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="product">
                        <a href="#" class="img-prod"><img class="img-fluid" src="{{asset($product->image?$product->image:asset('assets/front/images/No-image-available.png'))}}">
                            <span class="status">30%</span>
                            <div class="overlay"></div>
                        </a>
                        <div class="text py-3 pb-4 px-3 text-center">
                            <h3><a href="#">{{$product->name}}</a></h3>
                            <div class="d-flex">
                                <div class="pricing">
                                    <p class="price"><span class="mr-2 price-dc">$120.00</span><span class="price-sale">{{number_format($product->price)}}</span></p>
                                </div>
                            </div>
                            <div class="bottom-area d-flex px-3">
                                <div class="m-auto d-flex">
                                    <a href="{{route('front.product.details',$product->id)}}" class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                        <span><i class="ion-ios-menu"></i></span>
                                    </a>
                                    <a href="{{route('add.to.cart',$product->id)}}" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                        <span><i class="ion-ios-cart"></i></span>
                                    </a>
                                    <a href="#" class="heart d-flex justify-content-center align-items-center ">
                                        <span><i class="ion-ios-heart"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            {{ $products->links('vendor.pagination.custom') }}
        </div>
    </section>

@endsection

</body>
</html>
