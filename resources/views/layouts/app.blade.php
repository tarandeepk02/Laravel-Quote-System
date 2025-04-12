@php
$logo = url('storage/'.$setting->{'logo'});
$method = Route::currentRouteName();
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
<!-- Basic -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>{{ $setting->{'stitle'} }} - @yield('title')</title>
<meta name="description" content="{{ $setting->{'metadesc'} }}" />
<meta name="keywords" content="{{ $setting->{'metakey'} }}" />
<!-- Favicon -->
<link rel="shortcut icon" href="{{ asset('web_assets/img/favicon.png') }}" type="image/x-icon" />
<link rel="apple-touch-icon" href="{{ asset('web_assets/img/favicon.png') }}">
<!-- Mobile Metas -->
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
<!-- Web Fonts  -->
<link id="googleFonts" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800&display=swap" rel="stylesheet" type="text/css">
<meta name="csrf-token" content="{{ csrf_token() }}" />
<!-- Vendor CSS -->
<link rel="stylesheet" href="{{ asset('web_assets/vendor/bootstrap/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('web_assets/vendor/fontawesome-free/css/all.min.css') }}">
<link rel="stylesheet" href="{{ asset('web_assets/vendor/animate/animate.compat.css') }}">
<link rel="stylesheet" href="{{ asset('web_assets/vendor/simple-line-icons/css/simple-line-icons.min.css') }}">
<link rel="stylesheet" href="{{ asset('web_assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('web_assets/vendor/owl.carousel/assets/owl.theme.default.min.css') }}">
<link rel="stylesheet" href="{{ asset('web_assets/vendor/magnific-popup/magnific-popup.min.css') }}">
<link rel="stylesheet" href="{{ asset('web_assets/vendor/bootstrap-star-rating/css/star-rating.min.css') }}">
<link rel="stylesheet" href="{{ asset('web_assets/vendor/bootstrap-star-rating/themes/krajee-fas/theme.min.css') }}">
<link rel="stylesheet" href="{{ asset('web_assets/css/theme.css') }}">
<link rel="stylesheet" href="{{ asset('web_assets/css/theme-elements.css') }}">
<link rel="stylesheet" href="{{ asset('web_assets/css/theme-blog.css') }}">
<link rel="stylesheet" href="{{ asset('web_assets/css/theme-shop.css') }}">
<link rel="stylesheet" href="{{ asset('web_assets/css/demos/demo-auto-services.css') }}">
<link id="skinCSS" rel="stylesheet" href="{{ asset('web_assets/css/skins/skin-auto-services.css') }}">
<link rel="stylesheet" href="{{ asset('web_assets/css/custom.css') }}">
<script src="{{ asset('web_assets/vendor/modernizr/modernizr.min.js') }}"></script>
<link href='https://fonts.googleapis.com/css?family=Open Sans' rel='stylesheet'>
<link href="https://fonts.cdnfonts.com/css/circe-rounded" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Signika" />
@stack('styles')
</head>
<body>
<div class="body">
  <div class="notice-top-bar bg-primary" data-sticky-start-at="100">
    <div class="container">
      <div class="row justify-content-center py-2">
        <div class="col-9 col-md-12 text-center">
          <p class="text-color-light mb-0"><strong class="text-light">UNBEATABLE WHOLESALE PRICE</strong> - 24/48 HOUR TURNAROUND TIME <strong><a href="{{ url('contact-us') }}" class="text-color-light text-decoration-none custom-text-underline-1">Contact Us Now</a></strong></p>
        </div>
      </div>
    </div>
  </div>
  <header id="header" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyStartAt': 54, 'stickySetTop': '0px', 'stickyChangeLogo': false}">
    <div class="header-body header-body-bottom-border-fixed box-shadow-none border-top-0">
      <div class="header-container container">
        <div class="header-row">
          <div class="header-column w-100">
            <div class="header-row justify-content-between">
              <div class="header-logo z-index-2 col-lg-5 px-0"> <a href="{{ url('/') }}"> <img alt="SignsCo" width="250" data-sticky-width="82" data-sticky-height="40" data-sticky-top="84" src="{{ asset('web_assets/img/logo.png') }}" style="float:left;" class="logo-icon"> </a> </div>
              <div class="header-nav header-nav-links justify-content-end">
                <div class="header-nav-main header-nav-main-arrows header-nav-main-dropdown-no-borders header-nav-main-effect-3 header-nav-main-sub-effect-1">
                  <nav class="collapse">
                    <ul class="nav nav-pills" id="mainNav">
                      <li><a href="{{ url('/') }}" class="nav-link @if($method=='home') active current-page-active @endif">Home</a></li>
                      <li><a href="{{ url('about-us') }}" class="nav-link @if($method=='about-us') active current-page-active @endif">About Us</a></li>
                      <li><a href="{{ url('coroplast-signs') }}" class="nav-link @if($method=='coroplast-signs') active current-page-active @endif">Coroplast Signs</a></li>
                      <li><a href="{{ url('banners') }}" class="nav-link @if($method=='banners') active current-page-active @endif">Banners</a></li>
                      <li><a href="{{ url('contact-us') }}" class="nav-link @if($method=='contact-us') active current-page-active @endif">Contact Us</a></li>                     
                    </ul>
                  </nav>
                </div>
              </div>              
              <button class="btn header-btn-collapse-nav ms-4" data-bs-toggle="collapse" data-bs-target=".header-nav-main nav"> <i class="fas fa-bars"></i> </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <div class="main"> @yield('content') </div>
  <footer id="footer" class="border-0 mt-0 pt-3">
    <div class="container pt-2 pb-3 padding-0">
      <div class="row text-center text-md-start py-2 my-2">
        <div class="col-md-6 col-lg-3 align-self-center text-center text-md-start text-lg-center mb-5 mb-lg-0"> <a href="{{ url('/') }}" class="text-decoration-none"> <img src="{{ $logo }}" class="img-fluid" alt="" width="200" /> </a> </div>
        <div class="col-md-6 col-lg-3">
          <h5 class="text-transform-none font-weight-bold text-4-5 mb-4">Who we are</h5>
          <p>At Quote Hub, we're dedicated to supporting companies by streamlining their operations, saving costs, and reducing time and labor. <a href="{{ url('about-us') }}" class="text-primary">View More</a></p>
        </div>
        <div class="col-md-6 col-lg-2 mb-5 mb-md-0 info-links">
          <h5 class="text-transform-none font-weight-bold text-4-5 mb-4">Information</h5>
          <ul class="list list-unstyled mb-0">
            <li class="mb-0"><a href="{{ url('/') }}"><i class="fas fa-angle-right text-main"></i> Home</a></li>
            <li class="mb-0"><a href="{{ url('about-us') }}"><i class="fas fa-angle-right text-main"></i> About Us</a></li>
            <li class="mb-0"><a href="{{ url('coroplast-signs') }}"><i class="fas fa-angle-right text-main"></i> Coroplast Signs</a></li>
            <li class="mb-0"><a href="{{ url('banners') }}"><i class="fas fa-angle-right text-main"></i> Banners</a></li>
            <li class="mb-0"><a href="{{ url('contact-us') }}"><i class="fas fa-angle-right text-main"></i> Contact Us</a></li>
          </ul>
        </div>
        <div class="col-md-6 col-lg-3 mb-5 mb-md-0 margin-0">
          <h5 class="text-transform-none font-weight-bold text-4-5 mb-4">Get in Touch</h5>
          <ul class="list list-unstyled margin-0">
            <li class="pb-1 mb-2"> <span class="d-block font-weight-semibold line-height-1 text-color-grey text-3-5 mb-1">PHONE</span>
              <ul class="list list-unstyled font-weight-light text-3-5 mb-0">
                <li class="line-height-3 mb-0"><i class="icon-phone"></i> Sales: <a href="tel:+1234567890" class="text-decoration-none text-color-hover-default">123-456-7890</a> </li>
              </ul>
            </li>
            <li class="pb-1 mb-2 mb-md-0"> <span class="d-block font-weight-semibold line-height-1 text-color-grey text-3-5">EMAIL</span> <a href="mailto:{{ $setting->email }}" class="text-decoration-none font-weight-light text-3-5 text-color-hover-default"><i class="icon-envelope"></i> {{ $setting->email }}</a> </li>
          </ul>
          </div>
      </div>
    </div>
    <div class="footer-copyright py-0">
      <div class="container py-2">
        <div class="row">
          <div class="col">
            <p class="text-center text-3 mb-0">Copyright &copy; 2025. All Rights Reserved.</p>
          </div>
        </div>
      </div>
    </div>
  </footer>
</div>
<!-- Vendor -->
<script src="{{ asset('web_assets/vendor/plugins/js/plugins.min.js') }}"></script>
<script src="{{ asset('web_assets/vendor/bootstrap-star-rating/js/star-rating.min.js') }}"></script>
<script src="{{ asset('web_assets/vendor/bootstrap-star-rating/themes/krajee-fas/theme.min.js') }}"></script>
<script src="{{ asset('web_assets/js/theme.js') }}"></script>
<script src="{{ asset('web_assets/js/views/view.contact.js') }}"></script>
<script src="{{ asset('web_assets/js/views/view.shop.js') }}"></script>
<script src="{{ asset('web_assets/js/demos/demo-auto-services.js') }}"></script>
<script src="{{ asset('web_assets/js/custom.js') }}"></script>
<script src="{{ asset('web_assets/js/theme.init.js') }}"></script>
@stack('scripts')
</body>
</html>
