@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Donation Camp</h2>
    <form method="POST" action="{{ route('hospital.updatecamp', $camp->id) }}">
        @csrf
        <div class="mb-3">
            <label for="s_date" class="form-label">Start Date</label>
            <input type="date" name="s_date" class="form-control" value="{{ $camp->s_date }}" required>
        </div>
        <div class="mb-3">
            <label for="location" class="form-label">Location</label>
            <input type="text" name="location" class="form-control" value="{{ $camp->location }}" required>
        </div>
        <input type="hidden" name="hbid" value="{{ $banks->id }}">

        <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>
@endsection
