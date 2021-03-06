<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" 
    @if (app()->getLocale() == 'ar')
        dir="rtl"
    @else
        dir="ltr"
    @endif
>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    @yield('css')
</head>
<body>

    <!--- Navbar -->
    <div class="d-none">
        @if (session('locale') == 'en')
            {{$RSN = 'ms'}}
            {{$LSN = 'me'}}
        @else
            {{$RSN = 'me'}}
            {{$LSN = 'ms'}}        
        @endif
    </div>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm fixed-top">
            <div class="container">
                
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav {{$LSN}}-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/">{{ __('Home') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/products">{{ __('Products') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">{{ __('Contact') }}</a>
                        </li>
                    </ul>

                    <!-- middel side of navbar -->
                    <ul class="navbar-nav mx-auto">
                        <a class="navbar-brand" href="{{ url('/') }}">
                            {{ config('app.name', 'Laravel') }}
                        </a>
                    </ul>

                    <!-- Right Side Of Navbar -->

                    <ul class="navbar-nav {{$RSN}}-auto">

                        <!-- Language DropDown Mcamara Library For Arabic and English -->
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                @if (session('locale') == 'en')
                                   <img src="{{ asset('img/Flags/united-states.svg') }}" alt="English" width="20px">
                                @else
                                   <img src="{{ asset('img/Flags/egypt.svg') }}" alt="??????????????" width="20px">
                                @endif
                                <span class="caret"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" rel="alternate" hreflang="ar" href="{{ LaravelLocalization::getLocalizedURL('ar', null, [], true) }}">
                                    ?????????????? <img src="{{ asset('img/Flags/egypt.svg') }}" alt="??????????????" width="20px">
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
                        <li class="nav-item">
                            <a class="nav-link" href="/cart">
                                <img src="{{ asset('img/Navbar/shopping-bag-svgrepo-com (4).svg') }}" alt="Cart" width="20px">
                                <span class="badge badge-pill badge-danger"></span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">
                                <img src="{{ asset('img/Navbar/heart-svgrepo-com (3).svg') }}" alt="Wishlist" width="20px">
                                <span class="badge badge-pill badge-danger"></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    
        <!-- Footer -->
        <footer class="container-fluid bg-dark text-white py-3">
            <div class="container-fluid">
                <div class="row d-flex justify-content-between">
                    <div class="col-md mb-3">
                        <div class="text-center">
                            <h3 class="mb-4">
                                About Us
                            </h3> 
                            <p>
                                A Syrian-Egyptian company established in Syria in 1990 and opened its factory in Egypt in 2018.
                                MISSLEA was founded by a group of like-minded fashion devotees, determined to deliver style to shoppers worldwide.
                            </p>
                        </div>                   
                    </div>
                    <div class="col-md text-center mb-3">
                        <h3 class="text-center mb-4">
                            Services
                        </h3> 
                        <p><a href="#" class="text-decoration-none text-white">Home</a></p>
                        <p><a href="#" class="text-decoration-none text-white">About</a></p>
                        <p><a href="#" class="text-decoration-none text-white">Contact</a></p>
                    </div>
                    <div class="col-md text-center mb-3">
                        <h3 class="text-center mb-4">
                            Social Media
                        </h3> 
                        <div class="mx-auto d-flex justify-content-around">
                            <a href="https://www.facebook.com/missleaq" class="text-decoration-none mx-2">
                                <img src="{{ asset('img/Footer/icons8-facebook (1).svg') }}" alt="Facebook" width="40px">
                            </a>
                            <a href="#" class="text-decoration-none mx-2">
                                <img src="{{ asset('img/Footer/icons8-instagram.svg') }}" alt="Instagram" width="40px">
                            </a>
                            <a href="#" class="text-decoration-none mx-2">
                                <img src="{{ asset('img/Footer/icons8-facebook-messenger (1).svg') }}" alt="Messenger" width="40px">
                            </a>
                            <a href="#" class="text-decoration-none mx-2">
                                <img src="{{ asset('img/Footer/icons8-whatsapp (1).svg') }}" alt="Whatsapp" width="40px">
                            </a>
                        </div>
                    </div>
                    <div class="col-md text-center mb-3">
                        <h3 class="text-center mb-4">
                            Services
                        </h3> 
                        <p><a href="#" class="text-decoration-none text-white">Home</a></p>
                        <p><a href="#" class="text-decoration-none text-white">About</a></p>
                        <p><a href="#" class="text-decoration-none text-white">Contact</a></p>
                    </div>
                    <div class="col-md text-center mb-3">
                        <h3 class="mb-4">
                            Social Media
                        </h3> 
                        <a href="#" class="text-decoration-none text-white m-2 d-block">
                            <img src="{{ asset('img/Footer/icons8-google-mobile.svg') }}" alt="Telephone" width="20px"> +201101519377
                        </a>
                        <a href="#" class="text-decoration-none text-white m-2 d-block">
                            <img src="{{ asset('img/Footer/icons8-gmail-logo.svg') }}" alt="E-mail" width="20px"> missleaq1@gmail.com
                        </a>
                        <a href="#" class="text-decoration-none text-white m-2 d-block">
                            <img src="{{ asset('img/Footer/icons8-google-maps.svg') }}" alt="Location" width="20px"> ?????????????? - ?????????? ?????? - ???????? .....
                        </a>
                    </div>
                </div>
            </div>
        </footer>

    </div>

    <!-- Scripts -->
    @yield('scripts')
    <!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/627fd71d7b967b11798f5bb2/1g31m0jc9';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
    <!--End of Tawk.to Script-->

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>
