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
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav {{$LSN}}-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="">{{ __('Home') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">{{ __('About') }}</a>
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
                    <li class="nav-item">
                        <a class="nav-link" href="">
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