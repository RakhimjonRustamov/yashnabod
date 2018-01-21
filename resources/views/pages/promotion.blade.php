@extends('layouts.app-content')
@section('title', 'Aim')

@section('stylesheets')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/promotion.css')}}">
@endsection
@section('content')
@section('page-title')
<h1>{!!__('promotion.title-prom')!!}</h1>
@endsection

    <div class="container-fluid container-fluid-promotion dotted" >
        <div class="container" >
            <h1 class="title">{!!__('promotion.title-prom')!!}</h1>

                <p>{!!__('promotion.text-prom1')!!}</p>
                <ul>
                    <li class="interval-promotion">{!!__('promotion.text-prom1.1')!!}</li>
                    <li class="interval-promotion">{!!__('promotion.text-prom1.2')!!}</li>
                    <li class="interval-promotion">{!!__('promotion.text-prom1.3')!!}</li>
                    <li class="interval-promotion">{!!__('promotion.text-prom1.4')!!}</li>
                    <li class="interval-promotion">{!!__('promotion.text-prom1.5')!!}</li>
                    <li class="interval-promotion">{!!__('promotion.text-prom1.6')!!}</li>
                </ul>

        </div>
    </div>
@endsection