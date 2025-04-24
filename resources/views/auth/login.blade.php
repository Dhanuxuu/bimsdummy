@extends('layouts.app')

@section('styles')
    <link href="{{ asset('styles/SignIn.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="login-background">
    <div class="container login-page" style="padding: 16px;">
        <div class="row justify-content-center">
            <div class="col-md-8 signin-box">

                <div class="signin-title">{{ __('Sign in') }}</div>

                <div class="card-body signin-form">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="input-group">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{-- __('Email Address')
                                --}}</label>

                            <div class="input-field">
                                <input id="email" placeholder="Username" type="email"
                                    class="form-control @error('email') is-invalid @enderror input-field" name="email"
                                    value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="input-group">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{-- __('Password')
                                --}}</label>

                            <div class="input-field">
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

                        <div class="input-group">
                            <div class="signin-form">
                                <div class="form-check divider">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                                <div class="divider">
                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="input-group">
                            <div class="signin-form">
                                <button type="submit" class="btn btn-primary signin-button">
                                    {{ __('Sign in') }}
                                </button>
                            </div>
                            <br><br><br>
                            <div class="signin-form">
                                <a class="create-account-button" href="{{route('register')}}"
                                    role="button">{{ __('Create Account') }}</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection