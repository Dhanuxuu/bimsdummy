@extends('layouts.app')

@section('content')
<h1>Blood Bank</h1>

<form>
<div class="container">
    <div class="row">
        <div class="col-3">
            <input type="radio" id="html" name="fav_language" value="HTML">
            <label class="form-label" for="lastName">Add Blood Bank</label>
        </div>
        <div class="col-3">
            <input type="radio" id="html" name="fav_language" value="HTML">
            <label class="form-label" for="lastName">Update Blood Bank</label>
        </div>
        <div class="col-3">
            <input type="radio" id="html" name="fav_language" value="HTML">
            <label class="form-label" for="lastName">Delete Blood Bank</label>
        </div>
    </div><br><br>
    <div class="row">
        <div class="col-md-5 mb-4">
            <h3>Add Province</h3>
            <input type="text" id="lastName" class="form-control" />
        </div>
        <div class="col-md-5 mb-4">
            <h3>Add District</h3>
            <input type="text" id="lastName" class="form-control" />
        </div>
    </div>
    <div class="row">
    <div class="col-10">
        <h3>Add Blood Bank Name</h3>
        <input type="text" id="lastName" class="form-control" />
    </div>
    </div><br><br>
    <div class="row">
        <div class="col-md-5 mb-4">
            <h3>Add Email</h3>
            <input type="text" id="lastName" class="form-control" />
        </div>
        <div class="col-md-5 mb-4">
            <h3>Add Mobile</h3>
            <input type="text" id="lastName" class="form-control" />
        </div>
    </div><br><br>
    <div class="row">
        <div class="col-4">
        <button type="submit" class="btn btn-primary">
        Register
        </button>
        </div>
        <div class="col-4">
            
        </div>
        <div class="col-4">
        <button type="submit" class="btn btn-primary">
        Customer View
        </button>
        </div>
    </div>
</div>
</form>

@endsection