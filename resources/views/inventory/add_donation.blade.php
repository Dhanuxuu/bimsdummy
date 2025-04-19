@extends('inventory.home')

@section('subcontent')
<div class="container">
<h2>Add Donations</h2>
<div class="card-body p-4 p-md-5">
    <form method="post" action="{{ route('inventory.store') }}">
        @csrf
        <div class="row">
            <div class="col-md-5 mb-4">
                <h4>Camp ID</h4>
                <!-- <input type="text" id="campID" name="campID" class="form-control" /> -->
                <select name="campID" id="campID" class="form-control">
                @foreach ($camps as $camp)
                    <option value="{{$camp->id}}">{{$camp->location}}</option>
                @endforeach
            </select>
            </div>
            <div class="col-md-5 mb-4">
                <h4>date</h4>
                <input type="date" id="date" name="date" class="form-control" value="{{ \Carbon\Carbon::now()->format('Y-m-d') }}" readonly/>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5 mb-4">
                <h4>NIC</h4>
                <input type="text" id="nic" name="nic" class="form-control" />
            </div>
            <div class="col-md-5 mb-4">
                <h4>Blood Category</h4>
                <select name="btype" id="btype" class="form-control">
                @foreach ($btypes as $btype)
                    <option value="{{$btype->id}}">{{$btype->name}}</option>
                @endforeach
            </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5 mb-4">
                <h4>Amount</h4>
                <input type="text" id="amount" name="amount" class="form-control" />
            </div>
            <div class="col-md-5 mb-4">
                <h4>Expired Date(After 2 months)</h4>
                <input type="Date" id="expdate" name="expdate" class="form-control" value="{{ \Carbon\Carbon::now()->addMonths(2)->format('Y-m-d') }}" readonly/>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5 mb-4">
                <h4>Storage Location</h4>
                <input type="text" id="storelocation" name="storelocation" class="form-control" />
            </div>
            <div class="col-md-5 mb-4">
                <h4>Hospital/Blood Bank ID</h4>
                <!-- <input type="text" id="hbid" name="hbid" class="form-control" value="BB" readonly/> -->
                @foreach ($users as $user)
                @if ($user->uname==Auth::user()->id)
                <input type="text" id="hbid" name="hbid" class="form-control" value="{{ $user->id }}" readonly/>
                @endif
                @endforeach
            </div>
            <div class="mt-4 pt-2">
            <button type="submit" class="btn btn-primary">
                Add
            </button>
        </div>
        </div>
    </form>
    <br><br>
</div> 
</div>
@endsection