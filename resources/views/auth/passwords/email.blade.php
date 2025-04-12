@extends('layouts.app')

@section('title', __('auth.reset_password'))

@section('content')
<div class="section mt-3 pt-3 mb-3 pb-3">
  <div class="container">
    <div class="row">
      <div class="col-md-4 cardBody offset-4">
        <div class="card shadow">
          <div class="card-header">
            <h4 class="card-title font-weight-bold mb-0">Reset Password</h4>
          </div>
          <div class="card-body"> @if (session('status'))
            <div class="alert alert-success" role="alert"> {{ session('status') }} </div>
            @endif
            <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
              {{ csrf_field() }}
              <div class="form-group">
                <label for="new-password" class="col-md-4 control-label">{{ __('auth.email_address') }}</label>
                <div class="col-md-12">
                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                  @error('email') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong> </span> @enderror </div>
              </div>
              <div class="form-group">
                <div class="col-md-12">
                  <button id="sendPwdBtn" type="submit" class="btn btn-primary"> {{ __('auth.send_password_reset_link') }} </button>
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