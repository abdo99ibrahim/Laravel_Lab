@extends('layouts.app')
@section('title')Show Page @endsection
@section('content')
<div class="card mb-5">
    <div class="card-header ">
        Post Information
    </div>
    <div class="card-body">
        <h5 class="card-title"><b>Title:-</b> {{$post->title}}</h5>
        <b>Description:-</b>
        <p class="card-text">{{$post ->description}}</p>
    </div>
</div>
<div class="card mb-5">
    <div class="card-header">
        Post Creator Info
    </div>
    <div class="card-body">
        <h5 class="card-title"><b>Name:- </b>Abdo</h5>
        <h5 class="card-title"><b>Email:- </b>Abdo@hotmail.com </h5>
        <h5 class="card-title"><b>Created At:- </b>Thusday 24th of April 1999 </h5>
    </div>
</div>
@endsection
