@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3>Page Loader Test</h3>
                </div>
                <div class="card-body">
                    <h5>Test the custom page loader by clicking on these links:</h5>
                    <h5>please follow </h5>
                    
                    <div class="row mt-4">
                        <div class="col-md-6">
                            <h6>Internal Links (will show loader):</h6>
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <a href="{{ route('home') }}" class="btn btn-primary btn-sm">Go to Home</a>
                                </li>
                                <li class="list-group-item">
                                    <a href="{{ route('login') }}" class="btn btn-success btn-sm">Go to Login</a>
                                </li>
                                <li class="list-group-item">
                                    <a href="{{ route('register') }}" class="btn btn-info btn-sm">Go to Register</a>
                                </li>
                                <li class="list-group-item">
                                    <a href="{{ route('donor.create') }}" class="btn btn-warning btn-sm">Donor Registration</a>
                                </li>
                            </ul>
                        </div>
                        
                        <div class="col-md-6">
                            <h6>External/Anchor Links (no loader):</h6>
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <a href="https://google.com" class="btn btn-secondary btn-sm">External Link</a>
                                </li>
                                <li class="list-group-item">
                                    <a href="#section1" class="btn btn-secondary btn-sm">Anchor Link</a>
                                </li>
                                <li class="list-group-item">
                                    <a href="#" class="btn btn-secondary btn-sm">Same Page</a>
                                </li>
                                <li class="list-group-item">
                                    <a href="{{ route('home') }}" class="btn btn-secondary btn-sm no-loader">No Loader Link</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="row mt-4">
                        <div class="col-12">
                            <h6>Manual Loader Control:</h6>
                            <button onclick="window.pageLoader.show()" class="btn btn-danger">Show Loader</button>
                            <button onclick="window.pageLoader.hide()" class="btn btn-success">Hide Loader</button>
                        </div>
                    </div>
                    
                    <div class="row mt-4">
                        <div class="col-12">
                            <h6>Test Form Submission:</h6>
                            <form action="{{ route('home') }}" method="GET" class="d-inline">
                                <button type="submit" class="btn btn-primary">Submit Form (with loader)</button>
                            </form>
                            
                            <form action="{{ route('home') }}" method="GET" class="d-inline no-loader">
                                <button type="submit" class="btn btn-secondary">Submit Form (no loader)</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="section1" class="mt-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h4>Section 1 (Anchor Target)</h4>
                    </div>
                    <div class="card-body">
                        <p>This is the target section for anchor links. The loader should not appear when navigating to this section.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 