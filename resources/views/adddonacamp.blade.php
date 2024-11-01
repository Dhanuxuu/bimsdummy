@extends('layouts.app')

@section('content')
<h1>Blood Donation Camp</h1><br>
<div class="card-body p-4 p-md-5" >
        <form>
            <div class="row">
            <div class="col-md-5 mb-4">
            <h3>Add location</h3>
            <input type="text" id="lastName" class="form-control" />
            </div>
            <div class="col-md-5 mb-4">
            <h3>Add date</h3>
            <input type="text" id="lastName" class="form-control" />
            </div>
            </div>
            <div class="row">
            <div class="col-md-5 mb-4">
            <h3>Add time</h3>
            <input type="text" id="lastName" class="form-control" />
            </div>
            <div class="col-md-5 mb-4">
            <h3>Add file/image</h3>
            <input type="file" id="lastName" class="form-control" />
            </div>
            </div>
            <div class="mt-4 pt-2">
                <button type="submit" class="btn btn-primary" >
                Add camp
                </button>
            </div>
        </form>
        <br><br>
        </div>
@endsection