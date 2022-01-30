@extends('layouts.app')
@section('title')Update Page @endsection
@section('content')
<form method="POST" action='{{route('posts.update',['post'=> $post->id])}}'>
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text"  class="form-control" id="title" name="title" value="{{$post->title}}">
    </div>

    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" name="description" id="description" rows="3">{{$post->description}}</textarea>
    </div>

    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Post Creator</label>
        <select class="form-control" name="posted_creater">
            {{-- @foreach ($users as $user)
            <option value="{{$user->id}}">{{$user->name}}</option>
            @endforeach --}}
        </select>
    </div>

    <button class="btn btn-dark text-warning w-25 mb-3 ">Update</button>
</form>
@endsection
