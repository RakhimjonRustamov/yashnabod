@extends('layouts.app-content')
@section('title', Lang::get('popular.title'))

@section('stylesheets')
<link rel="stylesheet" type="text/css" href="{{ asset('css/popular.css') }}">
@endsection

@section('content')
@section('page-title')
<h1>{{__('popular.title-popular')}}</h1>
@endsection
<div class="container-fluid dotted">
    <div class="container" id="products-container-fluid1">
        <h1>{{__('popular.title-popular')}}</h1>

        <div class="row">
            @foreach($popularities as $popularity)
            <div class="col-md-4 col-xs-12 col-sm-6">
                <div class="popular-column" style="padding: 10px; margin: 10px;">
                    <div class="popular-photo"
                         style="background-image: url('{{asset('images/popular/'.$popularity->image)}}')">
                    </div>
                    <div class="popular-text">
                        <div class="text-div">
                            <p class="popular-text">{{App::isLocale('ru') ? (substr($popularity->popular_info_ru, 0, 50)) : (substr($popularity->popular_info_uz, 0, 50)) }}</p>
                        </div>
                    </div>
                    <a href="https://{{ $popularity->link  }}" class="btn btn-primary button-read">{{__('popular.read-more')}}</a>
                    <br>
                    <br>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection