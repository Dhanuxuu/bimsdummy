@extends('inventory.home')

@section('subcontent')
<div class="container">
<h2>Add Donations</h2>
<div class="card-body p-4 p-md-5">
    <form>
        <div class="row">
            <div class="col-md-5 mb-4">
                <h4>Camp ID</h4>
                <input type="text" id="lastName" class="form-control" />
            </div>
            <div class="col-md-5 mb-4">
                <h4>date</h4>
                <input type="date" id="lastName" class="form-control" />
            </div>
        </div>
        <div class="row">
            <div class="col-md-5 mb-4">
                <h4>NIC</h4>
                <input type="text" id="lastName" class="form-control" />
            </div>
            <div class="col-md-5 mb-4">
                <h4>Blood Category</h4>
                <select name="btype" id="btype" class="form-control" required>
                    <option value="ap" {{ old('btype') == 'ap' ? 'selected' : '' }}>A+</option>
                    <option value="an" {{ old('btype') == 'an' ? 'selected' : '' }}>A-</option>
                    <option value="bp" {{ old('btype') == 'bp' ? 'selected' : '' }}>B+</option>
                    <option value="bn" {{ old('btype') == 'bn' ? 'selected' : '' }}>B-</option>
                    <option value="op" {{ old('btype') == 'op' ? 'selected' : '' }}>o+</option>
                    <option value="on" {{ old('btype') == 'on' ? 'selected' : '' }}>o-</option>
                    <option value="abp" {{ old('btype') == 'abp' ? 'selected' : '' }}>AB+</option>
                    <option value="abn" {{ old('btype') == 'abn' ? 'selected' : '' }}>AB-</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5 mb-4">
                <h4>Amount</h4>
                <input type="text" id="lastName" class="form-control" />
            </div>
            <div class="col-md-5 mb-4">
                <h4>Expired Date(After 2 months)</h4>
                <input type="Date" id="lastName" class="form-control" />
            </div>
        </div>
        <div class="row">
            <div class="col-md-5 mb-4">
                <h4>Storage Location</h4>
                <input type="text" id="lastName" class="form-control" />
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