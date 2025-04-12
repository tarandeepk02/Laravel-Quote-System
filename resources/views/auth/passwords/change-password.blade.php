@extends('layouts.app')

@section('title', __('auth.change_password'))

@section('content')
<div class="section howitwrap">
    <div class="container">
        <div class="row">
            <div class="col-md-8 cardBody col-md-offset-2">
                <div class="card shadow">
				<div class="card-header">
                    <h4 class="card-title font-weight-bold">{{ __('auth.change_password') }}</h4>
</div>
                    <div class="card-body">
                        @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        @if ($errors)
                            @foreach ($errors->all() as $error)
                                <div class="alert alert-danger">{{ $error }}</div>
                            @endforeach
                        @endif
                        <form class="form-horizontal" method="POST" action="{{ route('user.changePassword') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('current-password') ? ' has-error' : '' }}">
                                <label for="new-password" class="col-md-4 control-label">{{ __('auth.current_password') }}</label>

                                <div class="col-md-6">
                                    <input id="current-password" type="password" class="form-control"
                                        name="current-password" required oninvalid="setCustomValidity('{{ __('app.this_field_is_mandatory') }}')">
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('new-password') ? ' has-error' : '' }}">
                                <label for="new-password" class="col-md-4 control-label">{{ __('auth.new_password') }}</label>

                                <div class="col-md-6">
                                    <input id="new-password" type="password" class="form-control" name="new-password"
                                        required oninvalid="setCustomValidity('{{ __('app.this_field_is_mandatory') }}')">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="new-password-confirm" class="col-md-4 control-label">{{ __('auth.confirm_new_password') }}</label>

                                <div class="col-md-6">
                                    <input id="new-password-confirm" type="password" class="form-control"
                                        name="new-password_confirmation" required oninvalid="setCustomValidity('{{ __('app.this_field_is_mandatory') }}')">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" id="changePasswordBtn" class="btn">
                                        {{ __('auth.change_password') }}
                                    </button>
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
