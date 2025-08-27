@extends('layouts.app')

@section('content')
<div class="container" style="padding: 16px;margin-top: 30px;">
<h1>Request Blood Component</h1>
<br>
<form method="post" action="{{ route('hospital.requestBloodstore') }}">
    @csrf
        <div class="col-md-6 mb-4">

        <div data-mdb-input-init class="form-outline" >
        <input id="hbid"  class="form-control form-control-lg" name="hbid" value='{{ Auth::user()->id }}' hidden>
        </div>
        
        <div data-mdb-input-init class="form-outline">
            <h5>Select blood bank</h5>
            <select name="bloodbank" id="bloodbank" class="form-control">
                @foreach ($banks as $bank)
                <option value="{{$bank->hbid}}">{{$bank->hbname}}</option>
                @endforeach
            </select>

        </div><br> 
        <!-- Blood Component -->

        <div data-mdb-input-init class="form-outline">
            <h5>Select Blood Category</h5>
            <select name="btype" id="btype" class="form-control">
                @foreach ($btypes as $btype)
                <option value="{{$btype->id}}">{{$btype->name}}</option>
                @endforeach
            </select>
        </div><br>

        <div data-mdb-input-init class="form-outline">
            <h5>Select blood component</h5>
            <select name="component" id="component" class="form-control">
                @foreach ($bcomponents as $bcomponent)
                <option value="{{$bcomponent->id}}">{{$bcomponent->component}}</option>
                @endforeach
            </select>
        </div><br>

        <div data-mdb-input-init class="form-outline">
            <h5>Select Blood Component</h5>
            <select name="bcomponent" id="bcomponent" class="form-control">
                @foreach ($bcomponents as $bcomponent)
                <option value="{{$bcomponent->id}}">{{$bcomponent->component}}</option>
                @endforeach
            </select>
        </div><br>
        <div data-mdb-input-init class="form-outline">
            <h5>Amount of request (pints/packets)</h5>
            <input type="number" name="amount" id="amount" class="form-control form-control-lg" />
        </div><br>
        </div>
        <div class="mt-4 pt-2">
        <button type="submit" class="btn btn-primary">
            {{ __('Request') }}
        </button>
        </div>
    
</form>

</div>
<br><br>
@endsection