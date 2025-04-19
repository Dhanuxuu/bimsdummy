@extends('layouts.app')

@section('content')
<div class="container">
    <br><br>
    <h2>Hospital & Blood Bank List</h2>

    <!-- 🔍 Search input -->
    <input type="text" id="searchInput" class="form-control mb-3" placeholder="Search hospitals or blood banks...">

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <form method="post" action="{{ route('admin.userRequpdate',$user->id) }}">
                    @csrf
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <select name="role" class="form-control" required>
                                <option value="{{ $user->role }}" selected disabled>{{ $user->role }}</option>
                                <option value="donor">Donor</option>
                                <option value="staff">Staff</option>
                                <option value="admin">Admin</option>
                            </select>
                        </td>
                        <td>
                            <button class="btn btn-primary" type="submit">{{ __('Update') }}</button>
                        </td>
                    </tr>
                </form>
            @endforeach

        </tbody>
    </table>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const input = document.getElementById('searchInput');
        input.addEventListener('keyup', function () {
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
