@extends('layouts.app')

@section('title', 'Home page')

@push('styles')
<link rel="stylesheet" href="{{ asset('web_assets/css/examples/examples-spotlight-cursor-text.css') }}">
<link rel="stylesheet" href="{{ asset('web_assets/css/examples/examples-text-bg-clip-animation.css') }}">
@endpush

@section('content')
<div>
  <section class="section border-0 m-0 p-0 section-slider">
    <div class="row mb-5 z-index-1">
      <div class="col-md-6 col-lg-6 col-xl-6"> <a href="{{ url('coroplast-signs') }}" class="btn btn-primary custom-btn-border-radius custom-btn-arrow-effect-1 font-weight-bold text-3 px-3 mt-2 appear-animation animated fadeInUpShorter appear-animation-visible btn-red left-btn" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1300" style="animation-delay: 1300ms;"> Get a Quote  
        <svg class="ms-2" version="1.1" viewBox="0 0 15.698 8.706" width="17" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
          <polygon stroke="#FFF" stroke-width="0.1" fill="#FFF" points="11.354,0 10.646,0.706 13.786,3.853 0,3.853 0,4.853 13.786,4.853 10.646,8 11.354,8.706 15.698,4.353 "></polygon>
        </svg>
        </a> </div>
      <div class="col-md-6 col-lg-6 col-xl-6"> <a href="{{ url('banners') }}" class="btn btn-primary custom-btn-border-radius custom-btn-arrow-effect-1 font-weight-bold text-3 px-5 mb-5 appear-animation animated fadeInUpShorter appear-animation-visible btn-red right-btn" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1300" style="animation-delay: 1300ms;"> Get Started
        <svg class="ms-2" version="1.1" viewBox="0 0 15.698 8.706" width="17" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
          <polygon stroke="#FFF" stroke-width="0.1" fill="#FFF" points="11.354,0 10.646,0.706 13.786,3.853 0,3.853 0,4.853 13.786,4.853 10.646,8 11.354,8.706 15.698,4.353 "></polygon>
        </svg>
        </a> </div>
    </div>
  </section>
  <div class="container my-5 pt-md-4 pt-xl-0">
    <div class="row align-items-center justify-content-center pb-0 mb-0">
      <div class="col-lg-5 pb-sm-4 pb-lg-0 mb-5 mb-lg-0 margin-0">
        <div class="overflow-hidden">
          <h2 class="font-weight-bold text-color-dark mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="300">Why Us?</h2>
        </div>
        <div class="custom-divider divider divider-primary divider-small my-3">
          <hr class="my-0 appear-animation" data-appear-animation="customLineProgressAnim" data-appear-animation-delay="700">
        </div>
        <div class="font-weight-light mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="450">
          <div class="row">
            <div class="col-11">
              <ul class="list list-icons list-icons-style-3 list-icons-sm">
                <li><i class="fas fa-check"></i> <strong>Affordable prices</strong> without compromising on quality</li>
                <li><i class="fas fa-check"></i> Easy online ordering process for convenience</li>
                <li><i class="fas fa-check"></i> Fast turnaround times to meet your deadlines</li>
                <li><i class="fas fa-check"></i> Dedicated customer support for assistance</li>
              </ul>
            </div>
            <div class="col-1">
              
            </div>
          </div>
        </div>
        <div class="d-flex align-items-start align-items-sm-center flex-column flex-sm-row"> <a href="{{ url('about-us') }}" class="btn btn-primary custom-btn-border-radius font-weight-bold text-3 px-5 btn-py-3 me-sm-2 mb-3 mb-sm-0 appear-animation" data-appear-animation="fadeInRightShorterPlus" data-appear-animation-delay="950">VIEW MORE</a>
          <div class="feature-box align-items-center border border-top-0 border-end-0 border-bottom-0 custom-remove-mobile-xs-border-left ms-sm-4 ps-sm-4 appear-animation" data-appear-animation="fadeInRightShorterPlus" data-appear-animation-delay="1200">
            <div class="feature-box-icon bg-transparent"> <i class="icons icon-phone text-6 text-color-dark"></i> </div>
            <div class="feature-box-info line-height-2 ps-1"> <span class="d-block text-1 font-weight-semibold text-color-default">CALL US NOW</span> <strong class="text-4-5"><a href="tel:+11234567890" class="text-color-dark text-color-hover-primary text-decoration-none">123-456-7890</a></strong> </div>
          </div>
        </div>
      </div>
      <div class="col-10 col-md-9 col-lg-7 ps-lg-5 pe-5 appear-animation about-sec" data-appear-animation="fadeInRightShorterPlus" data-appear-animation-delay="1450" data-plugin-options="{'accY': -200}">
        <div class="row row-gutter-sm">
          <div class="col-6 text-center about-imgs">
            <div class="img-thumbnail d-block mb-2 img1"> <img src="{{ asset('web_assets/img/main1.jpg') }}" class="img-fluid box-shadow-5" alt="" height="100"> </div>
            <div class="img-thumbnail d-block img2"> <img src="{{ asset('web_assets/img/main2.jpg') }}" class="img-fluid box-shadow-5" alt=""> </div>
          </div>
          <div class="col-6 text-center about-imgs">
		  <div class="img-thumbnail d-block mb-2 img3"> <img src="{{ asset('web_assets/img/main4.jpg') }}" class="img-fluid box-shadow-5" alt=""> </div>
            <div class="img-thumbnail d-block img4"><img src="{{ asset('web_assets/img/main3.jpg') }}" class="img-fluid box-shadow-5" alt="" height="100"></div>
            
          </div>
        </div>
      </div>
    </div>
  </div>
  @include("partials.taglines")  
  </div>
@endsection 

@push('scripts')
<script src="{{ asset('web_assets/vendor/gsap/gsap.min.js') }}"></script>
<script src="{{ asset('web_assets/vendor/gsap/ScrollTrigger.min.js') }}"></script>
<script src="{{ asset('web_assets/js/examples/examples.lightboxes.js') }}"></script>
<script src="{{ asset('web_assets/js/examples/examples.animations.js') }}"></script>
@endpush