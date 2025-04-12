@extends('admin.includes.base')
@section('content')
<div class="page-wrapper">
  <div class="page-breadcrumb">
    <div class="row">
      <div class="col-5 align-self-center">
        <h4 class="page-title">Password</h4>
        <div class="d-flex align-items-center"> </div>
      </div>
      <div class="col-7 align-self-center">
        <div class="d-flex no-block justify-content-end align-items-center">
          <div class="d-flex no-block justify-content-end align-items-center">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"> <a href="{{ url('admin/dashboard') }}">Home</a> </li>
                <li class="breadcrumb-item active" aria-current="page">Password</li>
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
            <h4 class="card-title m-b-0">Change Password</h4>
          </div>
          <hr class="m-t-0">
          <form class="form-horizontal r-separator" action="{{route('admin.password.update')}}" method="POST" role="form">
            {{csrf_field()}}
            <div class="card-body bg-light">
              <div class="row">
                <div class="col-12">
                  <div class="form-group">
                    <label for="inputEmail3" class="control-label col-form-label">Old Password</label>
                    <input class="form-control" type="password" name="old_password" id="old_password" placeholder="Old Password">
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-group">
                    <label for="inputEmail3" class="control-label col-form-label">Password</label>
                    <input class="form-control" type="password" name="password" id="password" placeholder="New Password">
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-group">
                    <label for="inputEmail3" class="control-label col-form-label">Password Confirmation</label>
                    <input class="form-control" type="password" name="password_confirmation" id="password_confirmation" placeholder="Re-type New Password">
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