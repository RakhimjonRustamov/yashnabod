@extends('layouts.app-content')
@section('title', Lang::get('products.title'))@stop

@section('stylesheets')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/products.css') }}">
@endsection

@section('content')
@section('page-title')
<h1>{{__('products.title-products')}}</h1>
@endsection
<div class="container-fluid dotted">
    <div class="container" id="products-container-fluid1">
        <h1>{{__('products.title-products')}}</h1>
        <div class="row">
            @foreach($products as $product)
            <div class="col-md-3 col-sm-3 col-md-3 products-column">
                <div class="products thumbnail" style="background-image: url('{{ asset('images/products/'. $product->product_image)}}')">
                </div>
                <div class="readmore-box">
                    <a href="{{url('products/'.$product->id)}}">
                        <div class="product-text">{{App::isLocale ('ru')? $product->product_info_ru: $product->product_info_uz}}</div>
                    </a>
                </div>
            </div>
            @endforeach

        </div>

        <div class="pagination text-center" style="float: right;">
            {{$products->links()}}
        </div>
    </div>
</div>
@endsection


