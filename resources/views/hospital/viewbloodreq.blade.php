@extends('layouts.app')

@section('content')
<div class="container">
    <br><br>
    <h2>View Blood Requests</h2>
    <div class="col-md-6 mb-4">
        <a href="{{ route('hospital.requestBloodstore') }}">
            <button class="btn btn-primary">
                {{ __('Request Blood Component') }}
            </button>
        </a>
    </div><br>
    <table class="table table-bordered">
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
