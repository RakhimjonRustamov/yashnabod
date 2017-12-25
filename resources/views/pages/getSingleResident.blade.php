@extends('layouts.app-content')
@section('title', 'Single-resident')

@section('stylesheets')
<link rel="stylesheet" type="text/css" href="{{ asset('css/residents-single.css')}}">
@endsection

@section('content')
@section('page-title')
<h1>Информация о резиденте</h1>
@endsection
<!--///////////////////////////////////////// end container-fluid ////////////////////////////////////// -->
<div class="container-fluid dotted" id="products-single-container">
    <h1>Информация о резиденте</h1>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4 col-md-4 products-column">
                <div class="products thumbnail" style="background-image: url('{{ asset('images/residents/'. $resident->resident_logo)}}')">
                </div>

            </div>
            <div class="col-md-8">
                <h2>{{$resident->resident_name_ru}}</h2>
                <p class="product-information">
                    {{$resident->resident_info_ru}}
                </p>
            </div>
        </div>

    </div>
</div>
@endsection
