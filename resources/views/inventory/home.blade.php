@extends('layouts.app')

@section('content')
  <div class="container-fluid"> {{-- Leave space for fixed header --}}
    <div class="row">
      <style>
        .sidebar {
          gradient: linear-gradient(to bottom, #2666a6ff, #e9ecef);
        }
      </style>
      <!-- Sidebar -->
      <nav class="col-md-3 col-lg-2 d-md-block bg-white shadow-sm sidebar">
        <div class="position-sticky">
          <ul class="nav flex-column mt-3">
            <li class="nav-item">
              <a class="nav-link text-black" href="{{ route('inventory.add_donation') }}">{{ __('Add Donations') }}</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-black"
                href="{{ route('inventory.check_exp') }}">{{ __('Check Expired Component') }}</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-black" href="{{ route('inventory.bloodstatus') }}">{{ __('Blood Status') }}</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-black"
                href="{{ route('inventory.availability') }}">{{ __('Current Availability') }}</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-black" href="{{ route('inventory.analysis') }}">{{ __('Inventory Analysis') }}</a>
            </li>
          </ul>
        </div>
      </nav>

      <!-- Main Content -->
      <main class="col-md-9 col-lg-10 px-md-4"
      style="background-color:#c7c6c6; min-height: 100vh; padding-top: 30px;">
        @yield('subcontent')
      </main>
    </div>
  </div>
@endsection