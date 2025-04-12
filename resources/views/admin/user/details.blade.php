@extends('admin.includes.base')

@section('content')
<div class="page-wrapper">
  <div class="page-breadcrumb">
    <div class="row">
      <div class="col-5 align-self-center">
        <h4 class="page-title">User Details</h4>
        <div class="d-flex align-items-center"> </div>
      </div>
      <div class="col-7 align-self-center">
        <div class="d-flex no-block justify-content-end align-items-center">
          <div class="d-flex no-block justify-content-end align-items-center">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"> <a href="{{ url('superadminjft/home') }}">Home</a> </li>
                <li class="breadcrumb-item active" aria-current="page">User Details</li>
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
              <img src="{{ ($user->user_profile) ? url($user->user_profile) : url('storage/images/profile/default-image.png') }}" class="rounded-circle" width="150" />
              <h4 class="card-title m-t-10">{{ $user->name }}</h4>
              <div class="row text-center justify-content-md-center">
                <div class="col-4"><a href="javascript:void(0)" class="link"><i class="icon-people"></i> <font class="font-medium">{{ $jobs->count() }}</font> </a><br />
                  Total Jobs</div>
                <div class="col-4"><a href="javascript:void(0)" class="link"><i class="icon-picture"></i> <font class="font-medium">{{ $appliers->count() }}</font> </a><br />
                  Job Applied</div>
              </div>
            </center>
          </div>
          <div>
            <hr>
          </div>
          <div class="card-body"> <small class="text-muted">Email address </small>
            <h6>{{ $user->email }}</h6>
            <small class="text-muted p-t-30 db">Phone</small>
            <h6>{{ $user->phone_number }}</h6>
            <small class="text-muted p-t-30 db">Zipcode</small>
            <h6>{{ $user->zip_code }}</h6>
            <small class="text-muted p-t-30 db">City</small>
            <h6>{{ $user->city }}</h6>
            <small class="text-muted p-t-30 db">State</small>
            <h6>{{ $user->state }}</h6>
            <small class="text-muted p-t-30 db">Country</small>
            <h6>{{ $user->country }}</h6>
            <!--<div class="map-box">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d470029.1604841957!2d72.29955005258641!3d23.019996818380896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e848aba5bd449%3A0x4fcedd11614f6516!2sAhmedabad%2C+Gujarat!5e0!3m2!1sen!2sin!4v1493204785508" width="100%" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>-->
          </div>
        </div>
      </div>
      <!-- Column -->
      <!-- Column -->
      <div class="col-lg-8 col-xlg-9 col-md-7">
        <div class="card">
          <!-- Tabs -->
          <ul class="nav nav-pills" id="pills-tab" role="tablist">
            <li class="nav-item"> <a class="nav-link active" id="pills-timeline-tab" data-toggle="pill" href="#current-month" role="tab" aria-controls="pills-timeline" aria-selected="true">Total Jobs added by {{ $user->name }}</a> </li>
            <li class="nav-item"> <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#last-month" role="tab" aria-controls="pills-profile" aria-selected="false">Jobs Applied by {{ $user->name }}</a> </li>
          </ul>
          <!-- Tabs -->
          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="current-month" role="tabpanel" aria-labelledby="pills-timeline-tab">
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table bg-white table-bordered nowrap display file_export">
                    <thead>
                      <tr>
                        <th>Sr. No.</th>
                        <th>Category</th>
                        <th>Title</th>
                        <th>Due Date</th>
                        <th>Location</th>
                        <th>Added On</th>
                      </tr>
                    </thead>
                    <tbody>
                    
                    @foreach($jobs as $index => $job)
                    <tr>
                      <td>{{ $index+1 }}</td>
                      <td>{{ $job->categories->title_en }}</td>
                      <td><a href="{{ route('superadminjft.job.show', $job->id) }}">{{ $job->title }}</a></td>
                      <td>{{ $job->duration }}</td>
                      <td>{{ $job->location }}</td>
                      <td>{{ $job->created_at }}</td>
                    </tr>
                    @endforeach
                    </tbody>
                    
                  </table>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="last-month" role="tabpanel" aria-labelledby="pills-profile-tab">
              <div class="card-body"> @if($appliers->count()>0)
                <div class="profiletimeline m-t-0"> @foreach ($appliers as $key => $applier)
                  @php
                  //Get applier details from users table
                  $applier_details = DB::table('users')
                  ->where('id', $applier->user_id)
                  ->first();
                  @endphp
                  <div class="sl-item">
                    <div class="sl-left"> <img src="{{ ($applier_details->user_profile) ? url($applier_details->user_profile) : url('storage/images/profile/default-image.png') }}" alt="user" class="rounded-circle"> </div>
                    <div class="sl-right">
                      <div><a href="javascript:void(0)" class="link">{{ $applier->name }}</a> <span class="sl-date">5 minutes ago</span>
                        <p class="m-t-10"> {{ $applier->cover_letter }}</p>
                      </div>
                      <div class="like-comm m-t-20"> <a href="javascript:void(0)" class="link m-r-10"><i
                                class="fas fa-phone">&nbsp;</i>{{ $applier->phone }}</a> <a href="javascript:void(0)" class="link m-r-10"><i class="far fa-envelope text-danger"></i>&nbsp;<span id="applier_email">{{ $applier->email }}</a> </div>
                    </div>
                  </div>
                  <hr>
                  @endforeach </div>
                @else
                <p>You have not applied to any of the job(s) yet!!!</p>
                @endif </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Column -->
    </div>
  </div>
</div>
@endsection