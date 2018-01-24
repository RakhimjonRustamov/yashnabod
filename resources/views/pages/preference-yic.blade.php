@extends('layouts.app-content')
@section('title', Lang::get('preference.title'))
@section('stylesheets')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/whyYIC.css')}}">
@endsection
@section('content')
       @section('page-title')
        <h1>{{__('preference.title-preference')}}</h1>
       @endsection
                <div class="container-fluid dotted">
                    <div class="container" id="why-container-fluid1">
                        <h1>{{__('preference.title-preference')}}</h1>
                        <p>{!!__('preference.text-preference')!!}</p>
                    </div>
                </div>
@endsection
