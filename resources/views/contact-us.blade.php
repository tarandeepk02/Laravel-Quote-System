@extends('layouts.app')

@section('title', 'Contact Us')

@push('styles')

@endpush

@section('content')
<div>
  <section class="page-header page-header-modern page-header-background page-header-background-pattern page-header-background-md" style="background-image: url('{{ asset('web_assets/img/page-header-background.png') }}');">
    <div class="container">
      <div class="row">
        <div class="col-md-12 align-self-center p-static order-2">
          <h1 class="font-weight-bold text-dark"><strong>Contact Us</strong></h1>
        </div>
        <div class="col-md-12 align-self-center order-1">
          <ul class="breadcrumb d-block">
            <li><a href="{{ url('/') }}">Home</a></li>
            <li class="active">Contact Us</li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <div class="container py-4">
    <div class="row mb-2">
      <div class="col-md-8"> @include('partials.messages')
        <h2 class="font-weight-bold text-7 mt-2 mb-0">Contact Us</h2>
        <p class="mb-4">Feel free to ask for details, don't save any questions!</p>
        <form class="" action="{{ url('contact-us') }}" method="POST">
          @csrf
          <div class="row">
            <div class="form-group col-lg-6">
              <label class="form-label mb-1 text-2">Full Name<span class="asterrisk">*</span></label>
              <input type="text" value="{{ old('name') }}" maxlength="100" class="form-control text-3 h-auto py-2" name="name">
              @if ($errors->has('name')) <span class="help-block"> <strong>{{ $errors->first('name') }}</strong> </span> @endif </div>
            <div class="form-group col-lg-6">
              <label class="form-label mb-1 text-2">Email Address<span class="asterrisk">*</span></label>
              <input type="email" value="{{ old('email') }}" maxlength="100" class="form-control text-3 h-auto py-2" name="email">
              @if ($errors->has('email')) <span class="help-block"> <strong>{{ $errors->first('email') }}</strong> </span> @endif </div>
          </div>
          <div class="row">
            <div class="form-group col">
              <label class="form-label mb-1 text-2">Subject<span class="asterrisk">*</span></label>
              <input type="text" value="{{ old('subject') }}" maxlength="100" class="form-control text-3 h-auto py-2" name="subject">
              @if ($errors->has('subject')) <span class="help-block"> <strong>{{ $errors->first('subject') }}</strong> </span> @endif </div>
          </div>
          <div class="row">
            <div class="form-group col">
              <label class="form-label mb-1 text-2">Message</label>
              <textarea maxlength="5000" rows="5" class="form-control text-3 h-auto py-2" name="message">{{ old('message') }}</textarea>
              @if ($errors->has('message')) <span class="help-block"> <strong>{{ $errors->first('message') }}</strong> </span> @endif </div>
          </div>
          <div class="row">
            <div class="form-group col">
              <input type="submit" value="Submit" class="btn btn-primary btn-modern">
            </div>
          </div>
        </form>
      </div>
      <div class="col-md-4">
        <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="800" data-plugin-options="{'accY': -200}">
          <h4 class="pt-5">Get in <strong>Touch</strong></h4>
          <ul class="list list-icons list-icons-style-3 mt-2">
            <li><i class="fas fa-phone top-6"></i> <strong>Phone:</strong> 123-456-7890</li>
            <li><i class="fas fa-envelope top-6"></i> <strong>Email:</strong> <a href="mailto:info@quotehub.com">info@quotehub.com</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection