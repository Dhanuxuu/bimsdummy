@extends('layouts.app')

@section('content')
<div class="container">
    <br><br>
    <h2>View Blood Requests</h2>
    <br>
    <table class="table table-bordered">
    <thead>
        <tr>
            <th>S.no</th><!--track number-->
            <th>Blood Bank</th>
            <th>Blood Category</th>
            <th>Blood component</th>
            <th>Amount</th>
            <th>Current Status</th>
            <th>Remarks</th>
            <th>Actions</th>
        </tr>
    </thead>
    @if (isset($requests))
    <tbody>
        @foreach ($requests as $req)
        <tr>
            @if ($req->hbid == Auth::user()->id)
            <td>{{ $req->id }}</td>
            <td>{{ $req->bloodbank }}</td>
            <td>
                @switch($req->btype)
                @case(1) A+ @break
                @case(2) A- @break
                @case(3) B+ @break
                @case(4) B- @break
                @case(5) AB+ @break
                @case(6) AB- @break
                @case(7) O+ @break
                @case(8) O- @break
                @case(9) Oh+ @break
                @case(10) Oh- @break
            @endswitch
            </td>
            <td>
                @switch($req->component)
                    @case(5) Whole Blood @break
                    @case(6) Single Donor Platelet @break
                    @case(7) Single Donor Plasma @break
                    @case(8) Sagm Packed Red Blood Cells @break
                    @case(9) Random Donor Platelets @break
                    @case(10) Platelet Rich Plasma @break
                    @case(11) Platelet Concentrate @break
                    @case(12) Plasma @break
                    @case(13) Packed Red Blood Cells @break
                    @case(14) Leukoreduced RBC @break
                    @case(15) Irradiated RBC @break
                    @case(16) Fresh Frozen Plasma @break
                    @case(17) Cryoprecipitate @break
                    @case(18) Cryo Poor Plasma @break
                @endswitch
            </td>
            <td>{{ $req->amount }}</td>

            <form method="post" action="{{ route('hospital.storeBloodrequpdate',$req->id) }}">
                @csrf
            <td>
            <select name="status" id="status" class="form-control" required>
                <option value="">{{ $req->status }}</option>
                <option value="Processing">Processing</option>
                <option value="Delivered">Delivered</option>
            </select>
            </td>
            <td><input type="text" id="remark" name="remark" class="form-control" placeholder="{{ $req->remark }}"></td>
            <td>
                <button class="btn btn-primary" type="submit">
                    {{ __('Update') }}
                </button>
            </td>
            </form>

            @endif
        </tr>
        @endforeach
    </tbody>
    @endif
</table>
</div>

@endsection
