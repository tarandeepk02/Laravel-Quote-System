@extends('layouts.app')

@section('title', 'About Us')

@push('styles')
<style>
.lead
{
letter-spacing:2px;
font-weight:bold;
}
</style>
@endpush

@section('content')
<div>
  <section class="page-header page-header-modern page-header-background page-header-background-pattern page-header-background-md" style="background-image: url('{{ asset('web_assets/img/about-us.jpg') }}');">
    <div class="container">
      <div class="row">
        <div class="col-md-12 align-self-center p-static order-2">
          <h1 class="font-weight-bold text-dark">About <strong>Us</strong></h1>
        </div>
        <div class="col-md-12 align-self-center order-1">
          <ul class="breadcrumb d-block">
            <li><a href="{{ url('/') }}">Home</a></li>
            <li class="active">About Us</li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <div class="container my-2 pt-4">
    <div class="row align-items-center justify-content-center mb-3">
      <div class="col-lg-5 pb-sm-4 pb-lg-0 mb-5 mb-lg-0 margin-0">
        <div class="overflow-hidden">
          <h2 class="font-weight-bold text-color-dark mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="300">Welcome to Quote Hub</h2>
        </div>
        <div class="custom-divider divider divider-primary divider-small my-3">
          <hr class="my-0 appear-animation" data-appear-animation="customLineProgressAnim" data-appear-animation-delay="700">
        </div>
        <p class="lead"><strong>Your Ultimate Destination for Wholesale Coroplast Sheets and Banners!</strong></p>
        <p class="font-weight-light mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="450">We're dedicated to supporting companies by streamlining their operations, saving costs, and reducing time and labor. Our comprehensive range of high-quality coroplast sheets and banners not only meets the needs of businesses directly but also serves as a valuable resource for signage professionals.</p>
        <div class="font-weight-light mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="450">
          <div class="row">
            <div class="col-11">
              <ul class="list list-icons list-icons-style-3 list-icons-sm">
                <li><i class="fas fa-check"></i> Affordable prices without compromising on quality</li>
                <li><i class="fas fa-check"></i> Easy online ordering process for convenience</li>
                <li><i class="fas fa-check"></i> Fast turnaround times to meet your deadlines</li>
                <li><i class="fas fa-check"></i> Dedicated customer support for assistance</li>
              </ul>
            </div>
            <div class="col-1">
              
            </div>
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
  <div class="container my-2 pt-2">
    <div class="row pb-0">
      <div class="featured-boxes featured-boxes-style-8">
        <div class="row">
          <div class="col-lg-6">
            <div class="featured-box featured-box-primary featured-box-text-start mt-0">
              <div class="box-content p-4">
                <div class="row">
                  <div class="col-9">
                    <h2 class="font-weight-normal text-4 mb-0 text-size">OUTSTANDING <strong class="font-weight-extra-bold">CUSTOMER SERVICE</strong></h2>
                  </div>
                  <div class="col-3">
                    <div class="text-end"> <i class="icon-featured far fa-heart"></i> </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                    <p class="mb-0">Our print specialists are always ready to assist you with any questions from 6:00AM to 6:00PM</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="featured-box featured-box-primary featured-box-text-start mt-0">
              <div class="box-content p-4">
                <div class="row">
                  <div class="col"> <i class="icon-featured far fa-chart-bar float-start me-4 w-auto"></i>
                    <h2 class="font-weight-normal text-4 mb-0 text-size">HIGH <strong class="font-weight-extra-bold">QUALITY PRINTING</strong></h2>
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                    <p class="mb-0">Stringent quality checks are conducted at every stage of production to ensure adherence to or surpassing industry standards.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @include("partials.taglines") </div>
@endsection 