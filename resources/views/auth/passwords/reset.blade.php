@extends('layouts.app')

@section('title', __('auth.reset_password'))

@section('content')



<div class="section mt-3 pt-3 mb-3 pb-3">
  <div class="container">
    <div class="row">
      <div class="col-md-8 cardBody offset-2">
        <div class="card shadow">
          <div class="card-header">
            <h4 class="card-title font-weight-bold">{{ __('auth.reset_password') }}</h4>
          </div>
          <div class="card-body"> @if (session('status'))
            <div class="alert alert-success" role="alert"> {{ session('status') }} </div>
            @endif
            <form method="POST" action="{{ route('password.update') }}">
            @csrf
            <input type="hidden" name="token" value="{{ $token }}">
            <div class="row mb-3">
              <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('auth.email_address') }}</label>
              <div class="col-md-6">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                @error('email') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong> </span> @enderror </div>
            </div>
            <div class="row mb-3">
              <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('auth.password') }}</label>
              <div class="col-md-6">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                @error('password') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong> </span> @enderror </div>
            </div>
            <div class="row mb-3">
              <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('auth.confirm_password') }}</label>
              <div class="col-md-6">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
              </div>
            </div>
            <div class="row mb-0">
			<label for="password-confirm" class="col-md-4 col-form-label text-md-end">&nbsp;</label>
              <div class="col-md-6">
                <button id='resetPwdBtn' type="submit" class="btn btn-primary"> Reset Password</button>
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