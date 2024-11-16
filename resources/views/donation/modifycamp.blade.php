@extends('donation.donorhome')

@section('subcontent')
<div class="container">
<h2>Donation Camp Modifications</h2>
<div class="card-body p-4 p-md-5">
<h4>Enter Donation CampID</h4>
<div class="row">
<div class="col-md-5 mb-4">
<input type="text" id="lastName" class="form-control" /><br>
</div>
<div class="col-md-5 mb-4">
<button type="submit" class="btn btn-primary">
    Search
</button>
</div>
</div>
    <form>
        <div class="row">
            <div class="col-md-5 mb-4">
                <h4>Current location</h4>
                <input type="text" id="lastName" class="form-control" />
            </div>
            <div class="col-md-5 mb-4">
                <h4>New location</h4>
                <input type="text" id="lastName" class="form-control" />
            </div>
        </div>
        <div class="row">
            <div class="col-md-5 mb-4">
                <h4>Current date</h4>
                <input type="text" id="lastName" class="form-control" />
            </div>
            <div class="col-md-5 mb-4">
                <h4>New date</h4>
                <input type="text" id="lastName" class="form-control" />
            </div>
        </div>
        <!-- <div class="row">
            <div class="col-md-5 mb-4">
                <h4>Add time</h4>
                <input type="text" id="lastName" class="form-control" />
            </div>
            <div class="col-md-5 mb-4">
                <h4>Add file/image</h4>
                <input type="file" id="lastName" class="form-control" />
            </div>
        </div> -->
        <div class="mt-4 pt-2">
            <button type="submit" class="btn btn-primary">
                Save Changes
            </button>
        </div>
    </form>
    <br><br>
</div> 
</div>
@endsection