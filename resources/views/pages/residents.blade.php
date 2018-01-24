@extends('layouts.app-content')
@section('title', Lang::get('residents.title'))
@section('stylesheets')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/rezidents.css') }}">
@endsection

@section('content')
@section('page-title')
<h1>@lang('residents.Наши резиденты')</h1>
@endsection
<div class="container-fluid dotted">
    <div class="container" id="products-container-fluid1">
        <h1>@lang('residents.Наши резиденты')</h1>
        <div class="row">
            @foreach($residents as $resident)
            <div class="col-md-3 col-sm-3 col-md-3 products-column">
                <div class="products thumbnail" style="background-image: url('{{ asset('images/residents/'. $resident->resident_logo)}}')">
                </div>
                <div class="readmore-box">
                    <a href="{{url('residents/'.$resident->id)}}">
                        <div class="product-text">{{App::isLocale ('ru')? $resident->resident_info_ru: $resident->resident_info_uz}}</div>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
        {{$residents->links()}}
    </div>
</div>
@endsection


