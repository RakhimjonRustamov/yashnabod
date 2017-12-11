@extends('layouts.admin-layout')
@section('title', "| $post->title_ru")
@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <img src="{{ asset('images/posts/'. $post->image)}}" height="400" width="750"/>
            <h1>{{ strip_tags($post->title_ru)}}</h1>
            <p class="lead">{{ strip_tags($post->body_ru)}}</p>
        </div>
    </div>
@endsection