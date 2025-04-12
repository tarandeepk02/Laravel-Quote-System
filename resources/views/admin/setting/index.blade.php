@extends('admin.includes.base')
@section('content')
<div class="page-wrapper">
  <!-- ============================================================== -->
  <!-- Bread crumb and right sidebar toggle -->
  <!-- ============================================================== -->
  <div class="page-breadcrumb">
    <div class="row">
      <div class="col-5 align-self-center">
        <h4 class="page-title">Site Settings</h4>
        <div class="d-flex align-items-center"> </div>
      </div>
      <div class="col-7 align-self-center">
        <div class="d-flex no-block justify-content-end align-items-center">
          <div class="d-flex no-block justify-content-end align-items-center">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"> <a href="{{ url('admin/home') }}">Home</a> </li>
                <li class="breadcrumb-item active" aria-current="page">Site Settings</li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
  @include('common.notify')
  <div class="container-fluid">
    <div class="row">
      <div class="col-8">
      <div class="card">
      <div class="card-body">
        <div class="d-flex m-b-0 no-block">
          <h5 class="card-title m-b-0 align-self-center">Site Settings</h5>
          <div class="ml-auto">
            <div class="dl">
              <div class="col-3 align-self-center"> </div>
            </div>
          </div>
        </div>
      </div>
      <hr class="m-t-0">
      <form class="form-horizontal" action="{{route('admin.setting.update', $setting->id )}}" method="POST" enctype="multipart/form-data" role="form">
        {{csrf_field()}}
        <input type="hidden" name="_method" value="PATCH">
        <div class="card-body bg-light">
          <div class="row">
            <div class="col-12">
              <div class="row">
                    <div class="col-12">
                      <div class="form-group">
                        <label for="inputEmail3" class="control-label col-form-label">Logo</label>
                        <div class="">
                          <div class="showimg"> @if(isset($setting->logo)) <img id="testimonialbyicon" src="{{ url('storage/'.$setting->logo) }}" width="100" height="100" /> @else <img id="testimonialbyicon" src="http://placehold.it/100x100" alt="your image" width="100" width="100" /> @endif </div>
                          <input type="file" name="logo" onchange="readURL(this,'testimonialbyicon');">
                        </div>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-group">
                        <label for="inputEmail3" class="control-label col-form-label">Site Title</label>
                        <input class="form-control" type="text" value="{{ $setting->stitle }}" name="stitle" required id="email" placeholder="Site Title">
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-group">
                        <label for="inputEmail3" class="control-label col-form-label">Meta Keywords</label>
                        <textarea class="form-control" name="metakey" cols="7" rows="3" data-sample="1" data-sample-short="">{{ $setting->metakey }}</textarea>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-group">
                        <label for="inputEmail3" class="control-label col-form-label">Meta Description</label>
                        <textarea class="form-control" name="metadesc" cols="7" rows="3" data-sample="1" data-sample-short="">{{ $setting->metadesc }}</textarea>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-group">
                        <label for="inputEmail3" class="control-label col-form-label">Address</label>
                        <textarea class="form-control" name="address" cols="7" rows="3" data-sample="1" data-sample-short="">{{ $setting->address }}</textarea>
                      </div>
                    </div>
                  </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label for="inputEmail3" class="control-label col-form-label">Contact</label>
                <input class="form-control" type="text" value="{{ $setting->contact }}" name="contact" required id="contact" placeholder="Contact">
              </div>
            </div>
            <!--<div class="col-12">
                  <div class="form-group">
                    <label for="inputEmail3" class="control-label col-form-label">Admin Email</label>
                    <input class="form-control" type="text" value="{{ $setting->
            adminemail }}" name="adminemail" required id="email" placeholder="Admin Email"> </div>
        </div>
        -->
        <div class="col-12">
          <div class="form-group">
            <label for="inputEmail3" class="control-label col-form-label">Email Id</label>
            <input class="form-control" type="text" value="{{ $setting->email }}" name="email" required id="email" placeholder="Email Id">
          </div>
        </div>
        <div class="col-12">
          <div class="form-group">
            <label for="inputEmail3" class="control-label col-form-label">Website</label>
            <input class="form-control" type="text" value="{{ $setting->website }}" name="website" required id="email" placeholder="Website">
          </div>
        </div>
        <h3>Social Media</h3>
        <div class="col-12">
          <div class="form-group">
            <label for="inputEmail3" class="control-label col-form-label">Facebook</label>
            <input class="form-control" type="text" value="{{ $setting->facebook }}" name="facebook" required id="email" placeholder="Facebook">
          </div>
        </div>
        <div class="col-12">
          <div class="form-group">
            <label for="inputEmail3" class="control-label col-form-label">Twitter</label>
            <input class="form-control" type="text" value="{{ $setting->twitter }}" name="twitter" required id="email" placeholder="Twitter">
          </div>
        </div>
        <div class="col-12">
          <div class="form-group">
            <label for="inputEmail3" class="control-label col-form-label">Instagram</label>
            <input class="form-control" type="text" value="{{ $setting->linkedin }}" name="linkedin" required id="email" placeholder="Instagram">
          </div>
        </div>    
        </div>
        </div>
        <div class="card-body">
          <div class="form-group m-b-0 text-right">
            <button type="submit" class="btn btn-info waves-effect waves-light">Save</button>
            <a href="{{route('admin.setting.index')}}" class="btn btn-dark waves-effect waves-light deactive_button">Cancel</a> </div>
        </div>
      </form>
    </div>
  </div>
</div>
</div>
</div>
</div>
@endsection