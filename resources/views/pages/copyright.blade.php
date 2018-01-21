@extends('layouts.app-content')
@section('title', 'Aim')

@section('stylesheets')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/copyright.css')}}">
@endsection
@section('content')
@section('page-title')
<h1>{!!__('copyright.title-copy')!!}</h1>
@endsection

    <div class="container-fluid container-fluid-copyright dotted" >
        <div class="container" >
            <h1 class="title">{!!__('copyright.title-copy')!!}</h1>
            <p>{!!__('copyright.text-copy')!!}</p>
        </div>
    </div>

@endsection