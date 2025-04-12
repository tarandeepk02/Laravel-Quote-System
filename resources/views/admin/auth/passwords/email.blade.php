@extends('admin.includes.loginbase')
@section('content')
<!DOCTYPE html>
<html dir="ltr">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon.png')}}">
<title>Jobnefit</title>
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
  <div class="auth-wrapper d-flex no-block justify-content-center align-items-center" style="background:url({{ asset('admin_assets/images/admin_banner.jpg')}}) no-repeat center center;">
    <div class="auth-box on-sidebar">
      <div id="loginform">
        <div class="logo"> <span class="db"><img src="{{ url('storage/images/logo/logo1_transparent.png')}}" alt="logo" width="200" /></span>
        </div>
        <!-- Form -->
        <div class="row">
          <div class="col-12">
		  @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
            <form class="form-horizontal m-t-20" id="loginform" action="{{ url('/admin/password/email') }}" method="post">
			{{ csrf_field() }}
              
			 
			  
			  
			  <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-12 control-label">E-Mail Address</label>

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
			  
			  <div class="form-group">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary">
                                    Send Password Reset Link
                                </button>
                            </div>
                        </div>
			  
			  
			  
              
              
              <div class="form-group m-b-0 m-t-10">
                <div class="col-sm-12 text-center">Click here to <a href="{{ url('admin/login') }}" class="text-info m-l-5"><b>Log in</b></a> </div>
              </div>
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
