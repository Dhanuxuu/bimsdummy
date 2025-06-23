@extends('layouts.app')

@section('content')
<div class="container">
<br><br>
<h3 class="mb-4 pb-2 pb-md-0 mb-md-5" align="center">{{ __('Register for Donation') }}</h3>
    <form method="POST" action="{{ route('donor.store') }}">
        @csrf

        <div class="row">
            <div class="col-md-6 mb-4">
                <div data-mdb-input-init class="form-outline">
                    <label for="first_name" class="form-label">{{ __('First name') }}</label>
                    <input type="text" id="first_name" class="form-control form-control-lg" name="first_name" required/>
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div data-mdb-input-init class="form-outline">
                    <label for="last_name" class="form-label">{{ __('Last name') }}</label>
                    <input type="text" id="last_name" class="form-control form-control-lg" name="last_name" required/>
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
                    <label for="donor_id" class="form-label">{{ __('Email') }}</label>
                    <input type="text" id="donor_id" class="form-control form-control-lg" name="donor_id" value='{{ Auth::user()->email }}' readonly/>
                </div>
            </div>

        </div>
        <div class="row">

            <div class="col-md-6 mb-4">
                <div data-mdb-input-init class="form-outline">
                    <label for="location" class="form-label">{{ __('Address') }}</label>
                    <input type="text" id="location" class="form-control form-control-lg" name="location" required/>
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div data-mdb-input-init class="form-outline">
                    <label for="contact_no" class="form-label">{{ __('Contact number') }}</label>
                    <input type="text" id="contact_no" class="form-control form-control-lg" name="contact_no"required/>
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
                    <label for="blood_type" class="form-label">{{ __('Blood type') }}</label>
                    <select name="blood_type" id="blood_type" class="form-control" required>
                        <option value="ap" {{ old('blood_type') == 'ap' ? 'selected' : '' }}>A+</option>
                        <option value="an" {{ old('blood_type') == 'an' ? 'selected' : '' }}>A-</option>
                        <option value="bp" {{ old('blood_type') == 'bp' ? 'selected' : '' }}>B+</option>
                        <option value="bn" {{ old('blood_type') == 'bn' ? 'selected' : '' }}>B-</option>
                        <option value="op" {{ old('blood_type') == 'op' ? 'selected' : '' }}>O+</option>
                        <option value="on" {{ old('blood_type') == 'on' ? 'selected' : '' }}>O-</option>
                        <option value="abp" {{ old('blood_type') == 'abp' ? 'selected' : '' }}>AB+</option>
                        <option value="abn" {{ old('blood_type') == 'abn' ? 'selected' : '' }}>AB-</option>
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
@endsection