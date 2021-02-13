<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Registration Page </title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('assets/admin/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{asset('assets/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('assets/admin/dist/css/adminlte.min.css')}}">
</head>
<body class="hold-transition register-page">
<div class="register-box">
    <div class="card card-outline card-primary">
        <div class="card-header text-center">
            <a href="{{'customer.create'}}" class="h1"><b></b>Register</a>
        </div>
        <div class="card-body">
            <p class="login-box-msg">Register a new Member</p>

            <form action="{{route('customers.store')}}" method="post">
                @csrf
                <div class="form-group mb-3">
                    <input type="text" name="name" id="name" value="" class="form-control" placeholder="Type your name">
                    @error('name')<i class="text-danger">{{$message}}</i>@enderror
                </div>
                <div class="form-group mb-3">
                    <input type="email" name="email" id="email" value="" class="form-control" placeholder="Type your email">
                    @error('email')<i class="text-danger">{{$message}}</i>@enderror
                </div>
                <div class="form-group mb-3">
                    <input type="number" name="phone" id="phone" value="" class="form-control" placeholder="Type your phone number">
                    @error('phone')<i class="text-danger">{{$message}}</i>@enderror
                </div>
                <div class="form-group mb-3">
                    <input type="password" name="password" id="password" value="" class="form-control" placeholder="Type your password">
                    @error('password')<i class="text-danger">{{$message}}</i>@enderror
                </div>
                <div class="row">
                    <div class="col-8">
                        <div class="icheck-primary">
                            <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                            <label for="agreeTerms">
                                I agree to the <a href="#">terms</a>
                            </label>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block">Register</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>
            <a href="{{route('login')}}" class="text-center">I already have a membership</a>
        </div>
        <!-- /.form-box -->
    </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="{{asset('assets/admin/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('assets/admin/dist/js/adminlte.min.js')}}"></script>
</body>
</html>
