@extends('layouts.app')

@section('content')
<h1>Blood Bank</h1><br>

<div class="container">
<form>
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
            <h3>Search Province</h3>
            <select name="province" id="province" class="form-control">
                <option value>Value1</option>
                <option value>Value2</option>
                <option value>Value3</option>
                <option value>Value4</option>
                <option value>Value5</option>
            </select>
        </div>
        <div class="col-md-5 mb-4">
            <h3>Search District</h3>
            <select name="province" id="province" class="form-control">
                <option value>Value1</option>
                <option value>Value2</option>
                <option value>Value3</option>
                <option value>Value4</option>
                <option value>Value5</option>
            </select>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-5 mb-4 ">
            <h3>Search Blood Bank</h3>
            <select name="province" id="province" class="form-control">
                <option value>Value1</option>
                <option value>Value2</option>
                <option value>Value3</option>
                <option value>Value4</option>
                <option value>Value5</option>
            </select>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <button type="submit" class="btn btn-primary">
            Search
        </button>
    </div>
</form><br><br>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>S.no</th>
            <th>Blood Bank</th>
            <th>Address</th>
            <th>Email</th>
            <th>Telephone</th>
        </tr>
    </thead>
    <tbody>
        <tr>
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