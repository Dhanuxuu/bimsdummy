@extends('layouts.app')

@section('styles')
<link href="{{ asset('styles/ProfileView.css') }}" rel="stylesheet">
@endsection

@section('content')

<div class="container">
    <div class="row justify-content-center">
        @if (Auth::user()->role == 'donor' && isset($donor))
        <div class="col-md-8">
            <br><br>
        <h2>Profile</h2><br>
        <h5>First Name : {{ $donor->first_name }}</h5><br>
        <h5>Last Name : {{ $donor->last_name }}</h5><br>
        <h5>NIC : {{ $donor->nic }}</h5><br>
        <h5>Location : {{ $donor->location }}</h5><br>
        <h5>Email : {{ $donor->donor_id }}</h5><br>
        <h5>Contact no : {{ $donor->contact_no }}</h5><br>
        <h5>Gender : {{ $donor->gender }}</h5><br>
        <h5>Date of Birth : {{ $donor->dob }}</h5><br>
        <h5>weight : {{ $donor->weight }}</h5><br>
        <h5>Diseases : {{ $donor->diseases }}</h5><br>
        <h5>Blood Type : {{ $donor->blood_type }}</h5><br>
        <h5>Actions : </h5><br>
        </div>
        <h2>Donation History</h2><br>
        <table class="table">
        <thead>
            <tr>
            <th scope="col"></th>
            <th scope="col">CampID</th>
            <th scope="col">Date</th>
            <th scope="col">Amount</th>
            </tr>
        </thead>
        <tbody>
            @php $count = 1; @endphp
            @foreach ($donations as $donation)
            @if ($donation->nic == $donor->nic)
            <tr>
            <th scope="row">{{ $count++ }}</th>
            <td>{{$donation->campID}}</td>
            <td>{{$donation->date}}</td>
            <td>{{$donation->amount}}</td>
            </tr>
            @endif
            @endforeach
        </tbody>
        </table>
        @elseif(Auth::user()->role == 'staff' && isset($staff))
        <div class="col-md-8">
            <br><br>
        <h2>Profile</h2><br>
        <h5>Registration Type : {{ $staff->regtype }}</h5><br>
        <h5>Name : {{ $staff->hbname }}</h5><br>
        <h5>Registration ID : {{ $staff->hbid }}</h5><br>
        <h5>User Name : {{ $staff->uname }}</h5><br>
        <h5>District : {{ $staff->district }}</h5><br>
        <h5>Province : {{ $staff->province }}</h5><br>
        <h5>Email : {{ $staff->email }}</h5><br>
        <h5>Contact no : {{ $staff->phone }}</h5><br>
        <h5>Address : {{ $staff->hbaddress }}</h5><br>
        <h5>Actions :{{ $staff->id }} </h5><br>
        </div>
        @else
        <div class="col-md-8">
            <br><br>
        <h2>Profile</h2><br>
        <h2>Update your Profile</h2><br>
        <h5>Actions : </h5><br>
        </div>
        @endif
    </div>
</div>
@endsection
