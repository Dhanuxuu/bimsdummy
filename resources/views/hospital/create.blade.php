@extends('layouts.app')

@section('styles')
<link href="{{ asset('styles/CreateAccountForm.css') }}" rel="stylesheet">
<link href="{{ asset('styles/BgAdder.css') }}" rel="stylesheet">
<style>
    .overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.7);
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 1000;
    }

    .overlay-content {
        background: white;
        padding: 30px;
        border-radius: 10px;
        text-align: center;
        max-width: 500px;
        width: 90%;
    }

    .overlay h2 {
        color: #d32f2f;
        margin-bottom: 20px;
    }

    .overlay p {
        margin-bottom: 25px;
        font-size: 1.1em;
    }

    .btn-close-overlay {
        background: #d32f2f;
        color: white;
        border: none;
        padding: 10px 25px;
        border-radius: 5px;
        cursor: pointer;
        font-size: 1em;
    }

    .btn-close-overlay:hover {
        background: #b71c1c;
    }
</style>
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
</div>

@if($isRegistered)
<div class="overlay">
    <div class="overlay-content">
        <h2>Already Registered</h2>
        <p>You have already registered for Red-Lifestream.</p>
        <button onclick="window.location.href='{{ route('home') }}'" class="btn-close-overlay">Close</button>
    </div>
</div>
<script>
    // Prevent form submission if already registered
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.querySelector('form');
        if (form) {
            form.onsubmit = function(e) {
                e.preventDefault();
                return false;
            };
        }
    });
</script>
@else
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const regTypeSelect = document.getElementById('regtype');
        const hbidInput = document.getElementById('hbid');
        const nextHospitalId = '{{ $nextHospitalId }}';
        const nextBloodBankId = '{{ $nextBloodBankId }}';

        // Function to update the ID based on selected type
        function updateIdField() {
            if (regTypeSelect.value === 'Hospital') {
                hbidInput.value = nextHospitalId;
            } else if (regTypeSelect.value === 'BloodBank') {
                hbidInput.value = nextBloodBankId;
            }
        }

        // Initial setup
        updateIdField();

        // Add event listener for change event
        regTypeSelect.addEventListener('change', updateIdField);
    });
    
    document.addEventListener('DOMContentLoaded', function() {
        // Fetch and populate provinces
        fetch('/provinces')
            .then(response => response.json())
            .then(provinces => {
                const provinceSelect = document.getElementById('province');
                provinces.forEach(province => {
                    const option = document.createElement('option');
                    option.value = province;
                    option.textContent = province;
                    provinceSelect.appendChild(option);
                });
            });

        // When province changes, fetch and populate districts
        document.getElementById('province').addEventListener('change', function() {
            const province = this.value;
            const districtSelect = document.getElementById('district');
            districtSelect.innerHTML = '<option value="">Select District</option>';
            districtSelect.disabled = true;

            if (province) {
                fetch(`/districts?province=${encodeURIComponent(province)}`)
                    .then(response => response.json())
                    .then(districts => {
                        districts.forEach(district => {
                            const option = document.createElement('option');
                            option.value = district;
                            option.textContent = district;
                            districtSelect.appendChild(option);
                        });
                        districtSelect.disabled = false;
                    });
            }
        });
    });
</script>
@endif

@endsection
