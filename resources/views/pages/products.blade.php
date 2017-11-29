@extends('layouts.app')
@section('title'| 'Products')@stop
@section('stylesheets')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/products.css') }}">
@stop

@section('content')

    <div class="container dotted" id="products-container-fluid1">
        <h1>Наши продукции</h1>
        <div class="row" id="row1">
            <div class="col-md-3 col-sm-12 img-col">
                <img class="image" src="{{asset('images/photos/technology.jpg')}}">
                <a href="">
                    <div class="middle">
                        <div class="text1">Смотреть</div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-sm-12 img-col">
                <img class="image" src="{{asset('images/photos/technology.jpg')}}">
                <a href="">
                    <div class="middle">
                        <div class="text1">Смотреть</div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-sm-12 img-col">
                <img class="image" src="{{asset('images/photos/technology.jpg')}}">
                <a href="">
                    <div class="middle">
                        <div class="text1">Смотреть</div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-sm-12 img-col">
                <img class="image" src="{{asset('images/photos/technology.jpg')}}">
                <a href="">
                    <div class="middle">
                        <div class="text1">Смотреть</div>
                    </div>
                </a>
            </div>
        </div>
        <div class="row" id="row2">
            <div class="col-md-3 col-sm-12 img-col">
                <img class="image" src="{{asset('images/photos/technology.jpg')}}">
                <a href="">
                    <div class="middle">
                        <div class="text1">Смотреть</div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-sm-12 img-col">
                <img class="image" src="{{asset('images/photos/technology.jpg')}}">
                <a href="">
                    <div class="middle">
                        <div class="text1">Смотреть</div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-sm-12 img-col">
                <img class="image" src="{{asset('images/photos/technology.jpg')}}">
                <a href="">
                    <div class="middle">
                        <div class="text1">Смотреть</div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-sm-12 img-col">
                <img class="image" src="{{asset('images/photos/technology.jpg')}}">
                <a href="">
                    <div class="middle">
                        <div class="text1">Смотреть</div>
                    </div>
                </a>
            </div>
        </div>
    </div>

@endsection


