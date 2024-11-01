@extends('layouts.app')

@section('content')
<h1>Blood Request</h1>
<br>
<form>
    <div class="container">
        <div class="col-md-6 mb-4">
        <div data-mdb-input-init class="form-outline">
            <h5>Select blood bank</h5>
            <select name="province" id="province" class="form-control">
                <option value>Value1</option>
                <option value>Value2</option>
                <option value>Value3</option>
                <option value>Value4</option>
                <option value>Value5</option>
            </select>
        </div><br>
        <div data-mdb-input-init class="form-outline">
            <h5>Select blood component</h5>
            <select name="province" id="province" class="form-control">
                <option value>Value1</option>
                <option value>Value2</option>
                <option value>Value3</option>
                <option value>Value4</option>
                <option value>Value5</option>
            </select>
        </div><br>
        <div data-mdb-input-init class="form-outline">
            <h5>Amount of request</h5>
            <input type="text" id="lastName" class="form-control form-control-lg" />
        </div><br>
        </div>
        <div class="mt-4 pt-2">
        <button type="submit" class="btn btn-primary">
            {{ __('Request') }}
        </button>
    </div>
    </div>
</form>
@endsection