@extends('layouts.app')

@section('title', __('auth.verify'))

@section('content')
<div class="section mt-3 pt-3 mb-3 pb-3">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-md-offset-2 cardBody">
            <div class="card">
                <div class="card-header">{{ __('auth.verify') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('auth.a_fresh_link_been_sent') }}
                        </div>
                    @endif

                    {{ __('auth.check_your_email_for_a_verification_link') }}
                    {{ __('auth.if_did_not_receive_email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('auth.click_here_to_request_another') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
