@extends('layouts.app')

@section('styles')
<link href="{{ asset('styles/tablestyles.css') }}" rel="stylesheet">
<link href="{{ asset('styles/BgAdder.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="container">
        <br><br>
        <h1>Hospital & Blood Bank List</h1>

        <!-- 🔍 Search input -->
        <input type="text" id="searchInput" class="form-control mb-3" placeholder="Search hospitals or blood banks...">

        <table class="availability-table">
            <thead>
                <tr>
                    <th> </th>
                    <th>Type</th>
                    <th>Name</th>
                    <th>District</th>
                    <th>Province</th>
                    <th>Email</th>
                    <th>Contact no</th>
                    <th>Address</th>
                </tr>
            </thead>
            <tbody>
                @foreach($staffs as $staff)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $staff->regtype }}</td>
                    <td>{{ $staff->hbname }}</td>
                    <td>{{ $staff->district }}</td>
                    <td>{{ $staff->province }}</td>
                    <td>{{ $staff->email }}</td>
                    <td>{{ $staff->phone }}</td>
                    <td>{{ $staff->hbaddress }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const input = document.getElementById('searchInput');
        input.addEventListener('keyup', function() {
            const filter = input.value.toLowerCase();
            const rows = document.querySelectorAll('table tbody tr');

            rows.forEach(row => {
                const text = row.textContent.toLowerCase();
                row.style.display = text.includes(filter) ? '' : 'none';
            });
        });
    });
</script>

@endsection