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
      <div class="col-lg-12">
        <div class="card bg-light">
          <div class="card-body">
            <div class="d-flex m-b-30 no-block">
              <h5 class="card-title m-b-0 align-self-center">View Faqs</h5>
              <div class="ml-auto">
                <div class="dl">
                  <div class="col-3 align-self-center"> <a class="btn btn-primary" href="{{ route('admin.faq.create') }}">Add Faq</a> </div>
                </div>
              </div>
            </div>
            <div class="table-responsive">
              <table class="table bg-white table-bordered nowrap display file_export ">
                <thead>
                  <tr>
                    <th>Sr No.</th>
                    <th>Question</th>
                    <th class="noExport">Actions</th>
                  </tr>
                </thead>
                <tbody>
                
                @foreach($faqs as $index => $faq)
                <tr>
                  <td>{{ $index + 1 }}</td>
                  <td>{{ $faq->question }}</td>
                  <td><form action="{{ route('admin.faq.destroy', $faq->id) }}" method="POST">
                      {{ csrf_field() }}
                      <input type="hidden" name="_method" value="DELETE">
                      <a href="{{ route('admin.faq.edit', $faq->id) }}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i> Edit</a>
                      <button onclick="return confirm('Are you sure?')" class="btn btn-danger btn-sm"><i class="fa fa-trash-alt"></i> Delete</button>
                    </form></td>
                </tr>
                @endforeach
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