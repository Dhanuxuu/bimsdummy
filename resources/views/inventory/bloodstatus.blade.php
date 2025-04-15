@extends('inventory.home')

@section('subcontent')
<h2>Blood Status</h2>
        <div class="card-body p-4 p-md-5" >
        <form>
            <div class="row">
            <div class="col-md-5 mb-4">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Search Province</h3>
            <select name="province" id="province" class="form-control">
                <option value>Value1</option>
                <option value>Value2</option>
                <option value>Value3</option>
                <option value>Value4</option>
                <option value>Value5</option>
            </select>
            </div>
            <div class="col-md-5 mb-4">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Search District</h3>
            <select name="province" id="province" class="form-control">
                <option value>Value1</option>
                <option value>Value2</option>
                <option value>Value3</option>
                <option value>Value4</option>
                <option value>Value5</option>
            </select>
            </div>
            </div>
            <div class="row">
            <div class="col-md-5 mb-4">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Search Blood Group</h3>
            <select name="province" id="province" class="form-control">
                <option value>Value1</option>
                <option value>Value2</option>
                <option value>Value3</option>
                <option value>Value4</option>
                <option value>Value5</option>
            </select>
            </div>
            <div class="col-md-5 mb-4">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Search Blood Component</h3>
            <select name="province" id="province" class="form-control">
                <option value>Value1</option>
                <option value>Value2</option>
                <option value>Value3</option>
                <option value>Value4</option>
                <option value>Value5</option>
            </select>
            </div>
            </div>
            <div class="mt-4 pt-2">
                <button type="submit" class="btn btn-primary" >
                    Search
                </button>
            </div>
        </form>
        <br><br>
        <table class="table table-bordered">
        <thead>
            <tr>
                <th>Blood Bank/Hospital Name</th>
                <th>Address</th>
                <th>Email</th>
                <th>Contact no.</th>
                <th>Available</th>
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
</div>
@endsection