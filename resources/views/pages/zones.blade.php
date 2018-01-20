@extends('layouts.app-content')
@section('title', 'Zones')

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
            <p>{{__('zones.info-text')}}Кабинетом Министров поручено хокимияту г.Ташкента в двухмесячный срок обеспечить передислокацию рынка в Бектемирский район г.Ташкента, а также передать половину территории рынка «Янгиабад», более известного в народе как «тезиковка», ГУП «Дирекция инновационного технопарка «Яшнабад»». Таким образом, на территории около 7,5 гектаров планируется разместить инновационные производства, основанные на научных разработках отечественных и международных специалистов и специализирующиеся на производстве инновационной, не производимой в республике и имеющей высокую научную составляющую продукции.</p>
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