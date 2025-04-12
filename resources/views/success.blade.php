@extends('layouts.app')

@section('title', 'Success')

@push('styles')

@endpush

@section('content')
<div role="main" class="main">
  <section id="elements" class="section-height-2 border-0 mb-5 pt-5">
    <div class="container py-2">
      <div class="row mt-3 pb-4">
        <div class="col-md-3"></div>
        <div class="col-md-6">
          <div class="col text-center">
            <h1 class="success-icon"><i class="far fa-check-circle"></i></h1>
            <h4 class="font-weight-bold mb-3">Thanks for your interest in our services</h4>
            <p class="lead text-4 pt-2 font-weight-normal">We've received your quotation request and our team is excited to assist you on your journey to achieving your goals. Expect greatness ahead!</p>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection

@push('scripts')

@endpush