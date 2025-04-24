@extends('layouts.app')

@section('styles')
    <link href="{{ asset('styles/CreateAccountForm.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="register-background">
        <div class="form-container" >
            <h1 class="" align="center">{{ __('Create Account') }}</h1>
            <form class="form-column" method="POST" action="{{ route('register') }}">
                @csrf
                <div class="row">
                    <div class="">
                        <div class="form-outline">
                            <label for="email" class="form-label">{{ __('Email Address') }}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror input-cells" name="email" value="{{ old('email') }}" required autocomplete="email">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="">
                        <div class="form-outline">
                            <label for="name" class="form-label">{{ __('Name') }}</label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror input-cells" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="">
                        <div class="form-outline">
                            <label for="password" class="form-label">{{__('Password') }}</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror input-cells" name="password" required autocomplete="new-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="">
                        <div class="form-outline">
                            <label for="password-confirm" class="form-label">{{__('Confirm Password') }}</label>
                            <input id="password-confirm" type="password" class="form-control input-cells" name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-4 d-flex align-items-center">
                        <div class="form-outline datepicker w-100" hidden>
                            <label for="role" class="form-label">Your role</label>
                            <select name="role" id="role" class="form-control">
                                <option value="donor" {{ old('role') == 'donor' ? 'selected' : '' }}></option>
                            </select>

                        </div>
                    </div>
                </div>
                <div class="mt-4 pt-2" align="center">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Register') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
