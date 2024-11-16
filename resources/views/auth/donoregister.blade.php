@extends('layouts.app')

@section('content')
@if (Auth::user()->role == 'donor')
<div class="card-body p-4 p-md-5">
    <h3 class="mb-4 pb-2 pb-md-0 mb-md-5" align="center">{{ __('Register for Donation') }}</h3>
    <div class="container">
    <form method="POST" action="{{ route('auth/donoregister') }}">
        @csrf
        <div class="row">
            <div class="col-md-6 mb-4">
                <div data-mdb-input-init class="form-outline">
                    <label for="fname" class="form-label">{{ __('First name') }}</label>
                    <input type="text" id="fname" class="form-control form-control-lg" name="fname" required/>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div data-mdb-input-init class="form-outline">
                    <label for="lname" class="form-label">{{ __('Last name') }}</label>
                    <input type="text" id="lname" class="form-control form-control-lg" name="lname" required/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-4">
                <div data-mdb-input-init class="form-outline">
                    <label for="nic" class="form-label">{{ __('NIC') }}</label>
                    <input type="text" id="nic" class="form-control form-control-lg" name="nic" required/>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div data-mdb-input-init class="form-outline">
                    <label for="uname" class="form-label">{{ __('Username') }}</label>
                    <input type="text" id="uname" class="form-control form-control-lg" name="uname" value='{{ Auth::user()->name }}' readonly/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-4">
                <div data-mdb-input-init class="form-outline">
                    <label for="address" class="form-label">{{ __('Address') }}</label>
                    <input type="text" id="address" class="form-control form-control-lg" name="address" required/>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div data-mdb-input-init class="form-outline">
                    <label for="city" class="form-label">{{ __('City') }}</label>
                    <input type="text" id="city" class="form-control form-control-lg" name="city" required/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-4">
                <div data-mdb-input-init class="form-outline">
                    <label for="email" class="form-label">{{ __('Email Address') }}</label>
                    <input id="email" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value='{{ Auth::user()->email }}' readonly
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
                    <label for="phone" class="form-label">{{ __('Phone') }}</label>
                    <input type="text" id="phone" class="form-control form-control-lg" name="phone"required/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-4">
                <div data-mdb-input-init class="form-outline">
                    <label for="gender" class="form-label">{{ __('Gender') }}</label>
                    <select name="gender" id="gender" class="form-control" required>
                        <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>Male</option>
                        <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>Female</option>
                        <option value="other" {{ old('gender') == 'other' ? 'selected' : '' }}>Other</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div data-mdb-input-init class="form-outline">
                    <label for="dob" class="form-label">{{ __('Date of Birth') }}</label>
                    <input type="date" id="dob" class="form-control" name="dob"required/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-4">
                <div data-mdb-input-init class="form-outline">
                    <label for="btype" class="form-label">{{ __('Blood type') }}</label>
                    <select name="btype" id="btype" class="form-control" required>
                        <option value="ap" {{ old('btype') == 'ap' ? 'selected' : '' }}>A+</option>
                        <option value="an" {{ old('btype') == 'an' ? 'selected' : '' }}>A-</option>
                        <option value="bp" {{ old('btype') == 'bp' ? 'selected' : '' }}>B+</option>
                        <option value="bn" {{ old('btype') == 'bn' ? 'selected' : '' }}>B-</option>
                        <option value="op" {{ old('btype') == 'op' ? 'selected' : '' }}>o+</option>
                        <option value="on" {{ old('btype') == 'on' ? 'selected' : '' }}>o-</option>
                        <option value="abp" {{ old('btype') == 'abp' ? 'selected' : '' }}>AB+</option>
                        <option value="abn" {{ old('btype') == 'abn' ? 'selected' : '' }}>AB-</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div data-mdb-input-init class="form-outline">
                    <label for="weight" class="form-label">{{ __('Weight') }}</label>
                    <input type="text" id="weight" class="form-control" name="weight" required/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-4">
                <div data-mdb-input-init class="form-outline">
                    <label for="diseases" class="form-label">{{ __('Diseases') }}</label>
                    <input type="text" id="diseases" class="form-control form-control-lg" name="diseases"required/>
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
</div>
@endif
@if (Auth::user()->role == 'staff')
<div class="card-body p-4 p-md-5">
<h3 class="mb-4 pb-2 pb-md-0 mb-md-5" align="center">{{ __('Update your profile') }}</h3>
<div class="container">
    <form method="POST" action="{{ route('auth/donoregister') }}">
        @csrf
        <div class="row">
            <div class="col-md-6 mb-4">
                <div data-mdb-input-init class="form-outline">
                    <label for="fname" class="form-label">{{ __('First name') }}</label>
                    <input type="text" id="fname" class="form-control form-control-lg" name="fname" required/>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div data-mdb-input-init class="form-outline">
                    <label for="lname" class="form-label">{{ __('Last name') }}</label>
                    <input type="text" id="lname" class="form-control form-control-lg" name="lname" required/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-4">
                <div data-mdb-input-init class="form-outline">
                    <label for="nic" class="form-label">{{ __('Hospital ID') }}</label>
                    <input type="text" id="nic" class="form-control form-control-lg" name="nic" required/>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div data-mdb-input-init class="form-outline">
                    <label for="uname" class="form-label">{{ __('Username') }}</label>
                    <input type="text" id="uname" class="form-control form-control-lg" name="uname" value='{{ Auth::user()->name }}' readonly/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-4">
                <div data-mdb-input-init class="form-outline">
                    <label for="address" class="form-label">{{ __('Hospital Address') }}</label>
                    <input type="text" id="address" class="form-control form-control-lg" name="address" required/>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div data-mdb-input-init class="form-outline">
                    <label for="city" class="form-label">{{ __('City') }}</label>
                    <input type="text" id="city" class="form-control form-control-lg" name="city" required/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-4">
                <div data-mdb-input-init class="form-outline">
                    <label for="email" class="form-label">{{ __('Work Email Address') }}</label>
                    <input id="email" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value='{{ Auth::user()->email }}' readonly
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
                    <label for="phone" class="form-label">{{ __('Work Phone') }}</label>
                    <input type="text" id="phone" class="form-control form-control-lg" name="phone"required/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-4">
                <div data-mdb-input-init class="form-outline">
                    <label for="gender" class="form-label">{{ __('Gender') }}</label>
                    <select name="gender" id="gender" class="form-control" required>
                        <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>Male</option>
                        <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>Female</option>
                        <option value="other" {{ old('gender') == 'other' ? 'selected' : '' }}>Other</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div data-mdb-input-init class="form-outline">
                    <label for="dob" class="form-label">{{ __('Date of Birth') }}</label>
                    <input type="date" id="dob" class="form-control" name="dob"required/>
                </div>
            </div>
        </div>
        <!-- <div class="row">
            <div class="col-md-6 mb-4">
                <div data-mdb-input-init class="form-outline">
                    <label for="btype" class="form-label">{{ __('Blood type') }}</label>
                    <select name="btype" id="btype" class="form-control" required>
                        <option value="ap" {{ old('btype') == 'ap' ? 'selected' : '' }}>A+</option>
                        <option value="an" {{ old('btype') == 'an' ? 'selected' : '' }}>A-</option>
                        <option value="bp" {{ old('btype') == 'bp' ? 'selected' : '' }}>B+</option>
                        <option value="bn" {{ old('btype') == 'bn' ? 'selected' : '' }}>B-</option>
                        <option value="op" {{ old('btype') == 'op' ? 'selected' : '' }}>o+</option>
                        <option value="on" {{ old('btype') == 'on' ? 'selected' : '' }}>o-</option>
                        <option value="abp" {{ old('btype') == 'abp' ? 'selected' : '' }}>AB+</option>
                        <option value="abn" {{ old('btype') == 'abn' ? 'selected' : '' }}>AB-</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div data-mdb-input-init class="form-outline">
                    <label for="weight" class="form-label">{{ __('Weight') }}</label>
                    <input type="text" id="weight" class="form-control" name="weight" required/>
                </div>
            </div>
        </div> -->
        <div class="row">
            <!-- <div class="col-md-6 mb-4">
                <div data-mdb-input-init class="form-outline">
                    <label for="diseases" class="form-label">{{ __('Diseases') }}</label>
                    <input type="text" id="diseases" class="form-control form-control-lg" name="diseases"required/>
                </div>
            </div> -->
            <div class="col-md-12 mb-8">
                <div data-mdb-input-init class="form-outline">
                    <button type="submit" class="btn btn-primary" >
                        {{ __('Register') }}
                    </button>
                </div>
            </div>
        </div>
     </form>
     </div>
