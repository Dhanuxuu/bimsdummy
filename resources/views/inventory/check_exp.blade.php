@extends('inventory.home')

@section('subcontent')
<div class="container">
<h2>Check Expired Component</h2>
<div class="card-body p-4 p-md-5">
<!-- <div class="row">
<div class="col-md-5 mb-4">
<br>
</div>
<div class="col-md-5 mb-4">
<button type="submit" class="btn btn-primary">
    Search
</button>
</div>
</div> -->
    <form>
        <div class="row">
            <div class="col-md-5 mb-4">
                <h4>Date</h4>
                <input type="date" id="lastName" class="form-control" />
            </div>
            <div class="col-md-5 mb-4">
                <h4>Camp ID</h4>
                <input type="text" id="lastName" class="form-control" />
            </div>
        </div>
        <div class="row">
            <div class="col-md-5 mb-4">
                <h4>Category</h4>
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
            <div class="mt-4 pt-2">
                <button type="submit" class="btn btn-primary">
                    Search
                </button>
            </div>
        </div><br><br>
        <table class="table table-bordered">
        <thead>
            <tr>
                <th>Camp ID</th>
                <th>Donor Name</th>
                <th>Blood Category</th>
                <th>Amount</th>
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
            </tr>
        </tbody>
        </table>
    </form>
    <br><br>
</div> 
</div>
@endsection