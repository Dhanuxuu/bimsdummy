@extends('layouts.app')

@section('styles')
    <link href="{{ asset('styles/Home.css') }}" rel="stylesheet">
    <link href="{{ asset('styles/createaccountform.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
@endsection

@section('content')
    <div id="app">
        <div class="home">
            <header class="home-header">
                <div class="hero-carousel">
                    <div class="swiper hero-swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide hero-slide">
                                <img src="{{asset('../images/Home.jpg')}}" alt="Hero Image 1" />
                                <div class="hero-overlay">
                                    <div class="overlay-text">
                                        <h1 class="black-text">Welcome to </h1>
                                        <h1 class="red-text">Red-LifeStream!</h1>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide hero-slide">
                                <img src="{{asset('../images/BloodBank.jpg')}}" alt="Hero Image 2" />
                                <div class="hero-overlay">
                                    <div class="overlay-text">
                                        <h1 class="black-text">Save Lives</h1>
                                        <h1 class="red-text">Donate Blood</h1>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide hero-slide">
                                <img src="{{asset('../images/BloodDonationCamp.jpg')}}" alt="Hero Image 3" />
                                <div class="hero-overlay">
                                    <div class="overlay-text">
                                        <h1 class="black-text">Join Our</h1>
                                        <h1 class="red-text">Donation Camps</h1>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide hero-slide">
                                <img src="{{asset('../images/BloodEducation.jpg')}}" alt="Hero Image 4" />
                                <div class="hero-overlay">
                                    <div class="overlay-text">
                                        <h1 class="black-text">Learn About</h1>
                                        <h1 class="red-text">Blood Health</h1>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pagination dots -->
                        <div class="swiper-pagination hero-pagination"></div>

                        <!-- 5 Second Timer Bar -->
                        <div class="swiper-timer">
                            <div class="timer-bar"></div>
                        </div>
                    </div>
                </div>
            </header>


            <div class="block">
                <div class="d-flex justify-content-center">
                    <div class="grid-item" onclick="window.location.href='/emergencySearch'"
                        style="width: 42%; height: 300px;">
                        <img src="{{asset('../images/bloodavailability.jpg')}}" alt="Blood Availability" />
                        <div class="overlay">
                            <h2>Emergency Search</h2>
                        </div>
                    </div>
                    <div class="grid-item" onclick="window.location.href='/education'" style="width: 42%; height: 300px;">
                        <img src="{{asset('../images/bloodeducation.jpg')}}" alt="Blood Education" />
                        <div class="overlay">
                            <h2>Blood Education</h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="block">
                <h1 class="title">Be a part of our Red-Lifestream</h1>

                <div class="stats-container">
                    <div class="details-card">
                        <div class="card-content">
                            <div class="card-icon">❤️</div>
                            <div class="card-number" id="donors-count">0</div>
                            <div class="card-label">Registered Donors</div>
                        </div>
                    </div>
                    <div class="details-card">
                        <div class="card-content">
                            <div class="card-icon">🏥</div>
                            <div class="card-number" id="hospitals-count">0</div>
                            <div class="card-label">Registered Hospitals</div>
                        </div>
                    </div>
                    <div class="details-card">
                        <div class="card-content">
                            <div class="card-icon">🩸</div>
                            <div class="card-number" id="bloodbanks-count">0</div>
                            <div class="card-label">Registered Bloodbanks</div>
                        </div>
                    </div>
                </div>


                <div class="stats-container">
                    <div class="">
                        <a href="{{route('register')}}"><button class="button">
                                {{ __('Register as a donor') }}
                            </button></a>
                    </div>
                    <div class="">
                        <a href="{{route('register')}}"><button class="button">
                                {{ __('Register as a hospital/Bloodbank staff') }}
                            </button></a>
                    </div>
                </div>
            </div>

            <div class="block">

                <h3 class="title" id="camp">Blood Donation Camps</h3>
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

                        .card-body {
                            background-image: linear-gradient(to bottom right, #ffcccc, #ffe6e6);
                            background-repeat: no-repeat;
                            background-position: center;
                        }

                        .card-title {
                            color: #d32f2f;
                            font-weight: bold;
                            text-align: center;
                            margin-bottom: 20px;
                            font-size: 1.5rem;
                        }

                        .card-subtitle {
                            text-align: center;
                            color: #343434ff;
                            margin-bottom: 10px;
                            font-size: 1rem;
                        }

                        .card-text {
                            text-align: center;
                            color: #555;
                            margin-bottom: 15px;
                            font-size: 1rem;
                        }
                    </style>

                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            @foreach ($camps as $camp)
                                <div class="swiper-slide">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">Donation Camp {{ $camp->id }}</h5>
                                            <h6 class="card-subtitle mb-2 text-muted">📍{{ $camp->location }}</h6>
                                            <p class="card-text">📆{{ $camp->s_date }}</p>
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

                <h3 class="title" id="gallery">Gallery</h3>
            </div>
            <div class="block"></div>
            <h3 class="title" id="about">About Us</h3>
            <p style="max-width: 80%; margin: 0 auto; font-size: 1.2rem;">
                At Red-LifeStream, we believe that every drop of blood has the power to save lives. Our Blood Inventory &
                Management System is designed to streamline the donation and distribution process, connecting donors,
                hospitals, and blood banks efficiently and securely.
                <br>
                We aim to make blood donation simpler, faster, and more transparent, ensuring that life-saving blood reaches
                those in need without delay. By maintaining accurate records, managing inventories, and facilitating
                communication, BIMS empowers communities to act swiftly in critical moments.
                <br>
                Whether you are a donor, a healthcare provider, or a volunteer, BIMS is committed to making your experience
                seamless, trustworthy, and impactful. Together, we can save lives—one donation at a time.
            </p>
            <br><br>
            <h3 class="title" id="contact">Contact Us</h3>
            <div class="container" style="max-width: 80%;">
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <p style="font-size: 1rem;">
                            We’d love to hear from you! Whether you have questions, need assistance, or want to get
                            involved, our team is here to help. Reach out to us anytime:
                            <br><br>
                            <b>Email: support@bims.com
                            <br>
                            Phone: +94 11 123 4567
                            <br>
                            Address: 123 Health Street, Colombo, Sri Lanka
                            <br><br></b>
                            Or fill out this form, and we’ll get back to you as soon as possible.
                        </p>
                    </div>
                    <div class="col-md-6 mb-4">
                        <form class="book-form">
                            <!-- <h3>Book an Appointment</h3> -->
                            <div class="row align-items-center">
                                <div class="mb-md-4 col-md-6">
                                    <input type="text" class="form-control" placeholder="First name">
                                </div>
                                <div class="mb-md-4 col-md-6">
                                    <input type="text" class="form-control" placeholder="Last name">
                                </div>
                                <div class="mb-3 mb-md-4 col-md-30">
                                    <input type="email" class="form-control" placeholder="Email">
                                </div>
                                <div class="mb-3 mb-md-4 col-md-6">
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
    </div>

    <script>
        // Initialize Hero Carousel
        const heroSwiper = new Swiper(".hero-swiper", {
            slidesPerView: 1,
            spaceBetween: 0,
            loop: true,
            autoplay: {
                delay: 6000,
                disableOnInteraction: false,
                pauseOnMouseEnter: true,
            },
            effect: "fade",
            fadeEffect: {
                crossFade: true
            },
            speed: 2000, // Transition speed
            pagination: {
                el: ".hero-pagination",
                clickable: true,
                dynamicBullets: true,
            },
            // Responsive breakpoints
            breakpoints: {
                768: {
                    autoplay: {
                        delay: 4000,
                    }
                }
            },
            on: {
                slideChange: function () {
                    // Reset timer animation when slide changes
                    const timerBar = document.querySelector('.timer-bar');
                    if (timerBar) {
                        timerBar.style.animation = 'none';
                        timerBar.offsetHeight; // Trigger reflow
                        timerBar.style.animation = 'timerCountdown 6s linear infinite';
                    }
                }
            }
        });

        // Pause autoplay when user interacts with pagination
        document.querySelector('.hero-pagination').addEventListener('click', () => {
            heroSwiper.autoplay.stop();
            setTimeout(() => {
                heroSwiper.autoplay.start();
            }, 3000);
        });

        //count incrementer----------------------------------
        // Set the target numbers
        const targetDonors = 400;
        const targetHospitals = 100;
        const targetBloodbanks = 80;

        // Get the elements
        const donorsCount = document.getElementById('donors-count');
        const hospitalsCount = document.getElementById('hospitals-count');
        const bloodbanksCount = document.getElementById('bloodbanks-count');

        // Flags to prevent re-animation
        let donorsAnimated = false;
        let hospitalsAnimated = false;
        let bloodbanksAnimated = false;

        //animate the count
        function animateCount(element, target) {
            let count = 0;
            const interval = setInterval(() => {
                count++;
                element.textContent = count;
                if (count >= target) {
                    clearInterval(interval);
                }
            }, 6); // adjust the speed here
        }

        // check if the element is in view
        function isElementInView(element) {
            const rect = element.getBoundingClientRect();
            return (
                rect.top < window.innerHeight &&
                rect.bottom > 0
            );
        }

        // Animate the count when the element is in view
        window.addEventListener('scroll', () => {
            if (!donorsAnimated && isElementInView(donorsCount)) {
                animateCount(donorsCount, targetDonors);
                donorsAnimated = true;
            }
            if (!hospitalsAnimated && isElementInView(hospitalsCount)) {
                animateCount(hospitalsCount, targetHospitals);
                hospitalsAnimated = true;
            }
            if (!bloodbanksAnimated && isElementInView(bloodbanksCount)) {
                animateCount(bloodbanksCount, targetBloodbanks);
                bloodbanksAnimated = true;
            }
        });

    </script>

@endsection