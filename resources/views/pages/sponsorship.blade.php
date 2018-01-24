@extends('layouts.app-content')
@section('title', Lang::get('sponsorship.title'))

@section('stylesheets')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/sponsorship.css')}}">
@endsection
@section('content')
@section('page-title')
<h1>{!!__('sponsorship.title-spons')!!}</h1>
@endsection

    <div class="container-fluid container-fluid-sponsorship dotted">
        <div class="container">
            <h1 class="title">{!!__('sponsorship.title-spons')!!}</h1>
            <p>{!!__('sponsorship.text-spons0')!!}</p>
            <ul>
                <li class="interval-promotion">{!!__('sponsorship.text-spons1')!!}</li>
                <li class="interval-promotion">{!!__('sponsorship.text-spons2')!!}</li>
                <li class="interval-promotion">{!!__('sponsorship.text-spons3')!!}</li>
                <li class="interval-promotion">{!!__('sponsorship.text-spons4')!!}</li>

            </ul>
        </div>
    </div>

@endsection