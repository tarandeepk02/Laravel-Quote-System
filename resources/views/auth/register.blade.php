@extends('layouts.app')

@section('title', __('auth.register'))

@section('content')
<div class="section mt-3 pt-3 mb-3 pb-3">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6 col-md-offset-3 cardBody">
        <div class="card">
          <div class="card-header text-center">Don't you have an account? Sign Up</div>
          <div class="card-body">
            <form method="POST" action="{{ url('user/register') }}">
              @csrf
              <div class="row mb-3">
                <label for="name" class="col-md-4 col-form-label text-md-end">Name</label>
                <div class="col-md-6">
                  <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name" autofocus required oninvalid="setCustomValidity('{{ __('app.this_field_is_mandatory') }}')" onchange="setCustomValidity('');" oninput="try{setCustomValidity('')}catch(e){}" autocomplete="off">
                  @error('name') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong> </span> @enderror </div>
              </div>
              <div class="row mb-3">
                <label for="email" class="col-md-4 col-form-label text-md-end">Email Address</label>
                <div class="col-md-6">
                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" oninvalid="setCustomValidity('{{ __('app.this_field_is_mandatory') }}')" onchange="setCustomValidity('');" oninput="try{setCustomValidity('')}catch(e){}" autocomplete="off">
                  @error('email') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong> </span> @enderror </div>
              </div>
              <div class="row mb-3">
                <label for="password" class="col-md-4 col-form-label text-md-end">Password</label>
                <div class="col-md-6">
                  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password"  oninvalid="setCustomValidity('{{ __('app.this_field_is_mandatory') }}')" onchange="setCustomValidity('');" oninput="try{setCustomValidity('')}catch(e){}" autocomplete="off">
                  @error('password') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong> </span> @enderror </div>
              </div>
              <div class="row mb-3">
                <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('auth.confirm_password') }}</label>
                <div class="col-md-6">
                  <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password"  oninvalid="setCustomValidity('{{ __('app.this_field_is_mandatory') }}')" onchange="setCustomValidity('');" oninput="try{setCustomValidity('')}catch(e){}" autocomplete="off">
                </div>
              </div>
              <div class="row mb-3">
                <label for="password-confirm"
                                    class="col-md-4 col-form-label text-md-end">Address</label>
                <div class="col-md-6">
                  <input type="text" class="form-control" placeholder="" name="address" required id="address" onFocus="initializeAutocomplete()" autocomplete="off" value="" autocomplete="off">
                  <input type="hidden" class="form-control" id="latitude" placeholder="Enter Latitude" name="latitude" required readonly="readonly" value="">
                  <input type="hidden" class="form-control" id="longitude" placeholder="Enter Longitude" name="longitude" required readonly="readonly" value="">
                </div>
              </div>
              <!--<div class="row mb-3">
                <label for="name" class="col-md-4 col-form-label text-md-end"></label>
                <div class="col-md-6 text-danger">
                  <input type="checkbox" name="age_confirm" required  oninvalid="setCustomValidity('{{ __('app.this_field_is_mandatory') }}')" onchange="setCustomValidity('');" oninput="try{setCustomValidity('')}catch(e){}" autocomplete="off">
                  {{ __('auth.confirm_age') }} </div>
              </div>-->
              <div class="row mb-0">
                <div class="col-md-6 offset-4">
                  <button id="registerBtn" type="submit" class="btn btn-primary"> {{ __('auth.register') }} </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection 