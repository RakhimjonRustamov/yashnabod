@extends('layouts.app-content')
@section('title', Lang::get('zones.title'))

@section('stylesheets')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/zones.css')}}">
@endsection

@section('content')
@section('page-title')
<h1>{{__('zones.title-zones')}}</h1>
@endsection

    <div class="container-fluid dotted">
        <div class="container" id="container-fluid-zones">
            <h1>{{__('zones.title-zones')}}</h1>
            <h2>{{__('zones.title-zones1')}}</h2>
            <p>{!!__('zones.info-text')!!}</p>
        </div>
    </div>
    <div class="container-fluid dotted">
        <div id="map"></div>
        <script>
            function myMap() {
                var myCenter = new google.maps.LatLng(41.338525, 69.334530);
                var mapCanvas = document.getElementById("map");
                var mapOptions = { center: myCenter, zoom: 16 };
                var map = new google.maps.Map(mapCanvas, mapOptions);
                var marker = new google.maps.Marker({ position: myCenter });
                marker.setMap(map);
            }
        </script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCO3V_l-v18dpKR2fG7jv7tTsKgYeMWyVI&callback=myMap"></script>
    </div>

@endsection