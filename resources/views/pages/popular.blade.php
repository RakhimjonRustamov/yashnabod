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
            <div class="col-xs-12 col-sm-3 col-md-3 products-column">
                <div class="products thumbnail" style="background-image: url('https://www.lunapic.com/editor/images/slide22.jpg')">
                </div>
            </div>
            <div class="col-xs-12 col-sm-9 col-md-9">
                <div class="list-group">
                    <div class="list-group-item">
                        <h3 class="title"><a href="#">5 of Bali’s Spanking New Haunts - WanderLuxe Magazine</a></h3>
                        <p class="popular-text">Naturally, we know where Bali's newest restaurants are and what to order, so give that private chef a rest and check out these spanking new haunts.</p>
                    </div>
                </div>
                <div>
                    <button class="btn-primary ">Читать дальше</button>

                </div>
            </div>
        </div>
        <hr>


    </div>
    </div>
</div>
@endsection