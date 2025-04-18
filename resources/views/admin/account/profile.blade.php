@extends('admin.includes.base')
@section('content')
<div class="page-wrapper">
  <div class="page-breadcrumb">
    <div class="row">
      <div class="col-5 align-self-center">
        <h4 class="page-title">Profile</h4>
        <div class="d-flex align-items-center"> </div>
      </div>
      <div class="col-7 align-self-center">
        <div class="d-flex no-block justify-content-end align-items-center">
          <div class="d-flex no-block justify-content-end align-items-center">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"> <a href="{{ url('admin/dashboard') }}">Home</a> </li>
                <li class="breadcrumb-item active" aria-current="page">Profile</li>
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
      <div class="col-6">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title m-b-0">My Profile</h4>
          </div>
          <hr class="m-t-0">
          <form class="form-horizontal r-separator" action="{{route('admin.profile.update')}}" method="POST" enctype="multipart/form-data" role="form">
            {{csrf_field()}}
            <div class="card-body bg-light">
              <div class="row">
                <div class="col-12">
                  <div class="form-group">
                    <label for="inputEmail3" class="control-label col-form-label">Name</label>
                    <input class="form-control" type="text" value="{{ Auth::guard('admin')->user()->name }}" name="name" required id="name" placeholder=" Name">
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-group">
                    <label for="inputEmail3" class="control-label col-form-label">Email</label>
                    <input class="form-control" type="email" required name="email" value="{{ isset(Auth::guard('admin')->user()->email) ? Auth::guard('admin')->user()->email : '' }}" id="email" placeholder="Email" readonly="readonly">
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-group">
                    <label for="inputEmail3" class="control-label col-form-label">Picture</label>
                    @if(isset(Auth::guard('admin')->user()->picture)) <img style="height: 90px; margin-bottom: 15px; border-radius:2em;" src="{{ url('storage/'.Auth::guard('admin')->user()->picture) }}"> @endif
                    <input type="file" accept="image/*" name="picture" class=" dropify form-control-file" aria-describedby="fileHelp">
                  </div>
                </div>
                <div class="col-12" style="display:none;">
                  <div class="form-group">
                    <label for="inputEmail3" class="control-label col-form-label">Video</label>
                    <input class="form-control" type="text" required name="video" value="{{ isset(Auth::guard('admin')->user()->video) ? Auth::guard('admin')->user()->video : '' }}" id="video" placeholder="Video">
                  </div>
                </div>
                <div class="col-12" style="display:none;">
                  <div class="form-group">
                    <label for="inputEmail3" class="control-label col-form-label"> About</label>
                    <textarea class="form-control mymce" name="about" cols="80" id="mymce" rows="10" data-sample="1" data-sample-short="">{{ isset(Auth::guard('admin')->user()->about) ? Auth::guard('admin')->user()->about : '' }}</textarea>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group m-b-0 text-right">
                <button type="submit" class="btn btn-info waves-effect waves-light">Save</button>
                <button type="submit" class="btn btn-dark waves-effect waves-light deactive_button">Cancel</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection