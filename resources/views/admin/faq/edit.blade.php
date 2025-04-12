@extends('admin.includes.base')
@section('content')
<div class="page-wrapper">
  <!-- ============================================================== -->
  <!-- Bread crumb and right sidebar toggle -->
  <!-- ============================================================== -->
  <div class="page-breadcrumb">
    <div class="row">
      <div class="col-5 align-self-center">
        <h4 class="page-title">Faqs</h4>
        <div class="d-flex align-items-center"> </div>
      </div>
      <div class="col-7 align-self-center">
        <div class="d-flex no-block justify-content-end align-items-center">
          <div class="d-flex no-block justify-content-end align-items-center">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"> <a href="{{ url('admin/home') }}">Home</a> </li>
                <li class="breadcrumb-item active" aria-current="page">Faqs</li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
  @include('common.notify')
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-6">
                <h4 class="card-title pull-left">Update Faq</h4>
              </div>
              <div class="col-6 pull-right"> <a href="{{ route('admin.faq.index') }}" class="" style="float:right;"><i class="fa fa-angle-left"></i> Back</a> </div>
            </div>
          </div>
          <hr class="m-t-0">
          <form class="form-horizontal" action="{{route('admin.faq.update', $faq->id )}}" method="POST" enctype="multipart/form-data" role="form">
            {{csrf_field()}}
            <input type="hidden" name="_method" value="PATCH">
            <div class="card-body bg-light">
              <div class="row">
                <div class="col-12">
                  <div class="form-group">
                    <label for="inputEmail3" class="control-label col-form-label">Question</label>
                    <input class="form-control" type="text" value="{{ $faq->question }}" name="question" required id="title" placeholder="Question">
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-group">
                    <label for="inputEmail3" class="control-label col-form-label">Answer</label>
                    <textarea class="form-control mymce" id="inputEmail3" rows="5" name="answer">{{ $faq->answer }}</textarea>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group m-b-0 text-right">
                <button type="submit" class="btn btn-info waves-effect waves-light">Save</button>
                <a href="{{route('admin.faq.index')}}" class="btn btn-dark waves-effect waves-light deactive_button">Cancel</a> </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection