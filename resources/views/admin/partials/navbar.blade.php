<!--
=========================================================
* Material Dashboard 2 - v3.0.2
=========================================================

* Product Page: https://www.creative-tim.com/product/material-dashboard
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="{{asset('img/apple-icon.png')}}">
  <link rel="icon" type="image/png" href="{{asset('img/favicon.png')}}">
  <title>@yield('section', 'Admain Dashboard')</title>
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- CSS Files -->
  <link id="pagestyle" href="{{asset('css/material-dashboard.css?v=3.0.2')}}" rel="stylesheet" />
  <!--   Imported CSS Files    -->
  @yield('css')

</head>

<body class="g-sidenav-show  bg-gray-200">
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header d-flex justify-content-center">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand mx-auto text-white" href="" target="_blank">
        <h3 class="text-white">Menu</h3>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse h-auto w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a id="navdas" class="nav-link text-white" href="{{route('dashboard')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10 mx-auto">Dashboard</i>
            </div>
          </a>
        </li>
        <li class="nav-item">
          <a id="navtag" class="nav-link text-white " href="{{route('tags')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">Tags</i>
            </div>
          </a>
        </li>
        <li class="nav-item">
          <a id="navcat" class="nav-link text-white " href="{{route('categories')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">Categories</i>
            </div>
          </a>
        </li>
        <li class="nav-item">
          <a id="navcol" class="nav-link text-white" href="{{route('colors')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10 mx-auto">Colors</i>
            </div>
          </a>
        </li>
        <li class="nav-item">
          <a id="navuse" class="nav-link text-white " href="{{route('users')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">Users</i>
            </div>
          </a>
        </li>
        <li class="nav-item">
          <a id="navpro" class="nav-link text-white " href="{{route('products')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">Products</i>
            </div>
          </a>
        </li>
      </ul>
    </div>
  </aside>
  <main class="main-content max-height-vh-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3 d-flex justify-content-between">
        <nav aria-label="breadcrumb">
          <!--- Breadcrumb -->
          @yield('breadcrumb')
        </nav>
        <div class="mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <ul class="navbar-nav  justify-content-end">
            <!-- Language DropDown Mcamara Library For Arabic and English -->
            <li class="nav-item dropdown">
              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                  @if (session('locale') == 'en')
                      <img src="{{ asset('img/Flags/united-states.svg') }}" alt="English" width="20px">
                  @else
                      <img src="{{ asset('img/Flags/egypt.svg') }}" alt="العربية" width="20px">
                  @endif
                  <span class="caret"></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" rel="alternate" hreflang="ar" href="{{ LaravelLocalization::getLocalizedURL('ar', null, [], true) }}">
                      العربية <img src="{{ asset('img/Flags/egypt.svg') }}" alt="العربية" width="20px">
                  </a>
                  <a class="dropdown-item" rel="alternate" hreflang="en" href="{{ LaravelLocalization::getLocalizedURL('en', null, [], true) }}">
                      English <img src="{{ asset('img/Flags/united-states.svg') }}" alt="English" width="20px">
                  </a>
              </div>
          </li>

          <!-- User Authentication & Settings & Panel -->
          <li class="nav-item dropdown">
              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                  @if(Auth::check())
                      <img src="{{ asset('img/Navbar/user-svgrepo-com (2).svg') }}" alt="User" width="20px">
                      {{ Auth::user()->name }} 
                  @else
                      <img src="{{ asset('img/Navbar/user-svgrepo-com (2).svg') }}" alt="User" width="20px">
                  @endif
                  <span class="caret"></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                  @guest
                      @if (Route::has('login'))
                          <a class="dropdown-item" href="{{ route('login') }}">{{ __('auth.Login') }}</a>
                      @endif

                      @if (Route::has('register'))
                          <a class="dropdown-item" href="{{ route('register') }}">{{ __('auth.Register') }}</a>
                      @endif
                  @else
                      <a class="dropdown-item" href="{{ route('logout') }}"
                          onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
                          {{ __('auth.Logout') }}
                      </a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                      </form>
                  @endguest
              </div>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="">
                  <img src="{{ asset('img/Navbar/4.svg') }}" alt="Search" width="20px">
              </a>
          </li>
          <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
            <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
              <div class="sidenav-toggler-inner">
                <i class="sidenav-toggler-line"></i>
                <i class="sidenav-toggler-line"></i>
                <i class="sidenav-toggler-line"></i>
              </div>
            </a>
          </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    
    <!-- Main Content -->
    
    @yield('content')

    <!-- End Main Content -->

  </main>
  <div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="material-icons py-2">
        <img src="{{ asset('img/Dashboard/settings-gear-svgrepo-com.svg') }}" alt="Setting" width="30px">
      </i>
    </a>
    <div class="card shadow-lg">
      <div class="card-header pb-0 pt-3">
        <div class="float-end mt-4 mx-auto">
          <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
            <i class="material-icons">clear</i>
          </button>
        </div>
        <!-- End Toggle Button -->
      </div>
      <hr class="horizontal dark my-1">
      <div class="card-body pt-sm-3 pt-0">
        <!-- Sidebar Backgrounds -->
        <div>
          <h6 class="mb-0">Sidebar Colors</h6>
        </div>
        <a href="javascript:void(0)" class="switch-trigger background-color">
          <div class="badge-colors my-2 text-start">
            <span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
          </div>
        </a>
        <!-- Sidenav Type -->
        <div class="mt-3">
          <h6 class="mb-0">Side NavBar</h6>
        </div>
        <div class="d-flex">
          <button class="btn bg-gradient-dark px-3 mb-2 active" data-class="bg-gradient-dark" onclick="sidebarType(this)">Dark</button>
          <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-transparent" onclick="sidebarType(this)">Transparent</button>
          <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-white" onclick="sidebarType(this)">White</button>
        </div>
        <!-- Navbar Fixed -->
        <hr class="horizontal dark my-3">
        <div class="mt-2 d-flex">
          <h6 class="mb-0">Light / Dark</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
          </div>
        </div>
      </div>
    </div>
  </div>
    <!--   Core JS Files   -->
  <script src="{{asset('js/bootstrap.min.js')}}"></script>
  <script src="{{asset('js/perfect-scrollbar.min.js')}}"></script>
  <script src="{{asset('js/material-dashboard.min.js?v=3.0.2')}}"></script>
  <script src="{{asset('/js/perfect-scrollbar.min.js')}}"></script>
  <!--   Imported JS Files    -->
  @yield('scripts')

</body>

</html>