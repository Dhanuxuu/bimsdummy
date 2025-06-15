@extends('layouts.app')

@section('styles')
<link href="{{ asset('styles/CreateAccountForm.css') }}" rel="stylesheet">
<link href="{{ asset('styles/BgAdder.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="pgbackground bbregister-background">
<div class="card-body p-4 p-md-5">
    <h3 class="mb-4 pb-2 pb-md-0 mb-md-5" align="center">{{ __('Register for Red-Lifestream') }}</h3>
    <div class="container">
        <form method="POST" action="{{ route('hospital.store') }}">
            @csrf

            <div class='form-column'>
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div data-mdb-input-init class="form-outline">
                            <label for="regtype" class="form-label">{{ __('Select ') }}</label>
                            <!-- <input type="text" id="fname" class="form-control form-control-lg" name="fname" required/> -->
                            <select name="regtype" id="regtype" class="form-control">
                                <option value="Hospital" {{ old('regtype') == 'Hospital' ? 'selected' : '' }}>Hospital Registration</option>
                                <option value="BloodBank" {{ old('regtype') == 'BloodBank' ? 'selected' : '' }}>Blood Bank Registration</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div data-mdb-input-init class="form-outline">
                            <label for="hbname" class="form-label">{{ __('Hospital/Bloodbank Name') }}</label>
                            <input type="text" id="hbname" class="form-control" name="hbname" required />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div data-mdb-input-init class="form-outline">
                            <label for="hbid" class="form-label">{{ __('Hospital/ Blood Bank ID') }}</label>
                            <input type="text" id="hbid" class="form-control form-control-lg" name="hbid" value="{{ $nextHospitalId }}" readonly required />
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div data-mdb-input-init class="form-outline">
                            <label for="uname" class="form-label">{{ __('Username') }}</label>
                            <input type="text" class="form-control form-control-lg" placeholder="{{ Auth::user()->name }}" readonly />
                            <input type="text" id="uname" class="form-control form-control-lg" name="uname" value='{{ Auth::user()->id }}' hidden />

                        </div>
                    </div>
                </div>

                <div class="row">
                <div class="col-md-6 mb-4">
                        <div data-mdb-input-init class="form-outline">
                            <label for="province" class="form-label">{{ __('Province') }}</label>
                            <select id="province" name="province" class="form-control form-control-lg" required>
                                <option value="">Select Province</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div data-mdb-input-init class="form-outline">
                            <label for="district" class="form-label">{{ __('District') }}</label>
                            <select id="district" name="district" class="form-control form-control-lg" required disabled>
                                <option value="">Select District</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div data-mdb-input-init class="form-outline">
                            <label for="email" class="form-label">{{ __('Hospital/Bloodbank Email Address') }}</label>
                            <input id="email" type="email" class="form-control form-control-lg" name="email" value='{{ Auth::user()->email }}' readonly>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div data-mdb-input-init class="form-outline">
                            <label for="phone" class="form-label">{{ __('Work Phone') }}</label>
                            <input type="text" id="phone" class="form-control form-control-lg" name="phone" required />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div data-mdb-input-init class="form-outline">
                            <label for="hbaddress" class="form-label">{{ __('Address') }}</label>
                            <input type="text" id="hbaddress" class="form-control form-control-lg" name="hbaddress" required />
                        </div>
                    </div>
                </div>
            </div>
                <div class='form-column-center'>
                
                        <div data-mdb-input-init class="form-outline">
                            <button type="submit" class="btn btn-primary center">
                                {{ __('Register') }}
                        </button>
                    
                </div>
            
        </form>
    </div>
</div>
@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const regtypeSelect = document.getElementById('regtype');
    const hbidInput = document.getElementById('hbid');
    const provinceSelect = document.getElementById('province');
    const districtSelect = document.getElementById('district');
    
    // Load provinces
    fetch('/provinces')
        .then(response => response.json())
        .then(provinces => {
            provinces.forEach(province => {
                const option = new Option(province, province);
                provinceSelect.add(option);
            });
        });

    // Handle province change
    provinceSelect.addEventListener('change', function() {
        const selectedProvince = this.value;
        districtSelect.disabled = !selectedProvince;
        districtSelect.innerHTML = '<option value="">Select District</option>';
        
        if (selectedProvince) {
            fetch(`/districts?province=${encodeURIComponent(selectedProvince)}`)
                .then(response => response.json())
                .then(districts => {
                    districts.forEach(district => {
                        const option = new Option(district, district);
                        districtSelect.add(option);
                    });
                });
        }
    });

    // Handle registration type change
    regtypeSelect.addEventListener('change', function() {
        if (this.value === 'Hospital') {
            hbidInput.value = '{{ $nextHospitalId }}';
        } else {
            hbidInput.value = '{{ $nextBloodBankId }}';
        }
    });
});
</script>
@endpush