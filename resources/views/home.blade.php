@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Profile</h1>
    <br>
    <div class="row">

        <div class="col">
            <h3>User Details</h3><br>
            
            <h5>First name: {{ Auth::user()->name }}</h5><br>
            <h5>Last Name: </h5><br>
            <h5>Company name:</h5><br>
            <h5>Occupation:</h5><br>
            <h5>City/Town:</h5><br>
            <h5>Email: </h5><br>
            <h5>Telephone:</h5><br>
        </div>

        <div class="col">
            <h3>Login Activities</h3><br>
            <h5>First access to site</h5><br>
            <h5>Last access to site</h5><br>
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
