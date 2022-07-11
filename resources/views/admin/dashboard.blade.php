@extends('admin.partials.navbar')
@section('breadcrumb')
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Dashboard</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Dashboard</h6>
@endsection
@section('content')
<div class="container-fluid py-4">
      <div class="row">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4 mt-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                <img src="{{asset('img/Dashboard/tags.svg')}}" class="p-2" alt="Tags">
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">Tags</p>
                <h4 class="mb-0">{{App\Models\Tag::count()}}</h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
              <a href="{{route('tags')}}" class="text-info">View more <i class="fas fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4 mt-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
                <img src="{{asset('img/Dashboard/category.svg')}}" class="p-2" alt="Tags">
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">Category</p>
                <h4 class="mb-0">{{App\Models\Category::count()}}</h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
              <a href="{{route('categories')}}" class="text-info">View more <i class="fas fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4 mt-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-secondary shadow-info text-center border-radius-xl mt-n4 position-absolute">
                <img src="{{asset('img/Dashboard/color-palette-paint-svgrepo-com.svg')}}" class="p-2" alt="Tags">
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">Colors</p>
                <h4 class="mb-0">{{App\Models\Color::count()}}</h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
              <a href="{{route('colors')}}" class="text-info">View more <i class="fas fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4 mt-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
                <img src="{{asset('img/Dashboard/avatar-user-svgrepo-com.svg')}}" class="p-2" alt="Tags">
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">Users</p>
                <!-- Number of users  -->
                <h4 class="mb-0">{{App\Models\Profile::count()}}</h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
              <a href="{{route('users')}}" class="text-info">View more <i class="fas fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4 mt-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
                <img src="{{asset('img/Dashboard/dress-svgrepo-com.svg')}}" class="p-2" alt="Tags">
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">Products</p>
                <h4 class="mb-0">{{App\Models\Product::count()}}</h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
              <a href="{{route('products')}}" class="text-info">View more <i class="fas fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
      </div>
@endsection
@section('scripts')
<script>
  var element = document.getElementById("navdas");
  element.classList.add("active");
  element.classList.add("bg-gradient-primary");
</script>
@endsection