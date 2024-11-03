@extends('layouts.app')

@section('content')
<div class="card-body p-4 p-md-5">
    <div class="row justify-content-center align-items-center h-50">
        <div class="col-md-6 mb-4">
        <a href="{{route('bloodeduadd')}}"><h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Add Blood Education</h3></a>
           
        </div>
        <div class="col-md-6 mb-4">
        <a href="{{route('auditlog')}}"><h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Audit Log</h3></a>
        </div>
    </div>
    <div class="row justify-content-center align-items-center h-50">
        <div class="col-md-6 mb-4">
        <a href="{{route('adddonacamp')}}"><h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Add Blood Donation Camp</h3></a>
        </div>
        <div class="col-md-6 mb-4">
        <a href="{{route('addbloodbank')}}"><h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Add Blood Bank</h3></a>
        </div>
    </div>
    <div class="row justify-content-center align-items-center h-50">
        <div class="col-md-6 mb-4">
        <a href="{{route('updatebloodbank')}}"><h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Update Blood Donation Camp</h3></a>
        </div>
        <div class="col-md-6 mb-4">
        <a href="{{route('delbloodbank')}}"><h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Delete Blood Bank</h3></a>
        </div>
    </div>
</div>
@endsection