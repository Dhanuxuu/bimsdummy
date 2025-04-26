@extends('layouts.app')

@section('styles')
<link href="{{ asset('styles/tablestyles.css') }}" rel="stylesheet">
<link href="{{ asset('styles/BgAdder.css') }}" rel="stylesheet">
<link href="{{ asset('styles/CreateAccountForm.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="container">
    <br><br>
    <h2>View Blood Requests</h2>
    <div class="col-md-6 mb-4">
        <a href="{{ route('hospital.requestBloodstore') }}">
            <button class="button">
                {{ __('Request Blood Component') }}
            </button>
        </a>
    </div><br>
    <table class="availability-table">
    <thead>
        <tr>
            <th>S.no</th><!--track number-->
            <th>Blood Bank</th>
            <th>Blood component</th>
            <th>Amount</th>
            <th>Status</th>
        </tr>
    </thead>
    @if (isset($requests))
    <tbody>
        @foreach ($requests as $req)
        <tr>
            @if ($req->hbid == Auth::user()->id)
            <td>{{ $req->id }}</td>
            <td>{{ $req->bloodbank }}</td>
            <td>{{ $req->btype }}</td>
            <td>{{ $req->amount }}</td>
            <td>{{ $req->status }}</td>
            @endif
        </tr>
        @endforeach
    </tbody>
    @endif
</table>
</div>

@endsection
