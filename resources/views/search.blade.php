@extends('layouts.app-content')
@section('title'| 'News')@stop
@section('stylesheets')
<link rel="stylesheet" type="text/css" href="{{ asset('css/news.css') }}">
@endsection
@section('content')
@section('page-title')
        @foreach($residents as $resident)
        <h1>{{$resident}}</h1>
    @endforeach
    @foreach($products as $product)
        <h1>{{$product}}</h1>
    @endforeach
    @foreach($posts as $post)
        <h1>{{$post}}</h1>
    @endforeach
    {!! $posts->links()!!}

@endsection





















@endsection