@extends('layouts.app')

@section('content')
<div id="app">
        {{--<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
            <!-- <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list"
                viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5" />
            </svg> -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
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
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('bloodeducation')}}">{{ __('Blood Education') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('donationcamp')}}">{{ __('Blood Donation Camp') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('bloodavailability')}}">{{ __('Blood Availability') }}</a></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('modification')}}">{{ __('Register for donation') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/') }}">{{ __('About Us') }}</a>
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
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('home') }}">
                                        {{ __('Profile') }}
                                    </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>--}}
        <h1>Welcome to Red-Lifestream</h1>
<!-- <div class="card-body p-4 p-md-5">
    <div class="row justify-content-center align-items-center h-50">
        <div class="col-md-6 mb-4">
        <h3 class="mb-4 pb-2 pb-md-0 mb-md-5"><a href="{{url('/')}}">Home</a></h3> 
        </div>
        
        <div class="col-md-6 mb-4">
        <h3 class="mb-4 pb-2 pb-md-0 mb-md-5"><a href="{{route('bloodbank')}}">Blood Bank</a></h3>
        </div>
    </div>
    <div class="row justify-content-center align-items-center h-50">
        <div class="col-md-6 mb-4">
        <h3 class="mb-4 pb-2 pb-md-0 mb-md-5"><a href="{{route('donationcamp')}}">Blood Donation Camp</a></h3>
        </div>
        <div class="col-md-6 mb-4">
        <h3 class="mb-4 pb-2 pb-md-0 mb-md-5"><a href="{{route('bloodeducation')}}">Blood Education</a></h3>
        </div>
    </div>
    <div class="row justify-content-center align-items-center h-50">
        <div class="col-md-6 mb-4">
        <h3 class="mb-4 pb-2 pb-md-0 mb-md-5"><a href="{{route('hospitalrequest')}}">Blood Request</a></h3>
        </div>-
        <div class="col-md-6 mb-4">
        <h3 class="mb-4 pb-2 pb-md-0 mb-md-5"><a href="{{route('auth/donoregister')}}">Donor Registration</a></h3>
        </div>
    </div>
</div> -->
<div class="card-body p-4 p-md-5">
<h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Blood Education</h3>
<div class="card-body p-4 p-md-5">
    <div class="row justify-content-center align-items-center h-50">

        <div class="col-md-6 mb-4">
        <h5 class="mb-4 pb-2 pb-md-0 mb-md-5">Red Blood Cells</h5> 
        <table>
            <tr>
                <td style="width: 250px;"><img src="#"></td>
                <td style="width: 350px;"><p>Lorem ipsum dolor sit amet. Et cupiditate error qui voluptatibus sunt et voluptatem voluptate.
             Aut aliquam exercitationem quo debitis voluptas hic porro quidem ut voluptatem nisi ab natus 
             doloremque non quam officia id vero numquam.</p></td>
            </tr>
        </table>
        </div>

        <div class="col-md-6 mb-4">
        <h5 class="mb-4 pb-2 pb-md-0 mb-md-5">Platelets</h5>
        <table>
            <tr>
                <td style="width: 250px;"><img src="#"></td>
                <td style="width: 350px;"><p>Lorem ipsum dolor sit amet. Et cupiditate error qui voluptatibus sunt et voluptatem voluptate.
             Aut aliquam exercitationem quo debitis voluptas hic porro quidem ut voluptatem nisi ab natus 
             doloremque non quam officia id vero numquam.</p></td>
            </tr>
        </table>
        </div>
        
    </div>

    <div class="row justify-content-center align-items-center h-50">

        <div class="col-md-6 mb-4">
        <h5 class="mb-4 pb-2 pb-md-0 mb-md-5">Plasma</h5>
        <table>
            <tr>
                <td style="width: 250px;"><img src="#"></td>
                <td style="width: 350px;"><p>Lorem ipsum dolor sit amet. Et cupiditate error qui voluptatibus sunt et voluptatem voluptate.
             Aut aliquam exercitationem quo debitis voluptas hic porro quidem ut voluptatem nisi ab natus 
             doloremque non quam officia id vero numquam.</p></td>
            </tr>
        </table>
        </div>

        <div class="col-md-6 mb-4">
        <h5 class="mb-4 pb-2 pb-md-0 mb-md-5">White Blood Cells</h5>
        <table>
            <tr>
                <td style="width: 250px;"><img src="#"></td>
                <td style="width: 350px;"><p>Lorem ipsum dolor sit amet. Et cupiditate error qui voluptatibus sunt et voluptatem voluptate.
             Aut aliquam exercitationem quo debitis voluptas hic porro quidem ut voluptatem nisi ab natus 
             doloremque non quam officia id vero numquam.</p></td>
            </tr>
        </table>
        </div>
    </div>

</div>
<h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Blood Donation Camp</h3>
<h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Blood Availability</h3>
<h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Be a part of our Red-Lifestream</h3>
<div class="row">
    <div class="col-md-6 mb-4" align="center">
    <a href="{{route('auth/donoregister')}}"><button class="btn btn-primary">
        {{ __('Register as a donor') }}
        </button></a>
    </div>
    <div class="col-md-6 mb-4" align="center">
    <a href="{{route('register')}}"><button class="btn btn-primary">
        {{ __('Register as a hospital/Bloodbank staff') }}
        </button></a>
    </div>
    </div>
<h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Gallery</h3>
<h3 class="mb-4 pb-2 pb-md-0 mb-md-5">About Us</h3>
<p>
Lorem ipsum dolor sit amet. Et iusto sapiente est natus quidem ea rerum dolor ea sunt harum 
non recusandae similique. Sit laborum dolor rem dolores nostrum non optio voluptatem ex velit 
voluptas aut laborum nihil id dolorem deleniti cum aspernatur veritatis.
</p>
<br><br>
<h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Contact Us</h3>
<div class="container">
<div class="row">
    <div class="col-md-6 mb-4">
        <p>
        Lorem ipsum dolor sit amet. Et iusto sapiente est natus quidem ea rerum dolor ea sunt harum
        non recusandae similique. Sit laborum dolor rem dolores nostrum non optio voluptatem ex velit
        voluptas aut laborum nihil id dolorem deleniti cum aspernatur veritatis.
        </p>
    </div>
    <div class="col-md-6 mb-4">
        <form class="book-form">
            <!-- <h3>Book an Appointment</h3> -->
            <div class="row align-items-center">
                <div class="mb-3 mb-md-4 col-md-6">
                    <input type="text" class="form-control" placeholder="First name">
                </div>
                <div class="mb-3 mb-md-4 col-md-6">
                    <input type="text" class="form-control" placeholder="Last name">
                </div>
                <div class="mb-3 mb-md-4 col-md-12">
                    <input type="email" class="form-control" placeholder="Email">
                </div>
                <div class="mb-3 mb-md-4 col-md-12">
                    <div class="form-control-wrap">
                        <input type="text" id="cf-4" placeholder="what can we help you with"
                            class="form-control datepicker px-3">
                        <span class="icon icon-date_range"></span>
                    </div>
                </div>
                <div class="col-md-12">
                    <input type="submit" value="Submit" class="btn btn-primary">
                </div>
            </div>
    
        </form>
    </div>
</div>
</div>
</div>
    </div>
@endsection





