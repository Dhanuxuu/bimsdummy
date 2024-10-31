<!-- import React from 'react';
import { useNavigate } from 'react-router-dom';
import '../styles/SignIn.css'; -->

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Sign in') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{-- __('Email Address')
                                --}}</label>

                            <div class="col-md-6">
                                <input id="email" placeholder="Username" type="email"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{-- __('Password')
                                --}}</label>

                            <div class="col-md-6">
                                <input id="password" placeholder="Password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Sign in') }}
                                </button>
                            </div>
                            <div class="col-md-8 offset-md-4">
                                <a class="btn btn-primary" href="{{route('register')}}" role="button">{{ __('Create Account') }}</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- <footer class="py-16 text-center text-sm text-black dark:text-white/70">
    Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }}) 
    <p class="copyright">&copy; Designed and Developed by Faculty Of Computing.</p>
    <p>Terms & Conditionssss | Privacy Policy | Accessibility Statement | Last Updated : Jul 21 2024 | Site Map</p>
</footer> -->
<!-- <footer className="footer">
      <div className="footer-text">
        © Designed and Developed by Faculty Of Computing
      </div>
      <div className="footer-links">
        <a href="/terms" className="footer-link">Terms & Conditions</a> |
        <a href="/privacy" className="footer-link">Privacy Policy</a> |
        <a href="/accessibility" className="footer-link">Accessibility Statement</a> |
        <span>Last Updated: Jul 21, 2024</span> |
        <a href="/sitemap" className="footer-link">Site Map</a>
      </div>
    </footer> -->
@endsection