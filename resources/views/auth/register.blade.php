@extends('layouts.app')

@section('content')
                <div class="container">
                    <div class="card-body p-4 p-md-5" >
                        <h3 class="mb-4 pb-2 pb-md-0 mb-md-5" align="center">{{ __('Create Account') }}</h3>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <label for="email" class="form-label">{{ __('Email Address') }}</label>
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <label for="name" class="form-label">{{ __('Name') }}</label>
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <label for="password" class="form-label">{{__('Password') }}</label>
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <label for="password-confirm" class="form-label">{{__('Confirm Password') }}</label>
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-4 d-flex align-items-center">
                                    <div class="form-outline datepicker w-100" hidden>
                                        <label for="role" class="form-label">Your role</label>
                                        <!-- <select name="role" id="role" class="form-control">
                                            <option value="donor" selected>Register as a Donor</option>
                                            <option value="staff" >Register as Hospital/BloodBank staff</option>
                                        </select> -->
                                        <select name="role" id="role" class="form-control">
                                            <!-- <option value="admin" {{ old('role') == 'admin' ? 'selected' : '' }}>Select a role</option> -->
                                            <option value="donor" {{ old('role') == 'donor' ? 'selected' : '' }}></option>
                                            <!-- <option value="staff" {{ old('role') == 'staff' ? 'selected' : '' }}>Register as Hospital/BloodBank staff</option> -->
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
