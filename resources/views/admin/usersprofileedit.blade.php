@extends('admin.partials.navbar')
@section('breadcrumb')
<ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Users</li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">{{$profile->name}}</li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Edit Profile</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Edit Profile</h6>
@endsection
@section('content')
<div class="container-xl px-4 mt-4">
                <!-- Account details card-->
                <div class="card mb-4">
                    <div class="card-header">Account Details</div>
                    <div class="card-body">
                      <div class="m-2">
                        <form action="/users/profile/update/{{$profile->id}}" method="POST" enctype="multipart/form-data">
                          @csrf  
                          <!-- Profile picture image-->
                            <img class="img-account-profile rounded-circle mb-2" src="{{$profile->avatar}}" alt="Avatar" width="100px">
                            <!-- Profile picture help block-->
                            <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>
                              <!-- Profile picture upload button-->
                              <div class="custom-file">
                                <div class="input-group">
                                    <span class="input-group-btn">
                                      <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                                        <i class="fa fa-picture-o"></i> Choose Product Picture
                                      </a>
                                    </span>
                                    <input id="thumbnail" class="form-control mx-2" type="text" name="avatar" value="{{$profile->avatar}}">
                                  </div>
                                  <img id="holder" style="margin-top:15px;max-height:100px;">
                              </div>
                            </div>
                            <!-- Form Group (username)-->
                            <div class="mb-3">
                                <label class="small mb-1" for="inputUsername">User Name</label>
                                <input class="form-control" name="name" id="inputUsername" type="text" placeholder="Enter your Full Name" value="{{$profile->name}}">
                            </div>
                            <!-- Form Row-->
                            <div class="row gx-3 mb-3">
                                <!-- Form Group (Email)-->
                                <div class="col-md-6 mb-3">
                                    <label class="small mb-1" for="inputEmail">Email Address</label>
                                    <input class="form-control" name="email" id="inputEmail" type="text" placeholder="Enter your Email" value="{{$profile->email}}">
                                </div>
                                <!-- Form Group (Mobile)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputMobile">Mobile</label>
                                    <input class="form-control" id="inputMobile" name="phone" type="number" placeholder="Enter your Mobile Number" value="{{$profile->phone}}">
                                </div>
                            </div>
                            <!-- Form Row        -->
                            <div class="row gx-3 mb-3">
                                <!-- Form Group (Address)-->
                                <div class="col-md-6 mb-3">
                                    <label class="small mb-1" for="inputAdress">Address</label>
                                    <input class="form-control" id="inputAdress" name="address" type="text" placeholder="Enter your Address" value="{{$profile->address}}">
                                </div>
                                <!-- Form Group (Description)-->
                                <div class="col-md-6 mb-3">
                                    <label class="small mb-1" for="inputDescription">Description</label>
                                    <textarea class="form-control" id="inputDescription" name="description" type="text" placeholder="Write about your self">{{$profile->description ?? ""}}</textarea>
                                </div>
                            </div>
                            <!-- Save changes button-->
                            <button class="btn btn-primary mb-3" type="submit">Save changes</button>
                        </form>
                      </div>
                    </div>
            </div>
        </div>
    <!-- End Main Content -->
  </div>
@endsection
@section('scripts') 
  <script src="{{asset('js/jquery.min.js')}}"></script>
  <script>
    $(document).ready(function() {
        $('.js-example-basic-multiple').select2();
    });
    </script>
    <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
    <script>
     $('#lfm').filemanager('image');
     var route_prefix = "/laravel-filemanager";
     $('#lfm').filemanager('image', {prefix: route_prefix});
    </script>
@endsection