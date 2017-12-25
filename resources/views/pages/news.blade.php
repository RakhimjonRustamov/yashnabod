@extends('layouts.app-content')
@section('title'| 'News')@stop
@section('stylesheets')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/news.css') }}">
@endsection
@section('content')
@section('page-title')
<h1>Новости</h1>
@endsection

<div class="container-fluid  dotted">
    <div class="container" id="news-container-fluid1">
        <h1>Новости</h1>
    </div>
</div>

@endsection