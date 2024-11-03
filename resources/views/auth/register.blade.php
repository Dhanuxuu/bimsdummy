@extends('layouts.app')

@section('content')
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create Account') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->
<section>  
<!-- section - class="vh-100 gradient-custom"
 class="container py-5 h-100"
 class="row justify-content-center align-items-center h-100"
  class="col-12 col-lg-9 col-xl-7"
   class="card shadow-2-strong card-registration" style="border-radius: 15px;"
  -->
    <div>
        <div>
            <div>
                <div>
                    <div class="card-body p-4 p-md-5">
                        <h3 class="mb-4 pb-2 pb-md-0 mb-md-5" align="center">{{ __('Create Account') }}</h3>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 mb-4">

                                    <div data-mdb-input-init class="form-outline">

                                        <!-- <label class="form-label" for="firstName">Email Address</label> -->
                                        <label for="email" class="form-label">{{ __('Email Address') }}</label>
                                        <!-- <input type="text" id="firstName" class="form-control form-control-lg" /> -->
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" required autocomplete="email">
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                </div>
                                <div class="col-md-6 mb-4">

                                    <div data-mdb-input-init class="form-outline">
                                        <label class="form-label" for="lastName">Address</label>
                                        <input type="text" id="address" class="form-control form-control-lg" name="address"/>

                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-4">

                                    <div data-mdb-input-init class="form-outline">

                                        <!-- <label class="form-label" for="firstName">Username</label> -->
                                        <label for="name" class="form-label">{{ __('Name')
                                            }}</label>
                                        <!-- <input type="text" id="firstName" class="form-control form-control-lg" /> -->
                                        <input id="name" type="text"
                                            class="form-control @error('name') is-invalid @enderror" name="name"
                                            value="{{ old('name') }}" required autocomplete="name" autofocus>
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                </div>
                                <div class="col-md-6 mb-4">

                                    <div data-mdb-input-init class="form-outline">
                                        <label class="form-label" for="lastName">Province</label>
                                        <input type="text" id="province" class="form-control form-control-lg" name="province"/>

                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-4">

                                    <div data-mdb-input-init class="form-outline">

                                        <!-- <label class="form-label" for="firstName">Password</label> -->
                                        <label for="password" class="form-label">{{
                                            __('Password') }}</label>

                                        <!-- <input type="text" id="firstName" class="form-control form-control-lg" /> -->
                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            required autocomplete="new-password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror

                                    </div>

                                </div>
                                <div class="col-md-6 mb-4">

                                    <div data-mdb-input-init class="form-outline">
                                        <label class="form-label" for="lastName">District</label>
                                        <input type="text" id="district" class="form-control form-control-lg" name="district"/>

                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-4">

                                    <div data-mdb-input-init class="form-outline">

                                        <!-- <label class="form-label" for="firstName">Verified password</label> -->
                                        <label for="password-confirm" class="form-label">{{__('Confirm Password') }}</label>
                                        <!-- <input type="text" id="firstName" class="form-control form-control-lg" /> -->
                                        <input id="password-confirm" type="password" class="form-control"
                                            name="password_confirmation" required autocomplete="new-password">

                                    </div>

                                </div>
                                <div class="col-md-6 mb-4">

                                    <div data-mdb-input-init class="form-outline">
                                        <label class="form-label" for="lastName">Company Name</label>
                                        <input type="text" id="cname" class="form-control form-control-lg" name="cname"/>

                                    </div>

                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-4 d-flex align-items-center">

                                    <div data-mdb-input-init class="form-outline datepicker w-100">
                                        <label for="birthdayDate" class="form-label">Your role</label>
                                        <input type="text" class="form-control form-control-lg" id="yrole" name="yrole" />

                                    </div>

                                </div>
                                <div class="col-md-6 mb-4">

                                    <div data-mdb-input-init class="form-outline">
                                        <label class="form-label" for="lastName">Company Address</label>
                                        <textarea rows="4" cols="30" name="caddress" ></textarea>
                                        <!-- <input type="text" id="lastName" class="form-control form-control-lg" width="30px"/> -->

                                    </div>

                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-4 pb-2">

                                    <div data-mdb-input-init class="form-outline">
                                        <label class="form-label" for="emailAddress">First name</label>
                                        <!-- <input type="email" id="emailAddress" class="form-control form-control-lg" /> -->
                                        <input type="text" id="fname" class="form-control form-control-lg" name="fname"/>

                                    </div>

                                </div>
                                <!-- <div class="col-md-6 mb-4 pb-2">

                  <div data-mdb-input-init class="form-outline">
                    <input type="tel" id="phoneNumber" class="form-control form-control-lg" />
                    <label class="form-label" for="phoneNumber">Phone Number</label>
                  </div>

                </div> -->
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-4 pb-2">

                                    <div data-mdb-input-init class="form-outline">
                                        <label class="form-label" for="emailAddress">Last name</label>
                                        <!-- <input type="email" id="emailAddress" class="form-control form-control-lg" /> -->
                                        <input type="text" id="lname" class="form-control form-control-lg" name="lname"/>
                                    </div>

                                </div>
                            </div>

                            <div class="mt-4 pt-2" align="center">
                                <!-- <input data-mdb-ripple-init class="btn btn-primary btn-lg" type="submit"
                                    value="Register" /> -->
                                <button type="submit" class="btn btn-primary" >
                                    {{ __('Register') }}
                                </button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
