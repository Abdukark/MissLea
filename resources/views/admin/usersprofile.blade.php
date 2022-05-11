@extends('admin.partials.navbar')
@section('breadcrumb')
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Users</li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">{{$profile->name}}</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Profile</h6>
@endsection
@section('content')
<div class="container py-5">
        <div class="row">
          <div class="col-lg-4">
            <div class="card mb-4">
              <div class="card-body text-center">
                <img src="{{$profile->avatar}}" alt="avatar"
                  class="rounded-circle img-fluid" style="width: 150px;">
                <h5 class="my-3">{{$profile->name}}</h5>
                <div class="d-flex justify-content-center mb-2">
                  <a href="/users/profile/edit/{{$profile->id}}" class="text-white">
                    <button type="button" class="btn btn-primary">
                    Edit
                    </button>
                  </a>  
                  <button type="button" class="btn btn-outline-primary ms-1">Message</button>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-8">
            <div class="card mb-4">
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-3">
                    <p class="mb-0">Full Name</p>
                  </div>
                  <div class="col-sm-9">
                    <p class="text-muted mb-0">{{$profile->name}}</p>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-sm-3">
                    <p class="mb-0">Email</p>
                  </div>
                  <div class="col-sm-9">
                    <p class="text-muted mb-0">{{$profile->email}}</p>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-sm-3">
                    <p class="mb-0">Mobile</p>
                  </div>
                  <div class="col-sm-9">
                    <p class="text-muted mb-0">{{$profile->phone}}</p>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-sm-3">
                    <p class="mb-0">Address</p>
                  </div>
                  <div class="col-sm-9">
                    <p class="text-muted mb-0">{{$profile->address}}</p>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-sm-3">
                    <p class="mb-0">Description</p>
                  </div>
                  <div class="col-sm-9">
                    <p class="text-muted mb-0">{{$profile->description}}</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    <!-- End Main Content -->
  </div>
@endsection
@section('scripts')
  <script src="{{asset('js/jquery.min.js')}}"></script>
@endsection