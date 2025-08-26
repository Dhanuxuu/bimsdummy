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
            <th>Blood Category</th>
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
            <td>
            @switch($req->btype)
                @case(1) A+ @break
                @case(2) A- @break
                @case(3) B+ @break
                @case(4) B- @break
                @case(5) AB+ @break
                @case(6) AB- @break
                @case(7) O+ @break
                @case(8) O- @break
                @case(9) Oh+ @break
                @case(10) Oh- @break
            @endswitch
            </td>
            <td>
                @switch($req->component)
                    @case(5) Whole Blood @break
                    @case(6) Single Donor Platelet @break
                    @case(7) Single Donor Plasma @break
                    @case(8) Sagm Packed Red Blood Cells @break
                    @case(9) Random Donor Platelets @break
                    @case(10) Platelet Rich Plasma @break
                    @case(11) Platelet Concentrate @break
                    @case(12) Plasma @break
                    @case(13) Packed Red Blood Cells @break
                    @case(14) Leukoreduced RBC @break
                    @case(15) Irradiated RBC @break
                    @case(16) Fresh Frozen Plasma @break
                    @case(17) Cryoprecipitate @break
                    @case(18) Cryo Poor Plasma @break
                @endswitch
            </td>
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
