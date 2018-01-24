@extends('layouts.app-content')
@section('title', Lang::get('cordination.title'))@stop
@section('stylesheets')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/coordinating-council.css') }}">
@endsection

@section('content')
@section('page-title')
<h1>{{__('cordination.title-cor')}}</h1>
@endsection
    <div class="container-fluid dotted">
        <div class="container" id="container-fluid-coordinating-council1">
            <h1>{{__('cordination.title-cor')}}</h1>
            <p>{!!__('cordination.text-cor')!!}</p>
        </div>
    </div>
@endsection