@extends('layouts.app')
@section('title')Show Page @endsection
@section('content')
<div class="card mb-5">
    <div class="card-header ">
        Post Information
    </div>
    <div class="card-body">
        <h5 class="card-title"><b>Title:-</b> {{$post->title}}</h5>
        <h5 class="card-title"><b>Description:-</b> {{$post['description']}}</h5>
        <p class="card-text"><b> created at : </b>{{$post->created_at->format('Y-m-d')}}</p>
    </div>
</div>
<div class="card mb-5">
    <div class="card-header">
        Post Creator Info
    </div>
    <div class="card-body">
        <h5 class="card-title"><b>User ID:- </b>{{$post->user->id}} </h5>
        <h5 class="card-title"><b>Name:- </b>{{$post->user->name}}</h5>
        <h5 class="card-title"><b>Email:- </b>{{$post->user->email}} </h5>
    </div>
</div>
@endsection
