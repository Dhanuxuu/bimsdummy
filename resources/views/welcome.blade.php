@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/Home.css') }}">
<header class="home-header">
    <div class="image-container">
        <div class="overlay-text">
            <h1 class="black-text">Welcome to </h1>
            <h1 class="red-text">Red-LifeStream!</h1>
        </div>
    </div>
</header>
<div id="app" style="padding: 16px;margin-top: 30px;">
    <h1>Welcome to Red-Lifestream</h1>
    <div class="card-body p-4 p-md-5">
        
        <h3 class="mb-4 pb-2 pb-md-0 mb-md-5" id="camp">Blood Donation Camp</h3>
        @if ($camps===null)
        <p>No Donation camps...</p>
        @else
        <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <!-- @for ($i = 1; $i <= 9; $i++) 
            <div class="swiper-slide">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                <h5 class="card-title">Donation Camp {{ $i }}</h5>
                <h6 class="card-subtitle mb-2 text-muted">Subtitle {{ $i }}</h6>
                <p class="card-text">Example text for card {{ $i }}.</p>
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
                </div>
            </div>
            </div>
            @endfor -->
            @foreach ($camps as $camp)
            <div class="swiper-slide">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                <h5 class="card-title">Donation Camp {{ $camp->id }}</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{ $camp->location }}</h6>
                <p class="card-text">{{ $camp->s_date}}</p>
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
                </div>
            </div>
            </div>
            @endforeach
        </div>

        <!-- Navigation buttons -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

        <!-- Pagination dots (optional) -->
        <!-- <div class="swiper-pagination"></div> -->
        </div>
        @endif
        
        <br><br>

        <h3 class="mb-4 pb-2 pb-md-0 mb-md-5" id="availability">Blood Availability</h3>
        <div class="grid-item">
            <a href="#">
                <img src="{{ asset('images/BloodAvailability.jpg') }}" alt="Blood Availability">
                <div class="overlay">
                    <h2>Blood Availability</h2>
                </div>
            </a>
        </div>
        <h3 class="mb-4 pb-2 pb-md-0 mb-md-5" id="join">Be a part of our Red-Lifestream</h3>
        <div class="row">
            <div class="col-md-6 mb-4" align="center">
                <a href="{{route('register')}}"><button class="btn btn-primary">
                        {{ __('Register as a donor') }}
                    </button></a>
            </div>
            <div class="col-md-6 mb-4" align="center">
                <a href="{{route('register')}}"><button class="btn btn-primary">
                        {{ __('Register as a hospital/Bloodbank staff') }}
                    </button></a>
            </div>
        </div>
        <h3 class="mb-4 pb-2 pb-md-0 mb-md-5" id="gallery">Gallery</h3>

        <h3 class="mb-4 pb-2 pb-md-0 mb-md-5" id="bloodeducation">Blood Education</h3>
        <div class="card-body p-4 p-md-5">
            <div class="row justify-content-center align-items-center h-50">
    
                <div class="col-md-6 mb-4">
                    <h5 class="mb-4 pb-2 pb-md-0 mb-md-5">Red Blood Cells</h5>
                    <table>
                        <tr>
                            <td style="width: 250px;"><img src="#"></td>
                            <td style="width: 350px;">
                                <p>Lorem ipsum dolor sit amet. Et cupiditate error qui voluptatibus sunt et voluptatem
                                    voluptate.
                                    Aut aliquam exercitationem quo debitis voluptas hic porro quidem ut voluptatem nisi ab
                                    natus
                                    doloremque non quam officia id vero numquam.</p>
                            </td>
                        </tr>
                    </table>
                </div>
    
                <div class="col-md-6 mb-4">
                    <h5 class="mb-4 pb-2 pb-md-0 mb-md-5">Platelets</h5>
                    <table>
                        <tr>
                            <td style="width: 250px;"><img src="#"></td>
                            <td style="width: 350px;">
                                <p>Lorem ipsum dolor sit amet. Et cupiditate error qui voluptatibus sunt et voluptatem
                                    voluptate.
                                    Aut aliquam exercitationem quo debitis voluptas hic porro quidem ut voluptatem nisi ab
                                    natus
                                    doloremque non quam officia id vero numquam.</p>
                            </td>
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
                            <td style="width: 350px;">
                                <p>Lorem ipsum dolor sit amet. Et cupiditate error qui voluptatibus sunt et voluptatem
                                    voluptate.
                                    Aut aliquam exercitationem quo debitis voluptas hic porro quidem ut voluptatem nisi ab
                                    natus
                                    doloremque non quam officia id vero numquam.</p>
                            </td>
                        </tr>
                    </table>
                </div>
    
                <div class="col-md-6 mb-4">
                    <h5 class="mb-4 pb-2 pb-md-0 mb-md-5">White Blood Cells</h5>
                    <table>
                        <tr>
                            <td style="width: 250px;"><img src="#"></td>
                            <td style="width: 350px;">
                                <p>Lorem ipsum dolor sit amet. Et cupiditate error qui voluptatibus sunt et voluptatem
                                    voluptate.
                                    Aut aliquam exercitationem quo debitis voluptas hic porro quidem ut voluptatem nisi ab
                                    natus
                                    doloremque non quam officia id vero numquam.</p>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
    
        </div>
        <h3 class="mb-4 pb-2 pb-md-0 mb-md-5" id="camp">Blood Donation Camp</h3>
        @if ($camps === null)
            <p>No Donation camps...</p>
        @else
            <style>
                .swiper {
                    position: relative;
                    padding: 20px 40px; /* space for arrows */
                }

                .swiper-slide {
                    display: flex;
                    justify-content: center;
                }

                .card {
                    min-width: 18rem;
                }

                .swiper-button-next,
                .swiper-button-prev {
                    color: #000; /* Arrow color */
                    z-index: 10;
                }
            </style>

            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    @foreach ($camps as $camp)
                        <div class="swiper-slide">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Donation Camp {{ $camp->id }}</h5>
                                    <h6 class="card-subtitle mb-2 text-muted">{{ $camp->location }}</h6>
                                    <p class="card-text">{{ $camp->s_date }}</p>
                                    <a href="#" class="card-link">Card link</a>
                                    <a href="#" class="card-link">Another link</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Navigation arrows -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>

            <script>
                const swiper = new Swiper(".mySwiper", {
                    slidesPerView: 3,
                    spaceBetween: 30,
                    loop: true,
                    navigation: {
                        nextEl: ".swiper-button-next",
                        prevEl: ".swiper-button-prev",
                    },
                });
            </script>
        @endif

        
        <br><br>

        <h3 class="mb-4 pb-2 pb-md-0 mb-md-5" id="about">About Us</h3>
        <p>
            Lorem ipsum dolor sit amet. Et iusto sapiente est natus quidem ea rerum dolor ea sunt harum
            non recusandae similique. Sit laborum dolor rem dolores nostrum non optio voluptatem ex velit
            voluptas aut laborum nihil id dolorem deleniti cum aspernatur veritatis.
            Lorem ipsum dolor sit amet. Et iusto sapiente est natus quidem ea rerum dolor ea sunt harum
            non recusandae similique. Sit laborum dolor rem dolores nostrum non optio voluptatem ex velit
            voluptas aut laborum nihil id dolorem deleniti cum aspernatur veritatis.
            Lorem ipsum dolor sit amet. Et iusto sapiente est natus quidem ea rerum dolor ea sunt harum
            non recusandae similique. Sit laborum dolor rem dolores nostrum non optio voluptatem ex velit
            voluptas aut laborum nihil id dolorem deleniti cum aspernatur veritatis.
            Lorem ipsum dolor sit amet. Et iusto sapiente est natus quidem ea rerum dolor ea sunt harum
            non recusandae similique. Sit laborum dolor rem dolores nostrum non optio voluptatem ex velit
            voluptas aut laborum nihil id dolorem deleniti cum aspernatur veritatis.
        </p>
        <br><br>
        <div class="faq-section">
        <h3 class="mb-4 pb-2 pb-md-0 mb-md-5" id="contact" style="color: black;">Contact Us</h3>
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-4">
                    <p style="color: black;">
                        Lorem ipsum dolor sit amet. Et iusto sapiente est natus quidem ea rerum dolor ea sunt harum
                        non recusandae similique. Sit laborum dolor rem dolores nostrum non optio voluptatem ex velit
                        voluptas aut laborum nihil id dolorem deleniti cum aspernatur veritatis.
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
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>

    @endsection