@extends('layouts.app')
@section('title')Create Page @endsection
@section('content')
<form method="POST" action='{{route('posts.store')}}'>
    @csrf
    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" name="title" class="form-control" id="title" placeholder="Enter title Here ...">
    </div>

    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" name="description" id="description" rows="3"></textarea>
    </div>

    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Post Creator</label>
        <select class="form-control" name="posted_creater">
            @foreach ($users as $user)
            <option value="{{$user->id}}">{{$user->name}}</option>
            @endforeach
        </select>
    </div>

    <button class="btn btn-dark text-warning w-25 mb-3 ">Create Post</button>
</form>

@endsection
