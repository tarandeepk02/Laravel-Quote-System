<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Fav Icon -->
<link rel="shortcut icon" href="{{ asset('web_assets/img/favicon.png') }}">
<meta name="description" content="{{ $setting->{'metadesc'.$lang} }}" />
<meta name="keywords" content="{{ $setting->{'metakey'.$lang} }}" />
<title>{{ config('app.name', 'Laravel Multi Auth Guard') }}</title>
<meta name="csrf-token" content="{{ csrf_token() }}">
<link href="{{ asset('admin_assets/extra-libs/c3/c3.min.css')}}" rel="stylesheet">
<link href="{{ asset('admin_assets/extra-libs/css-chart/css-chart.css')}}" rel="stylesheet">
<link href="{{ asset('admin_assets/extra-libs/jvector/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet" />
<link href="{{ asset('admin_assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css')}}" rel="stylesheet">
<link href="{{ asset('admin_assets/libs/morris.js/morris.css')}}" rel="stylesheet">
<link href="{{ asset('dist/css/style.min.css')}}" rel="stylesheet">
<link href="{{ asset('admin_assets/libs/chartist/dist/chartist.min.css')}}" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{ asset('admin_assets/libs/dropzone/dist/min/dropzone.min.css')}}">
<link href="{{ asset('admin_assets/libs/fullcalendar/dist/fullcalendar.min.css')}}" rel="stylesheet" />
<link href="{{ asset('admin_assets/extra-libs/calendar/calendar.css')}}" rel="stylesheet" />
<link href="{{ asset('admin_assets/libs/footable/css/footable.core.min.css')}}" rel="stylesheet">
<link href="{{ asset('admin_assets/libs/chartist/dist/chartist.min.css')}}" rel="stylesheet">
<link href="{{ asset('admin_assets/libs/datatables.net-bs4/css/buttons.dataTables.min.css')}}" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{ asset('admin_assets/libs/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('admin_assets/libs/select2/dist/css/select2.min.css') }}">
<link href="{{ asset('admin_assets/custom.css') }}" type="text/css" rel="stylesheet"/>
<script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
<div class="preloader" style="display:none">
  <div class="lds-ripple">
    <div class="lds-pos"></div>
    <div class="lds-pos"></div>
  </div>
</div>
<div id="main-wrapper">
<link href="{{ url('admin_assets/libs/datatables.net-bs4/css/buttons.dataTables.min.css')}}" rel="stylesheet">
<link href="http://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<header class="topbar">
  <nav class="navbar top-navbar navbar-expand-md navbar-dark">
    <div class="navbar-header"> <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"> <i class="ti-menu ti-close"></i> </a> <a class="navbar-brand" href="{{ url('admin/home') }}"> <img src="{{ url('storage/'.$setting->{'logo'}) }}" alt="homepage" class="light-logo" width="150" /> </a> <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <i class="ti-more"></i> </a> </div>
    <div class="navbar-collapse collapse" id="navbarSupportedContent">
      <ul class="navbar-nav float-left mr-auto">
      </ul>
      <ul class="navbar-nav float-right">
        <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:#fff;"> @if(isset(Auth::guard('admin')->user()->picture)) <img src="{{ url('storage/'.Auth::guard('admin')->user()->picture) }}" class="rounded-circle" width="31"> @else <img src="{{ url('admin_assets/images/users/1.jpg')}}" alt="user" class="rounded-circle" width="31"> @endif <i class="fas fa-list"></i> </a>
          <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY"> <span class="with-arrow"> <span class="bg-primary"></span> </span>
            <div class="d-flex no-block align-items-center p-15 bg-primary text-white m-b-10">
              <div class=""> @if(isset(Auth::guard('admin')->user()->picture)) <img src="{{ url('storage/'.Auth::guard('admin')->user()->picture) }}" class="img-circle" width="60"> @else <img src="{{ asset('admin_assets/images/users/1.jpg')}}" alt="user" class="img-circle" width="60"> @endif </div>
              <div class="m-l-10">
                <h4 class="m-b-0">{{ Auth::guard('admin')->user()->name }}</h4>
                <p class=" m-b-0">{{ Auth::guard('admin')->user()->email }}</p>
              </div>
            </div>
            <a class="dropdown-item" href="{{route('admin.profile')}}"> <i class="ti-user m-r-5 m-l-5"></i> My Profile</a>
            
            <a class="dropdown-item" href="{{route('admin.setting.index')}}"> <i class="ti-settings m-r-5 m-l-5"></i> Account Setting</a>
            
            <a class="dropdown-item" href="{{route('admin.password')}}"> <i class="ti-lock m-r-5 m-l-5"></i> Change Password</a>
            
            <a class="dropdown-item" href="{{ url('/admin/logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();"> <i class="fa fa-power-off m-r-5 m-l-5"></i> Logout </a>
            <form id="logout-form" action="{{ url('/admin/logout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}
            </form>
            <!--<div class="dropdown-divider"></div>
            <div class="p-l-30 p-10"> <a href="javascript:void(0)" class="btn btn-sm btn-success btn-rounded">View Profile</a> </div>-->
          </div>
        </li>
      </ul>
    </div>
  </nav>
</header>
