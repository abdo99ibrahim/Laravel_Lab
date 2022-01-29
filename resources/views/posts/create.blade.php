@extends('layouts.app')
@section('title')Create Page @endsection
@section('content')
<form method="POST" action='{{route('posts.store')}}'>
    @csrf
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Title</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter title Here ...">
    </div>

    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Description</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>

    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Post Creator</label>
        <select class="form-control">
            <option>-- Select Post Creator --</option>
            <option value="1">Abdelrahman</option>
            <option value="2">Ibrahim</option>
        </select>
    </div>

    <button class="btn btn-dark text-warning w-25 mb-3 ">Create Post</button>
</form>

@endsection
