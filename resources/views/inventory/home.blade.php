@extends('layouts.app')

@section('content')
  <div class="container-fluid"> {{-- Leave space for fixed header --}}
    <div class="row">
      <style>
        @import "./variables.css";
        .sidebar {
          min-height: 100vh;
          border-right: 1px solid rgb(11, 72, 146);
          background: linear-gradient(to top, #f14758, #b30101);
          color: #ffffff;
        }
        .sidebar .nav {
          gap: 6px;
        }
        .sidebar .nav-link {
          display: flex;
          align-items: center;
          gap: 10px;
          padding: 10px 12px;
          border-radius: 8px;
          color: #ffffff;
          font-weight: 500;
          transition: background-color .15s ease, color .15s ease, box-shadow .15s ease;
        }
        .sidebar .nav-link:hover {
          background-color: rgba(255,255,255,0.12);
          color: #ffffff;
          text-decoration: none;
        }
        .sidebar .nav-link.active {
          background-color: rgba(255,255,255,0.2);
          color: #ffffff;
          box-shadow: inset 0 0 0 1px rgba(255,255,255,0.25);
          position: relative;
        }
        .sidebar .nav-link.active::before {
          content: "";
          position: absolute;
          left: -12px;
          top: 10px;
          bottom: 10px;
          width: 3px;
          background-color: #ffffff;
          border-radius: 2px;
        }
        .content-bg {
          position: relative;
          overflow: hidden;
        }
        .content-bg::before {
          content: "";
          position: absolute;
          top: 0;
          right: 0;
          bottom: 0;
          left: 0;
          background-image: var(--bg-url);
          background-position: center;
          background-size: cover;
          background-repeat: no-repeat;
          opacity: 0.04; 
          pointer-events: none;
        }
      </style>
      <!-- Sidebar -->
      <nav class="col-md-3 col-lg-2 d-md-block shadow-sm sidebar">
        <div class="position-sticky">
          <ul class="nav flex-column mt-3">
            <li class="nav-item">
              <a class="nav-link {{ request()->routeIs('inventory.add_donation') ? 'active' : '' }}" href="{{ route('inventory.add_donation') }}" aria-current="{{ request()->routeIs('inventory.add_donation') ? 'page' : '' }}">{{ __('Add Donations') }}</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ request()->routeIs('inventory.check_exp') ? 'active' : '' }}"
                href="{{ route('inventory.check_exp') }}" aria-current="{{ request()->routeIs('inventory.check_exp') ? 'page' : '' }}">{{ __('Check Expired Component') }}</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ request()->routeIs('inventory.bloodstatus') ? 'active' : '' }}" href="{{ route('inventory.bloodstatus') }}" aria-current="{{ request()->routeIs('inventory.bloodstatus') ? 'page' : '' }}">{{ __('Blood Status') }}</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ request()->routeIs('inventory.availability') ? 'active' : '' }}"
                href="{{ route('inventory.availability') }}" aria-current="{{ request()->routeIs('inventory.availability') ? 'page' : '' }}">{{ __('Current Availability') }}</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ request()->routeIs('inventory.analysis') ? 'active' : '' }}" href="{{ route('inventory.analysis') }}" aria-current="{{ request()->routeIs('inventory.analysis') ? 'page' : '' }}">{{ __('Inventory Analysis') }}</a>
            </li>
          </ul>
        </div>
      </nav>

      <!-- Main Content -->
      <main class="col-md-9 col-lg-10 px-md-4 content-bg"
      style="background-color:#ffffff; min-height: 100vh; padding-top: 30px; --bg-url: url('{{ asset('images/Bg_image_RLS.png') }}');">
        @yield('subcontent')
      </main>
    </div>
  </div>
@endsection