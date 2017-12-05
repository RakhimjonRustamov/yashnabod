@extends('layouts.app')
@section('title'| 'Products')@stop
@section('stylesheets')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/products.css') }}">
@stop

@section('content')
    <div class="container dotted" id="products-container-fluid1">
        <h1>Наши продукции</h1>
        <div class="row">
            <div class="col-md-3 col-sm-3 col-md-3 products-column">
                <div class="products thumbnail" id="product1">
                </div>
                <div class="readmore-box">
                    <a href="">
                        <div class="product-text">Hello World</div>
                    </a>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-md-3 products-column">
                <div class="products thumbnail" id="product2">
                </div>
                <div class="readmore-box">
                    <a href="">
                        <div class="product-text">Hello World</div>
                    </a>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-md-3 products-column">
                <div class="products thumbnail" id="product3">
                </div>
                <div class="readmore-box">
                    <a href="">
                        <div class="product-text">Hello World</div>
                    </a>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-md-3 products-column">
                <div class="products thumbnail" id="product4">
                </div>
                <div class="readmore-box">
                    <a href="">
                        <div class="product-text">Hello World</div>
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-3 col-md-3 products-column">
                <div class="products thumbnail" id="product1">
                </div>
                <div class="readmore-box">
                    <a href="">
                        <div class="product-text">Hello World</div>
                    </a>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-md-3 products-column">
                <div class="products thumbnail" id="product2">
                </div>
                <div class="readmore-box">
                    <a href="">
                        <div class="product-text">Hello World</div>
                    </a>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-md-3 products-column">
                <div class="products thumbnail" id="product3">
                </div>
                <div class="readmore-box">
                    <a href="">
                        <div class="product-text">Hello World</div>
                    </a>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-md-3 products-column">
                <div class="products thumbnail" id="product4">
                </div>
                <div class="readmore-box">
                    <a href="">
                        <div class="product-text">Hello World</div>
                    </a>
                </div>
            </div>
        </div>
    </div>

@endsection


