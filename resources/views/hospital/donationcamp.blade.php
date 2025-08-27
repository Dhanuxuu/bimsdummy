@extends('layouts.app')

@section('content')
<div class="container" style="padding: 16px;margin-top: 30px;">
<h1>Create Donation Camp</h1>
<br>
<form method="post" action="{{ route('hospital.storedonationcamp') }}">
    @csrf
        <div class="col-md-6 mb-4">

        <div data-mdb-input-init class="form-outline" >
            <h5>Schedule a date</h5>
            <input type="date" id="s_date"  class="form-control form-control-lg" name="s_date">
        </div><br>
        
        <div data-mdb-input-init class="form-outline">
            <h5>Location</h5>
            <input type="text" id="location"  class="form-control form-control-lg" name="location">
        </div><br>

        <div data-mdb-input-init class="form-outline">
            <h5>Blood Bank ID</h5>
            <input type="text" id="hbid"  class="form-control form-control-lg" name="hbid" value="{{ $banks->id }}" readonly>
        </div><br>
        
        </div>
        <div class="mt-4 pt-2">
        <button type="submit" class="btn btn-primary">
            {{ __('Create Donation Camp') }}
        </button>
        </div>
    
</form>

</div>
<br><br>
@endsection