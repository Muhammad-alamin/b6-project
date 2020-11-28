
@include('front.layouts._head')


<body class="goto-here">


 @include('front.layouts._topNav')

 @include('front.layouts._mainNav')


    @yield('content')

 @include('front.layouts._footer')

<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

    @include('sweetalert::alert')

    @include('front.layouts._js')

</body>
</html>
