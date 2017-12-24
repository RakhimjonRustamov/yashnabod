@extends('layouts.app-content')
@section('title', 'Single-product')

@section('stylesheets')
<link rel="stylesheet" type="text/css" href="{{ asset('css/residents-single.css')}}">
@endsection

@section('content')
@section('page-title')
<h1>Информация о продукте</h1>
@endsection
<div class="container-fluid " id="other-container-fluid">
    <div class="container" id="fade-container">
        <h1>Информация о продукте</h1>
        <hr width="400px"><hr width="50px">
        <div class="row">
            <div class="submit-wrapper">
                <a href="#">Подать заявку</a>
            </div>
        </div>
    </div>
</div>
<!--///////////////////////////////////////// end container-fluid ////////////////////////////////////// -->
<div class="container-fluid dotted" id="products-single-container">
    <h1>Product Single</h1>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div id="products-single" class="thumbnail"></div>
            </div>
            <div class="col-md-8">
                <h2>{{$product->product_name_ru}}</h2>
                <p class="product-information">
                    {{$product->product_info_uz}}
                </p>
            </div>
        </div>

    </div>
</div>
@endsection



