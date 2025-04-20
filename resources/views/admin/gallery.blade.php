@extends('layouts.app')

@section('content')
<br><br>
<div class="container">
<form method="post" action="{{ route('admin.storegallery') }}" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="formFile" class="form-label">Upload image to display</label>
        <input class="form-control" type="file" id="image" name="image" required>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">
            {{ __('Upload') }}
        </button>
    </div>
</form>
<table class="table">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">Image</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    @php
    $count = 1;
    @endphp
    @foreach ($photos as $photo)
    <tr>
      <th scope="row">{{ $count++ }}</th>
      <td><img src="{{ asset('assets/images/'.$photo->image.'') }}" width="60"></td>
      <td><a href="{{ route('admin.deleteGallery',$photo->id) }}"><button onclick="confirm()" class="btn btn-danger  text-center ">Delete</button> </a></td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
<script>
function confirm() {
  if (confirm("Are you sure?")) {
  } else {
  }
}
</script>
@endsection