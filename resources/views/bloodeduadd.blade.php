@extends('layouts.app')

@section('content')
<h1>Blood Education</h1>
<form>
<div class="container">

<div class="row">
<div class="col-md-6 mb-4">
<div data-mdb-input-init class="form-outline">
    <h5>Add heading</h5>
    <input type="text" id="lastName" class="form-control form-control-lg" />
</div>
</div>
<div class="col-md-6 mb-4">
<div data-mdb-input-init class="form-outline">
    <h5>Add subheading</h5>
    <input type="text" id="lastName" class="form-control form-control-lg" />
</div>
</div>
</div>
<div class="col-md-12 mb-4">
<div data-mdb-input-init class="form-outline">
    <h5>Add description</h5>
    <textarea rows="4" cols="30" class="form-control form-control-lg"></textarea>
</div>
</div>
<div data-mdb-input-init class="form-outline">
    <h5>Add image</h5>
    <input type="file" id="myFile" name="filename">
</div>
<div class="mt-4 pt-2">
    <button type="submit" class="btn btn-primary">
        {{ __('Add') }}
    </button>
</div>
</div>
</form>
@endsection