</div>
@elseif(Auth::user()->role == 'admin')
<div class="card-body p-4 p-md-5">
<h3 class="mb-4 pb-2 pb-md-0 mb-md-5" align="center">{{ __('Update your profile') }}</h3>
<div class="container">
    <form method="POST" action="{{ route('auth/donoregister') }}">
        @csrf
        <div class="row">
            <div class="col-md-6 mb-4">
                <div data-mdb-input-init class="form-outline">
                    <label for="fname" class="form-label">{{ __('First name') }}</label>
                    <input type="text" id="fname" class="form-control form-control-lg" name="fname" required/>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div data-mdb-input-init class="form-outline">
                    <label for="lname" class="form-label">{{ __('Last name') }}</label>
                    <input type="text" id="lname" class="form-control form-control-lg" name="lname" required/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-4">
                <div data-mdb-input-init class="form-outline">
                    <label for="nic" class="form-label">{{ __('Admin ID') }}</label>
                    <input type="text" id="nic" class="form-control form-control-lg" name="nic" required/>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div data-mdb-input-init class="form-outline">
                    <label for="uname" class="form-label">{{ __('Username') }}</label>
                    <input type="text" id="uname" class="form-control form-control-lg" name="uname" value='{{ Auth::user()->name }}' readonly/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-4">
                <div data-mdb-input-init class="form-outline">
                    <label for="address" class="form-label">{{ __('Address') }}</label>
                    <input type="text" id="address" class="form-control form-control-lg" name="address" required/>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div data-mdb-input-init class="form-outline">
                    <label for="city" class="form-label">{{ __('City') }}</label>
                    <input type="text" id="city" class="form-control form-control-lg" name="city" required/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-4">
                <div data-mdb-input-init class="form-outline">
                    <label for="email" class="form-label">{{ __('Work Email Address') }}</label>
                    <input id="email" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value='{{ Auth::user()->email }}' readonly
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
                    <label for="phone" class="form-label">{{ __('Work Phone') }}</label>
                    <input type="text" id="phone" class="form-control form-control-lg" name="phone"required/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-4">
                <div data-mdb-input-init class="form-outline">
                    <label for="gender" class="form-label">{{ __('Gender') }}</label>
                    <select name="gender" id="gender" class="form-control" required>
                        <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>Male</option>
                        <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>Female</option>
                        <option value="other" {{ old('gender') == 'other' ? 'selected' : '' }}>Other</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div data-mdb-input-init class="form-outline">
                    <label for="dob" class="form-label">{{ __('Date of Birth') }}</label>
                    <input type="date" id="dob" class="form-control" name="dob"required/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 mb-8">
                <div data-mdb-input-init class="form-outline">
                    <button type="submit" class="btn btn-primary" >
                        {{ __('Register') }}
                    </button>
                </div>
            </div>
        </div>
     </form>
     </div>
</div>
@endif
@endsection