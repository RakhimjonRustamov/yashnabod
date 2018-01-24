@extends('layouts.app-content')
@section('title', Lang::get('credits.title'))

@section('stylesheets')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/credits.css')}}">
@endsection
@section('content')
@section('page-title')
<h1>{!!__('credits.title-credits')!!}</h1>
@endsection

    <div class="container-fluid container-fluid-credits dotted" >
        <div class="container" >
            <h1 class="title">{!!__('credits.title-credits')!!}</h1>
            <ul>
                <li class="interval-credits">{!!__('credits.text-credits1')!!}</li>
                <li class="interval-credits">{!!__('credits.text-credits2')!!}</li>
                <li class="interval-credits">{!!__('credits.text-credits3')!!}</li>
            </ul>
        </div>
    </div>


@endsection