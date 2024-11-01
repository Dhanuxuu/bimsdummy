@extends('layouts.app')

@section('content')
<h1>Audit Log</h1>
<div class="card-body p-4 p-md-5" >
        <form>
            <div class="row">
            <div class="col-md-5 mb-4">
            <h4 class="mb-4 pb-2 pb-md-0 mb-md-5">From date</h4>
            <input type="date" id="fdate" name="fdate" class="form-control form-control-lg">
            </div>
            <div class="col-md-5 mb-4">
            <h4 class="mb-4 pb-2 pb-md-0 mb-md-5">To date</h4>
            <input type="date" id="tdate" name="tdate" class="form-control form-control-lg">
            </div>
            </div>
            <div class="row justify-content-center">
            <div class="col-md-5 mb-4 ">
            <h4 class="mb-4 pb-2 pb-md-0 mb-md-5">Blood Bank</h4>
            <select name="province" id="province" class="form-control form-control-lg"">
                <option value>Value1</option>
                <option value>Value2</option>
                <option value>Value3</option>
                <option value>Value4</option>
                <option value>Value5</option>
            </select>
            </div>
            </div>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary" >
                Search History
                </button>
            </div>
        </form>
        <br><br>
        <table class="table table-bordered">
        <thead>
            <tr>
                <th>S.no</th>
                <th>Date</th>
                <th>Transaction date</th>
                <th>Source address</th>
                <th>Destination address</th>
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