@extends('donation.donorhome')

@section('subcontent')
<h2>Donation Camp- Donors </h2>
<br>
<div class="container">
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
</div>
@endsection