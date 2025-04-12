@extends('admin.includes.base')

@section('content')
<div class="page-wrapper">
  <div class="page-breadcrumb">
    <div class="row">
      <div class="col-5 align-self-center">
        <h4 class="page-title">Lead Details</h4>
        <div class="d-flex align-items-center"> </div>
      </div>
      <div class="col-7 align-self-center">
        <div class="d-flex no-block justify-content-end align-items-center">
          <div class="d-flex no-block justify-content-end align-items-center">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"> <a href="{{ url('admin/home') }}">Home</a> </li>
                <li class="breadcrumb-item active" aria-current="page">Lead Details</li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
  @include('common.notify')
  <div class="container-fluid">
    <!-- Row -->
    <div class="row">
      <!-- Column -->
      <div class="col-lg-4 col-xlg-3 col-md-5">
        <div class="card">
          <div class="card-body">
            <center class="m-t-30">
			@if($lead->design=="Yes")
              <img src="{{ ($lead->design_file) ? url('storage/'.$lead->design_file) : url('storage/images/profile/default-image.png') }}" class="rounded-circle" width="150" />
			  @endif
              <h4 class="card-title m-t-10">{{ $lead->product }}</h4>
            </center>
          </div>
          <div>
            <hr>
          </div>
          <div class="card-body"> 
		  
		  <small class="text-muted">Company </small>
            <h6>{{ $lead->company }}</h6>
		  
		  <small class="text-muted">Email address </small>
            <h6>{{ $lead->email }}</h6>
            <small class="text-muted p-t-30 db">Phone</small>
            <h6>{{ $lead->phone }}</h6>
          </div>
        </div>
      </div>
      <!-- Column -->
      <!-- Column -->
      <div class="col-lg-8 col-xlg-9 col-md-7">
        <div class="card">
          <div class="card-body">
                
				
				
				@if($lead->product=="Coroplast Signs")
				
				<table class="table table-bordered">
				<tr>
				<th colspan="2"><h4><strong>Order Details</strong></h4></th>
				</tr>
				<tr>
				<td>Size</td>
				<td>{{ $productInfo['size'] }}</td>
				</tr>
				<tr>
				<td>Quantity</td>
				<td>{{ $productInfo['quantity'] }}</td>
				</tr>
				<tr>
				<td>Side</td>
				<td>{{ $productInfo['side'] }}</td>
				</tr>
				<tr>
				<td>Adon</td>
				<td>{{ $productInfo['adon'] }}</td>
				</tr>
				<tr>
				<td>Total</td>
				<td>{{ $productInfo['amount'] }}</td>
				</tr>				
				
				</table>
				
				@else
				
				
				<table class="table table-bordered">
				<tr>
				<th colspan="2"><h4><strong>Order Details</strong></h4></th>
				</tr>
				<tr>
				<td>Size</td>
				<td>{{ $productInfo['width'].'x'.$productInfo['height'] }}</td>
				</tr>
				<tr>
				<td>Quantity</td>
				<td>{{ $productInfo['quantity'] }}</td>
				</tr>
				<tr>
				<td>Grommets</td>
				<td>{{ $productInfo['grommets'] }}</td>
				</tr>
				<tr>
				<td>Hemming</td>
				<td>{{ $productInfo['hemming'] }}</td>
				</tr>
				<tr>
				<td>Total</td>
				<td>{{ $productInfo['amount'] }}</td>
				</tr>				
				
				</table>
				
				
				@endif
				
				
				
				
				
				
              </div>
        </div>
      </div>
      <!-- Column -->
    </div>
  </div>
</div>
@endsection