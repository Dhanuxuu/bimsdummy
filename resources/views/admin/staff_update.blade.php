@extends('layouts.app')

@section('content')
<div class="container">
    <br><br>
    <h2>Hospital & Blood Bank List</h2>

    
    <input type="text" id="searchInput" class="form-control mb-3" placeholder="Search hospitals or blood banks...">

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Registration</th>
                <th>Name</th>
                <th>Reg. ID</th>
                <th>User ID</th>
                <th>District</th>
                <th>Province</th>
                <th>User Email</th>
                <th>Contact No</th>
                <th>Address</th> 
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
                @foreach($hospitals as $hospital)
                        <tr>
                        <form action="{{ route('admin.staff_update_store', $hospital->id) }}" method="POST">
                            @csrf
                            <td>{{ $hospital->id }}</td>
                            <td>{{ $hospital->regtype }}</td>
                            <td>{{ $hospital->hbname }}</td>
                            <td>{{ $hospital->hbid }}</td>
                            <td><input type="text" name="uname" value="{{ $hospital->uname }}" class="form-control mb-2"></td>
                            <td>{{ $hospital->district }}</td>
                            <td>{{ $hospital->province }}</td>
                            <td><input type="email" name="email" value="{{ $hospital->email }}" class="form-control mb-2"></td>
                            <td>{{ $hospital->phone }}</td>
                            <td>{{ $hospital->hbaddress }}</td> 
                            <td>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </td>
                             </form>
                        </tr>
                @endforeach
           
        </tbody>
    </table>
</div>

@endsection
