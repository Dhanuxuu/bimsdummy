<!-- This page done -->
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Swiper CSS -->
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('styles/Navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('styles/Footer.css') }}">
    @yield('styles')

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="logo-img">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/')}}">{{ __('Home') }}</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                v-pre>{{ 'Services'}}</a>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="nav-link" href="{{url('/')}}#availability">{{ __('Blood Availability') }}</a>
                                <a class="nav-link" href="{{url('/')}}#camp">{{ __('Blood Donation Camp') }}</a>
                                <a class="nav-link" href="{{url('/')}}#bloodeducation">{{ __('Blood Education') }}</a>
                                <a class="nav-link" href="{{ route('donor.create') }}">{{ __('Register for donation') }}</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                v-pre>{{ 'Who we are'}}</a>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="nav-link" href="{{ url('/') }}#gallery">{{ __('Gallery') }}</a>
                                <a class="nav-link" href="{{ url('/') }}#about">{{ __('About Us') }}</a>
                                <a class="nav-link" href="{{ url('/') }}#contact">{{ __('Contact Us') }}</a>
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Be a part of Red-Lifestream') }}</a>
                            </div>
                        </li>
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                @if (Auth::user()->role == 'admin')
                                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                                    <li class="nav-item dropdown">
                                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                            {{ 'Modifications' }}
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                                            <a class="nav-link" href="{{route('admin.education')}}">{{ __('Update blood education') }}</a>
                                                            <a class="nav-link" href="{{route('admin.gallery')}}">{{ __('Update gallery') }}</a>
                                                            <a class="nav-link" href="{{route('admin.viewUsers')}}">{{ __('Update users') }}</a>
                                                            <a class="nav-link" href="{{url('/')}}">{{ __('analysis') }}</a>
                                                        </div>
                                                    </li>
                                                    <li class="nav-item dropdown">
                                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                            {{ Auth::user()->name }}
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                                            <a class="nav-link" href="{{url('/')}}">{{ __('Admin') }}</a>
                                                            <a class="nav-link" href="{{ route('home') }}">{{ __('Profile') }}</a>
                                                            <a class="nav-link" href="{{ route('logout') }}"
                                                                onclick="event.preventDefault();
                                                                document.getElementById('logout-form').submit();">
                                                                {{ __('Logout') }}
                                                            </a>
                                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                                @csrf
                                                            </form>
                                                        </div>
                                                    </li>
                                    </div>
                                @endif
                    @if (Auth::user()->role == 'donor')
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="nav-link" href="{{url('/')}}">{{ __('Donor') }}</a>
                                    <a class="nav-link" href="{{ route('home') }}">{{ __('Profile') }}</a>
                                    <a class="nav-link" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        </div>
                    @else
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ 'Hospital/Blood Bank' }}
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="nav-link" href="{{ route('hospital.create') }}">{{ __('Register Hospital/Blood Bank') }}</a>
                                    <!-- <a class="nav-link" href="#">{{ __('Update profile') }}</a>
                                    <a class="nav-link" href="#">{{ __('Delete profile') }}</a> -->
                                    <a class="nav-link" href="{{ route('hospital.search') }}">{{ __('Search Hospital/Blood Bank') }}</a>
                                    <a class="nav-link" href="{{ route('hospital.viewbloodreq') }}">{{ __('Request Blood Component') }}</a>
                                    <a class="nav-link" href="{{ route('inventory.home') }}">{{ __('Blood Inventory') }}</a>
                                </div>
                            </li>

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ 'Blood Bank' }}
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('hospital.create') }}">{{ __('Register Blood Bank') }}</a>
                                    <a class="dropdown-item" href="{{ route('hospital.donationcamp') }}">{{ __('Donation Camp Management') }}</a>
                                    <a class="dropdown-item" href="{{ route('hospital.bloodrequpdate') }}">{{ __('Blood Requests') }}</a>
                                    <!-- <a class="dropdown-item" href="#">{{ __('Blood Availability') }}</a> -->
                                    <a class="dropdown-item" href="{{ route('inventory.home') }}">{{ __('Blood Inventory') }}</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="nav-link" href="{{url('/')}}">{{ __('Staff') }}</a>
                                    <a class="nav-link" href="{{ route('home') }}">{{ __('Profile') }}</a>
                                    <a class="nav-link" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                                                                                                                            document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        </div>
                    @endif
                    </li>
                        @endguest
                </ul>
            </div>
    </div>
    </nav>

    <main style="min-height: calc(100vh - 160px);">
        @yield('content')
    </main>

    <footer class="footer">
        <div class="footer-text">
            <p class="copyright">&copy; Designed and Developed by Faculty Of Computing.</p>
        </div>
        <div class="footer-links">
            <a href="#" class="footer-link">Terms & Conditions</a>
            <a href="#" class="footer-link">Privacy Policy</a>
            <a href="#" class="footer-link">Accessibility Statement</a>
            <a href="#" class="footer-link">Last Updated : Jul 21 2024</a>
            <a href="#" class="footer-link">Site Map</a>
        </div>
    </footer>
</div>
</body>

</html>
