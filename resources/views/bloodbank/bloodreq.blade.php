@extends('layouts.app')

@section('content')
<div class="container" style="padding: 16px;margin-top: 30px;">
<h1>Blood Requests</h1>
<!-- <form>
    
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
    
</form> -->
</div>
<br>
<div class="container">
<table class="table table-bordered">
    <thead>
        <tr>
            <th>S.no</th><!--track number-->
            <th>Hospital Name</th>
            <th>Blood component</th>
            <th>Amount</th>
            <th>Status(Approve/Deny)</th>
            <th>Date</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </tbody>
</table>
</div>
@endsection