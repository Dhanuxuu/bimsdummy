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
            <td>{{ $req->btype }}</td>
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
