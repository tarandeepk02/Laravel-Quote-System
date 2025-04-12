@extends('layouts.app')

@section('title', 'Get a Quote')

@push('styles')

@endpush

@section('content')
<div role="main" class="main">
  <section class="page-header page-header-modern page-header-background page-header-background-pattern page-header-background-md" style="background-image: url('{{ asset('web_assets/img/page-header-background.png') }}');">
    <div class="container">
      <div class="row">
        <div class="col-md-12 align-self-center p-static order-2">
          <h1 class="font-weight-bold text-dark"><strong>Get a Quote</strong></h1>
        </div>
        <div class="col-md-12 align-self-center order-1">
          <ul class="breadcrumb d-block">
            <li><a href="{{ url('/') }}">Home</a></li>
            <li class="active">Get a Quote</li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!--<section class="page-header page-header-modern bg-color-light-scale-1 page-header-lg">
    <div class="container">
      <div class="row">
        <div class="col-md-12 align-self-center p-static order-2 text-center">
          <h1 class="font-weight-bold text-dark">Get a Quote</h1>
        </div>
        <div class="col-md-12 align-self-center order-1">
          <ul class="breadcrumb d-block text-center">
            <li><a href="{{ url('/') }}">Home</a></li>
            <li class="active">Get a Quote</li>
          </ul>
        </div>
      </div>
    </div>
  </section>-->
  <div class="container py-3 mt-3 mb-3">
    <div class="row pb-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="100">
      <div class="col-xs-12 col-md-3"></div>
      <div class="col-xs-12 col-md-6"> @include('partials.messages')
        <form action="{{route('quote')}}" method="POST" enctype="multipart/form-data" role="form" autocomplete="off">
          {{csrf_field()}}
          <div class="row row-gutter-sm">
            <div class="form-group col-lg-6 mb-4">
              <label>Do you have Design?<span class="asterrisk">*</span></label>
              <select class="form-control" name="design" id="design">
                <option value="">Select</option>
                <option value="Yes" @if(old('design')=='Yes') selected="selected" @endif>Yes</option>
                <option value="No" @if(old('design')=='No') selected="selected" @endif>No</option>
              </select>
              @if ($errors->has('design')) <span class="help-block"> <strong>{{ $errors->first('design') }}</strong> </span> @endif </div>
            <div class="form-group col-lg-6 mb-4 upload-design-div" style="display:none;">
              <label>Upload Design<span class="asterrisk">*</span></label>
              <input type="file" maxlength="100" class="form-control" name="design_file" id="design_file">
              @if ($errors->has('design_file')) <span class="help-block"> <strong>{{ $errors->first('design_file') }}</strong> </span> @endif </div>
          </div>
          <div class="row row-gutter-sm">
            <div class="form-group col-lg-6 mb-4">
              <label>Company Name<span class="asterrisk">*</span></label>
              <input type="text" value="{{ old('company') }}" maxlength="100" class="form-control" name="company" id="company" placeholder="Your Company Name" autocomplete="off">
              @if ($errors->has('company')) <span class="help-block"> <strong>{{ $errors->first('company') }}</strong> </span> @endif </div>
            <div class="form-group col-lg-6 mb-4 design-block">
              <label>Address<span class="asterrisk">*</span></label>
              <input type="text" value="{{ old('address') }}" maxlength="100" class="form-control" name="address" placeholder="Your Address" autocomplete="off" id="address">
              @if ($errors->has('address')) <span class="help-block"> <strong>{{ $errors->first('address') }}</strong> </span> @endif </div>
          </div>
          <div class="row row-gutter-sm">
            <div class="form-group col-lg-6 mb-4">
              <label>Email ID<span class="asterrisk">*</span></label>
              <input type="email" value="{{ old('email') }}" maxlength="100" class="form-control" name="email" id="email" placeholder="Email ID" autocomplete="off">
              @if ($errors->has('email')) <span class="help-block"> <strong>{{ $errors->first('email') }}</strong> </span> @endif </div>
            <div class="form-group col-lg-6 mb-4">
              <label>Phone<span class="asterrisk">*</span></label>
              <input type="text" value="{{ old('phone') }}" maxlength="100" class="form-control" name="phone" id="phone" placeholder="Phone" autocomplete="off">
              @if ($errors->has('phone')) <span class="help-block"> <strong>{{ $errors->first('phone') }}</strong> </span> @endif </div>
          </div>
          <div class="row">
            <div class="form-group col mb-0">
              <button type="submit" class="btn btn-primary btn-modern font-weight-bold text-3 px-5 py-3">Submit</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection

@push('scripts')
<script>
function loadForm()
{
var val = $('#design').find(':selected').val();

if(val=='Yes')
{
//$('.design-block').css('display','none');
$('.upload-design-div').css('display','block');
}
else
{
$('.upload-design-div').css('display','none');
//$('.design-block').css('display','block');
}
}

$(document).ready(function()
{
loadForm();
$(document).on('change','#design',function()
{
loadForm();
});
});
</script>
@endpush