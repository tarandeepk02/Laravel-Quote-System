@extends('admin.includes.loginbase')
@section('content')
<!DOCTYPE html>
<html dir="ltr">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Quote Hub">
<meta name="author" content="Quote Hub">
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('web_assets/img/favicon.png')}}">
<title>Quote Hub</title>
<link href="{{ asset('dist/css/style.min.css')}}" rel="stylesheet">
</head>
<body>
<div class="main-wrapper">
  <div class="preloader">
    <div class="lds-ripple">
      <div class="lds-pos"></div>
      <div class="lds-pos"></div>
    </div>
  </div>
  <div class="auth-wrapper d-flex no-block justify-content-center align-items-center" style="background:url({{ asset('admin_assets/images/admin_bannerr.jpg')}}) repeat center center;background-color:#f7f7f7;">
    <div class="auth-box on-sidebar">
      <div id="loginform">
        <div class="logo"> <span class="db"><img src="{{ asset('web_assets/img/logo.png')}}" alt="logo" width="150" /></span> </div>
        <!-- Form -->
        <div class="row">
          <div class="col-12">
            <form class="form-horizontal m-t-20" id="loginform" action="{{ url('admin/login') }}" method="post">
              {{ csrf_field() }}
              <div class="input-group mb-3 {{ $errors->has('email') ? ' has-error' : '' }}">
                <div class="input-group-prepend"> <span class="input-group-text" id="basic-addon1"><i class="ti-user"></i></span> </div>
                <input id="email" type="email" class="form-control form-control-lg" name="email" value="{{ old('email') }}" autofocus>
              </div>
              @if ($errors->has('email'))
              <div class="clearfix mb-3"><small id="name" class="form-text text-danger">{{ $errors->first('email') }}</small></div>
              @endif
              <div class="input-group mb-3">
                <div class="input-group-prepend"> <span class="input-group-text" id="basic-addon1"><i class="ti-lock"></i></span> </div>
                <input id="password" type="password" class="form-control form-control-lg" name="password">
              </div>
              @if ($errors->has('password'))
              <div class="clearfix mb-3"><small id="name" class="form-text text-danger">{{ $errors->first('password') }}</small></div>
              @endif
              <div class="input-group mb-3">
                <div class="checkbox">
                  <label>
                  <input type="checkbox" name="remember">
                  Remember Me </label>
                </div>
              </div>
              <div class="form-group text-center">
                <div class="col-xs-12 p-b-20">
                  <button class="btn btn-block btn-lg btn-info" type="submit">Login</button>
                </div>
              </div>
              <div class="form-group m-b-0 m-t-10"> </div>
            </form>
          </div>
        </div>
      </div>      
    </div>
  </div>
</div>
</body>
</html>
@endsection
@section('scripts')
<script src="{{ asset('admin_assets/libs/jquery/dist/jquery.min.js')}}"></script>
<script src="{{ asset('admin_assets/libs/popper.js/dist/umd/popper.min.js')}}"></script>
<script src="{{ asset('admin_assets/libs/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script>
    $('[data-toggle="tooltip"]').tooltip();
    $(".preloader").fadeOut();
    $('#to-recover').on("click", function() {
        $("#loginform").slideUp();
        $("#recoverform").fadeIn();
    });
    </script>
@endsection