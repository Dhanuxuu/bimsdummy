@extends('layouts.app')

@section('content')
<div class="container-fluid" style="padding: 16px;margin-top: 17px;">
  <div class="row">
    <!-- Sidebar / Vertical Navbar -->
    <nav class="col-md-3 col-lg-2 d-md-block bg-white shadow-sm sidebar" style="margin-top:-2px">
      <div class="position-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link text-black" href="{{route('bloodinventory/adddonation')}}">{{ __('Add Donations') }}</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-black" href="{{route('bloodinventory/checkexp')}}">{{ __('Check Expired Component') }}</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-black" href="{{route('bloodinventory/bloodstatus')}}">{{ __('Blood Status') }}</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-black" href="{{route('bloodinventory/availability')}}">{{ __('Current Availability') }}</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-black" href="{{url('/')}}">{{ __('Inventory Analysis') }}</a>
          </li>
        </ul>
      </div>
    </nav>

    <main class="col-md-9 ml-sm-auto col-lg-10 px-md-4" style="background-color:#c7c6c6;">
    @yield('subcontent')
    </main>
  </div>
</div>
@endsection

