@extends('layouts.app')

@section('styles')
<link href="{{ asset('styles/Home.css') }}" rel="stylesheet">
@endsection

@section('content')
<div id="app">
    <div class="home">
        <header class="home-header">
            <div class="image-container">
                <img src="{{asset('../images/Home.jpg')}}" alt="Home Image" class="home" />
                <div class="overlay-text">
                    <h1 class="black-text">Welcome to </h1>
                    <h1 class="red-text">Red-LifeStream!</h1>
                </div>
            </div>
        </header>

    
        <div class="d-flex justify-content-center mb-4">
            <div class="grid-item" onclick="window.location.href='/emergencySearch'">
                <img src="{{asset('../images/bloodavailability.jpg')}}" alt="Blood Availability" />
                <div class="overlay">
                    <h2>Emergency Search</h2>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center mb-4">
            <div class="grid-item" onclick="window.location.href='/education'">
                <img src="{{asset('../images/bloodeducation.jpg')}}" alt="Blood Education" />
                <div class="overlay">
                    <h2>Blood Education</h2>
                </div>
            </div>
        </div>
  

        <h1 class="title">Be a part of our Red-Lifestream</h1>

        <div class="stats-container">
            <div class="details-card">
                <div class="card-content">
                    <div class="card-icon">❤️</div>
                    <div class="card-number">400+</div>
                    <div class="card-label">Registered Donors</div>
                </div>
            </div>
            <div class="details-card">
                <div class="card-content">
                    <div class="card-icon">🏥</div>
                    <div class="card-number">50+</div>
                    <div class="card-label">Registered Hospitals</div>
                </div>
            </div>
            <div class="details-card">
                <div class="card-content">
                    <div class="card-icon">🩸</div>
                    <div class="card-number">50+</div>
                    <div class="card-label">Registered Bloodbanks</div>
                </div>
            </div>
        </div>

        
            <div class="stats-container">
                <div class="" >
                    <a href="{{route('register')}}"><button class="btn btn-primary">
                            {{ __('Register as a donor') }}
                        </button></a>
                </div>
                <div class="" >
                    <a href="{{route('register')}}"><button class="btn btn-primary">
                            {{ __('Register as a hospital/Bloodbank staff') }}
                        </button></a>
                </div>
            </div>


            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5" id="camp">Blood Donation Camp</h3>
            @if ($camps === null)
            <p>No Donation camps...</p>
            @else
            <style>
                .swiper {
                    position: relative;
                    padding: 20px 40px;
                    /* space for arrows */
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
                    color: #000;
                    /* Arrow color */
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

            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5" id="gallery">Gallery</h3>
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
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5" id="contact">Contact Us</h3>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <p>
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

                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
@endsection