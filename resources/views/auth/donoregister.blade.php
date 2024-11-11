@extends('layouts.app')

@section('content')
<div class="card-body p-4 p-md-5">
    <h3 class="mb-4 pb-2 pb-md-0 mb-md-5" align="center">{{ __('Register for Donation') }}</h3>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="row">
            <div class="col-md-6 mb-4">
                <div data-mdb-input-init class="form-outline">
                    <label for="email" class="form-label">{{ __('Email Address') }}</label>
                    <input id="email" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email"
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
                    <label for="email" class="form-label">{{ __('Age') }}</label>
                    <input type="text" id="address" class="form-control form-control-lg" name="address"/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-4">
                <div data-mdb-input-init class="form-outline">
                    <label for="email" class="form-label">{{ __('Blood type') }}</label>
                    <input type="text" id="address" class="form-control form-control-lg" name="address"/>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div data-mdb-input-init class="form-outline">
                    <label for="email" class="form-label">{{ __('Phone') }}</label>
                    <input type="text" id="address" class="form-control form-control-lg" name="address"/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-4">
                <div data-mdb-input-init class="form-outline">
                    <label for="email" class="form-label">{{ __('Password') }}</label>
                    <input type="text" id="address" class="form-control form-control-lg" name="address"/>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div data-mdb-input-init class="form-outline">
                    <label for="email" class="form-label">{{ __('Diseases') }}</label>
                    <input type="text" id="address" class="form-control form-control-lg" name="address"/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-4">
                <div data-mdb-input-init class="form-outline">
                    <label for="email" class="form-label">{{ __('Verified password') }}</label>
                    <input type="text" id="address" class="form-control form-control-lg" name="address"/>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div data-mdb-input-init class="form-outline">
                    <label for="email" class="form-label">{{ __('Weight') }}</label>
                    <input type="text" id="address" class="form-control form-control-lg" name="address"/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-4">
                <div data-mdb-input-init class="form-outline">
                    <label for="email" class="form-label">{{ __('Gender') }}</label>
                    <input type="text" id="address" class="form-control form-control-lg" name="address"/>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div data-mdb-input-init class="form-outline">
                    <label for="email" class="form-label">{{ __('Location') }}</label>
                    <input type="text" id="address" class="form-control form-control-lg" name="address"/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-4">
                <div data-mdb-input-init class="form-outline">
                    <label for="email" class="form-label">{{ __('First name') }}</label>
                    <input type="text" id="address" class="form-control form-control-lg" name="address"/>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div data-mdb-input-init class="form-outline">
                    <label for="email" class="form-label">{{ __('Last name') }}</label>
                    <input type="text" id="address" class="form-control form-control-lg" name="address"/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-4">
                <div data-mdb-input-init class="form-outline">
                    <label for="email" class="form-label">{{ __('NIC') }}</label>
                    <input type="text" id="address" class="form-control form-control-lg" name="address"/>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div data-mdb-input-init class="form-outline">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Register') }}
                    </button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection