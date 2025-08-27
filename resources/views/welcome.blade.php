@extends('layouts.app')

@section('styles')
<!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

<link href="{{ asset('styles/Home.css') }}" rel="stylesheet">
<link href="{{ asset('styles/createaccountform.css') }}" rel="stylesheet">
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

    
        <div class="d-flex justify-content-center">
            <div class="grid-item" onclick="window.location.href='/emergencySearch'" style="width: 42%; height: 300px;">
                <img src="{{asset('../images/bloodavailability.jpg')}}" alt="Blood Availability" />
                <div class="overlay">
                    <h2>Emergency Search</h2>
                </div>
            </div>
            <div class="grid-item" onclick="window.location.href='/education'"style="width: 42%; height: 300px;" >
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
                    <a href="{{route('register')}}"><button class="button">
                            {{ __('Register as a donor') }}
                        </button></a>
                </div>
                <div class="" >
                    <a href="{{route('register')}}"><button class="button">
                            {{ __('Register as a hospital/Bloodbank staff') }}
                        </button></a>
                </div>
            </div>
<!-- 

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

                Navigation arrows 
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
            @endif -->

<!--@if($camps && count($camps) > 0)
<h2 class="text-center mt-5">Upcoming Blood Donation Camps</h2>

<div class="swiper mySwiper mt-4">
    <div class="swiper-wrapper">
        @foreach($camps as $camp)
        <div class="swiper-slide">
            <div class="card p-3" style="min-width: 250px; max-width: 300px; margin: auto;">
                <div class="card-body text-center">
                    <h5 class="card-title">Camp #{{ $camp->id }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{ $camp->location }}</h6>
                    <p class="card-text">Date: {{ \Carbon\Carbon::parse($camp->s_date)->format('M d, Y') }}</p>
                    <p class="card-text">Organizer: {{ $camp->organizer ?? 'Red-Lifestream' }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
</div>
@else
<p class="text-center mt-5">No upcoming donation camps.</p>
@endif
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

<script>
    const swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        spaceBetween: 20,
        loop: true,
        autoplay: {
            delay: 4000,
            disableOnInteraction: false,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            768: { slidesPerView: 2 },
            1024: { slidesPerView: 3 }
        }
    });
</script>
-->
<style>
 .slider {
    position: relative;
    max-width: 900px;
    margin: 30px auto;
    overflow: hidden;
  }
  .slider-wrapper {
    display: flex;
    transition: transform 0.4s ease;
  }
  .slide {
    flex: 0 0 300px; /* fixed width slides */
    margin-right: 20px;
    box-sizing: border-box;
  }
  .card {
    border: 1px solid #ccc;
    padding: 15px;
    border-radius: 6px;
    background: #f9f9f9;
    height: 180px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    text-align: center;
  }
  /* Navigation buttons */
  .nav-btn {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background: #222;
    color: #fff;
    border: none;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    cursor: pointer;
    opacity: 0.7;
    font-size: 20px;
    line-height: 40px;
    text-align: center;
    user-select: none;
    transition: opacity 0.3s ease;
  }
  .nav-btn:hover {
    opacity: 1;
  }
  .nav-prev {
    left: 10px;
  }
  .nav-next {
    right: 10px;
  }
  /* Responsive */
  @media (max-width: 1024px) {
    .slide {
      flex: 0 0 45%;
    }
  }
  @media (max-width: 768px) {
    .slide {
      flex: 0 0 90%;
      margin-right: 10px;
    }
  }
</style>


<h2>Upcoming Blood Donation Camps</h2>

<div class="slider" id="slider">
  <div class="slider-wrapper" id="sliderWrapper">
    <!-- Slides will be injected here -->
  </div>
  <button class="nav-btn nav-prev" id="prevBtn">&#10094;</button>
  <button class="nav-btn nav-next" id="nextBtn">&#10095;</button>
</div>

<script>
  const camps = @json($camps);

  function formatDate(dateStr) {
    const options = { month: 'short', day: '2-digit', year: 'numeric' };
    return new Date(dateStr).toLocaleDateString(undefined, options);
  }

  const sliderWrapper = document.getElementById('sliderWrapper');

  camps.forEach(camp => {
    const slide = document.createElement('div');
    slide.className = 'slide';

    slide.innerHTML = `
      <div class="card">
        <h5>Camp #${camp.id}</h5>
        <h6 style="color:#666;">${camp.location}</h6>
        <p>Date: ${formatDate(camp.s_date)}</p>
        <p>Organizer: ${camp.organizer ?? 'Red-Lifestream'}</p>
      </div>
    `;
    sliderWrapper.appendChild(slide);
  });


  // Slider functionality
  const slides = document.querySelectorAll('.slide');
  const slideWidth = slides[0].offsetWidth + 20; // width + margin-right
  let currentIndex = 0;

  const prevBtn = document.getElementById('prevBtn');
  const nextBtn = document.getElementById('nextBtn');

  function updateSlider() {
    sliderWrapper.style.transform = `translateX(${-currentIndex * slideWidth}px)`;
  }

  prevBtn.addEventListener('click', () => {
    if (currentIndex > 0) {
      currentIndex--;
    } else {
      currentIndex = slides.length - 1; // loop to end
    }
    updateSlider();
  });

  nextBtn.addEventListener('click', () => {
    if (currentIndex < slides.length - 1) {
      currentIndex++;
    } else {
      currentIndex = 0; // loop to start
    }
    updateSlider();
  });

  // Optional: autoplay every 4 seconds
  setInterval(() => {
    nextBtn.click();
  }, 4000);

  // Update slider on window resize (optional)
  window.addEventListener('resize', () => {
    // recalc slide width on resize
    const newSlideWidth = slides[0].offsetWidth + 20;
    if (newSlideWidth !== slideWidth) {
      updateSlider();
    }
  });
</script>
            <br><br>

            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5" id="gallery">Gallery</h3>
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5" id="about">About Us</h3>
            <p>
                At Red-Lifestream, we are driven by a single mission — to save lives by bridging the gap between blood donors and those in urgent medical need. Founded on compassion, community service, and the belief that every drop counts, our platform empowers individuals to become everyday heroes through the simple yet powerful act of donating blood.

Our organization collaborates with hospitals, blood banks, and community centers to organize and manage blood donation camps across the country. We aim to make the process of blood donation more accessible, transparent, and efficient for both donors and recipients. Through our user-friendly web platform, donors can register, locate upcoming blood drives, and track their donation history, while healthcare institutions can manage inventories and issue requests in real time.

We also believe in education and awareness. Many people are unaware of the critical need for blood or how easy it is to make a difference. That's why we regularly host awareness campaigns, collaborate with universities, and share verified health information to encourage more individuals to join our mission.

At Red-Lifestream, we don’t just collect blood — we build a community of hope, resilience, and humanity. Whether it’s a routine surgery, an emergency transfusion, or a chronic condition, your donation can be the key to saving someone’s life. Join us in creating a healthier, stronger future — one drop at a time.
            </p>
            <br><br>
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5" id="contact">Contact Us</h3>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <p>
                            Have questions or want to become a part of our life-saving mission? We're here to help. Whether you're a first-time donor, an experienced volunteer, or a hospital looking to collaborate, reach out to us anytime. Use the form below to get in touch, and a member of our team will respond promptly. Together, we can ensure that no life is lost due to the lack of blood availability.
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
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

@endsection