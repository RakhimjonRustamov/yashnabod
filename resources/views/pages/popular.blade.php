@extends('layouts.app-content')
@section('title', 'Popular')

@section('stylesheets')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/popular.css') }}">
@endsection

@section('content')
@section('page-title')
<h1>СМИ о нас</h1>
@endsection
<div class="container-fluid dotted">
    <div class="container" id="products-container-fluid1">
        <h1>Наши продукции</h1>
    <div class="row">
        <hr>
        <div class="row">
            @foreach($popularities as $popularity)
            <div class="col-xs-12 col-sm-3 col-md-3 products-column">
                <div class="products thumbnail" style="background-image: url('{{asset('images/popular/'.$popularity->image)}}')">
                </div>
            </div>
            <div class="col-xs-12 col-sm-9 col-md-9">
                <div class="list-group">
                    <div class="list-group-item">
                        <h3 class="title"><a href="#">5 of Bali’s Spanking New Haunts - WanderLuxe Magazine</a></h3>
                        <p class="popular-text">{{$popularity->popular_info_ru}}</p>
                    </div>
                </div>
                <div>
                    <a href="https://{{ $popularity->link  }}" class="btn btn-primary">Читать дальше</a>
                </div>
            </div>
                @endforeach
        </div>
        <hr>


    </div>
    </div>
</div>
@endsection