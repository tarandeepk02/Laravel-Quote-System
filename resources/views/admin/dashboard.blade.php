@extends('admin.includes.base')
@push('styles')
<style>
.card-group .card, .card-group .card-body
{
cursor:pointer!important;
}
</style>
@endpush
@section('content')
<div class="page-wrapper">
  <div class="page-breadcrumb">
    <div class="row">
      <div class="col-5 align-self-center">
        <div class="d-flex align-items-center">
          <div>
            <h3 class="m-b-0"><i class="icon-Dashboard"></i> Welcome back!</h3>
            <span>{{ date('l, d F Y') }}</span> </div>
        </div>
      </div>
      <div class="col-7 align-self-center">
        <div class="d-flex no-block justify-content-end align-items-center">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"> <a href="{{ url('superadminjft/home') }}">Home</a> </li>
              <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="card-group">
      <!-- Card -->
      <div class="card" onclick="window.location.href='{{ url("admin/lead") }}'">
        <div class="card-body">
          <div class="d-flex align-items-center">
            <div class="m-r-10"> <span class="btn btn-circle btn-lg bg-danger"> <i class="icon-Diamond text-white"></i> </span> </div>
            <div> Coroplast Signs </div>
            <div class="ml-auto">
              <h2 class="m-b-0 font-light">{{ $dash1 }}</h2>
            </div>
          </div>
        </div>
      </div>
      <!-- Card -->
      <!-- Card -->
      <div class="card" onclick="window.location.href='{{ url("admin/lead") }}'">
        <div class="card-body">
          <div class="d-flex align-items-center">
            <div class="m-r-10"> <span class="btn btn-circle btn-lg btn-info"> <i class="icon-Camera text-white"></i> </span> </div>
            <div> Banners </div>
            <div class="ml-auto">
              <h2 class="m-b-0 font-light">{{ $dash2 }}</h2>
            </div>
          </div>
        </div>
      </div>
      <!-- Card -->
      <!-- Card -->
      <div class="card" onclick="window.location.href='{{ url("admin/feedback") }}'">
        <div class="card-body">
          <div class="d-flex align-items-center">
            <div class="m-r-10"> <span class="btn btn-circle btn-lg bg-success"> <i class="icon-Loop text-white"></i> </span> </div>
            <div> Feedback </div>
            <div class="ml-auto">
              <h2 class="m-b-0 font-light">{{ $dash3 }}</h2>
            </div>
          </div>
        </div>
      </div>
      <!-- Card -->
      <!-- Card -->
      <div class="card" onclick="window.location.href='{{ url("admin/faq") }}'">
        <div class="card-body">
          <div class="d-flex align-items-center">
            <div class="m-r-10"> <span class="btn btn-circle btn-lg bg-warning"> <i class="icon-Globe text-white"></i> </span> </div>
            <div> Faqs </div>
            <div class="ml-auto">
              <h2 class="m-b-0 font-light">{{ $dash4 }}</h2>
            </div>
          </div>
        </div>
      </div>
      <!-- Card -->
      <!-- Column -->
    </div>
    <div class="row">
      <div class="col-sm-12 col-lg-12">
        <div class="card">
          <div class="card-body p-b-0">
            <h4 class="card-title">Latest Leads</h4>
            <div class="table-responsive">
              <table class="table v-middle">
                <thead>
                  <tr>
                    <th class="border-top-0">Sr No</th>
                    <th class="border-top-0">Company Name</th>
                    <th class="border-top-0">Email Id</th>
                    <th class="border-top-0">Added On</th>
					<th class="border-top-0">Action</th>
                  </tr>
                </thead>
                <tbody>
                
                @if(count($leads)>0)
                @foreach($leads as $index => $lead)
                <tr>
                  <td>{{ $index+1 }}</td>
                  <td>{{ $lead->company }}</td>
                  <td class="font-medium"><a href="mailto:{{ $lead->email }}">{{ $lead->email }}</a></td>
                  <td class="font-medium">{{ date('d F Y',strtotime($lead->created_at)) }}</td>
				  <td><a href="{{ route('admin.lead.show', $lead->id) }}" class="btn btn-info btn-sm"><i class="fa fa-eye"></i> Details</a></td>
                </tr>
                @endforeach
                @else
                <tr>
                  <td colspan="6" align="center">No Leads found.</td>
                </tr>
                @endif
                </tbody>
                
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection 