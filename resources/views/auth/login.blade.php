@extends('layouts.app')

@section('title', __('auth.login'))

@section('content')
<div class="section mt-3 pt-3 mb-3 pb-3">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8 col-md-offset-2 cardBody">
        <div class="card">
          <div class="card-header text-center">Already have an account? Login</div>
          <div class="card-body">
            <form method="POST" action="{{ route('login') }}">
              @csrf
              <div class="row mb-3">
                <label for="email"
                                    class="col-md-4 col-form-label text-md-end">Email Address</label>
                <div class="col-md-6">
                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                        name="email" value="{{ old('email') }}" required autocomplete="email" autofocus  oninvalid="setCustomValidity('{{ __('app.this_field_is_mandatory') }}')" onchange="setCustomValidity('');" oninput="try{setCustomValidity('')}catch(e){}">
                  @error('email') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong> </span> @enderror </div>
              </div>
              <div class="row mb-3">
                <label for="password"
                                    class="col-md-4 col-form-label text-md-end">Password</label>
                <div class="col-md-6">
                  <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password" oninvalid="setCustomValidity('{{ __('app.this_field_is_mandatory') }}')" onchange="setCustomValidity('');" oninput="try{setCustomValidity('')}catch(e){}">
                  @error('password') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong> </span> @enderror </div>
              </div>
              <div class="row mb-3">
                <div class="col-md-6 offset-4">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>
                    <label class="form-check-label" for="remember"> {{ __('auth.remember_me') }} </label>
                  </div>
                </div>
              </div>
              <div class="row mb-0">
                <div class="col-md-8 offset-4">
                  <button id="loginBtn" type="submit" class="btn btn-primary"> {{ __('auth.login') }} </button>
                  @if (Route::has('password.request')) <a id="forgotPwdLink" class="btn btn-link"
                                            href="{{ route('password.request') }}"> {{ __('auth.forgot_your_password') }} </a> @endif </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection 