@extends('layouts.app')

@section('content')

<div class="container" style="padding: 16px;margin-top: 30px;">
    <h1>Profile</h1>
    <br>
    <div class="row">

        <div class="col">
            <h3>User Details</h3><br>
            
            <h5>First name: {{ Auth::user()->fname }}</h5><br>
            <h5>Last Name: {{ Auth::user()->lname }}</h5><br>
            <h5>Company name:{{ Auth::user()->cname }}</h5><br>
            <h5>Occupation:{{ Auth::user()->yrole }}</h5><br>
            <h5>City/Town:{{ Auth::user()->district }}</h5><br>
            <h5>Email: {{ Auth::user()->email }}</h5><br>
            <h5>Telephone:{{ Auth::user()->name }}</h5><br>
        </div>
        @if (Auth::user()->role == 'donor')
        <div class="col">
            <h3>Donation History</h3><br>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>S.no</th>
                        <th>Donated date</th>
                        <th>Donated Place</th>
                        <th>Donated Amount</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>        
        @endif

    </div>
@if (Auth::user()->role == 'donor')
    <div class="col-md-6 mb-4">
        <a href="{{route('auth/donoregister')}}"><button class="btn btn-primary">
                {{ __('Register as a donor') }}
            </button></a>
    </div>
@else
    <div class="col-md-6 mb-4">
        <a href="{{route('auth/donoregister')}}"><button class="btn btn-primary">
                {{ __('Update your profile') }}
            </button></a>
    </div>
@endif
</div>
@endsection

<!-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div> -->
