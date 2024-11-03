@extends('layouts.app')

@section('content')
<div class="container">
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

        <div class="col">
            <h3>Login Activities</h3><br>
            <h5>First access to site: {{ Auth::user()->created_at }}</h5><br>
            <h5>Last access to site: {{ Auth::user()->updated_at }}</h5><br>
            <h5>Activities did through last month</h5><br>
        </div>

    </div>

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
