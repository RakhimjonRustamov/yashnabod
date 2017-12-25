@extends('layouts.app-content')
@section('title', 'Single-product')

@section('stylesheets')
<link rel="stylesheet" type="text/css" href="{{ asset('css/products-single.css')}}">
@endsection

@section('content')
@section('page-title')
<h1>Информация о продукте</h1>
@endsection
<!--///////////////////////////////////////// end container-fluid ////////////////////////////////////// -->
<div class="container-fluid dotted" id="products-single-container">
    <h1>Product Single</h1>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div id="products-single" class="thumbnail" style="background-image: url('{{ asset('images/products/'. $product->product_image)}}')"></div>
            </div>

            <div class="col-md-8">
                <h2>{{App::isLocale ('ru')? $product->product_name_ru: $product->product_name_uz}}</h2>
                <p class="product-information">
                    {{App::isLocale ('ru')? $product->product_info_ru: $product->product_info_uz}}
                </p>
            </div>
        </div>
        </div>
    </div>
</div>
@endsection



