@extends('layouts.app')

@section('content')
<div class="container" style="padding: 16px;margin-top: 30px;">

<br>
<a href="{{ route('hospital.donationcamp') }}"><button type="button" class="btn btn-outline-primary">Create Donation Camp</button></a>
<!-- <button type="button" class="btn btn-outline-success">Success</button>
<button type="button" class="btn btn-outline-danger">Danger</button> -->
<br><br>
<h1>Donation Camps</h1>
<br>
<table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Scheduled Date</th>
                    <th>Location</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($camps as $camp)
                    @if ($camp->hbid == $banks->id)
                    <tr>
                        <td data-label="ID">{{ $camp->id }}</td>
                        <td data-label="Type">{{ $camp->s_date }}</td>
                        <td data-label="Name">{{ $camp->location }}</td>
                        <td data-label="Actions">
                            <a href="{{ route('hospital.editcamp', $camp->id) }}"><button type="button" class="btn btn-outline-success">Edit</button></a>
                            <!-- <a href="{{ route('hospital.deletecamp', $camp->id) }}"><button type="button" class="btn btn-outline-danger">Delete</button></a> -->
                            <form action="{{ route('hospital.deletecamp', $camp->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Are you sure?')">
                                    Delete
                                </button>
                            </form>

                        </td>
                    </tr>
                    @endif
                @endforeach
            </tbody>
        </table>
</div>
<br><br>
@endsection