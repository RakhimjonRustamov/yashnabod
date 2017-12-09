@extends('layouts.app')
@section('title'| 'Contact')@stop
@section('stylesheets')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/contact.css') }}">
@endsection
@section('content')
    <div class="container-fluid dotted" id="container-fluid-contacts1">
        <h1>Контакты</h1>
        <div class="row" id="row-contacts">
            <div class="col-md-5">
                <!--                Main information    start -->
                <h1 id="adress">Адрес</h1>
                <div>
                    <hr>
                </div>
                <p id="contacts-info">Офис: г. Ташкент, М. Улугбекский район, ул. Зиёлилар, 13a</p>
                <p id="contacts-info">Тел: +998 71 289-99-94</p>
                <p id="contacts-info">Факс: +998 71 269-00-58</p>
                <p id="contacts-info">Email : info@muic.uz</p>
                <p id="contacts-info">Веб-сайт: www.muic.uz</p>
                <h2 id="contact-us">Связаться с нами</h2>
                <!--          Main informatiom  end       -->
                <!--        Form start                  -->
                <form action="{{route('contact')}}" method="POST">
                    {{csrf_field()}}
                    <div class="row row-contacts">
                        <div class="col-md-6" class="contacts-form">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Имя:*" name="name" required="required">
                            </div>
                        </div>
                        <div class="col-md-6" class="contacts-form">
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Email:*" name="email" required="required">
                            </div>
                        </div>
                    </div>
                    <div class="row row-contacts">
                        <div class="col-md-12" class="contacts-form">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Тема:*" name="subject" required="required">
                            </div>
                        </div>
                    </div>
                    <div class="row row-contacts">
                        <div class="col-md-12" class="contacts-form">
                            <div class="form-group">
                                <textarea class="form-control" name="message" placeholder="Сообщение:*" rows="5" cols="60"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row row-contacts">
                        <div class="col-md-4" class="contacts-form">
                            <button type="submit" class="btn" id="contact-us-button">Отправить</button>
                        </div>
                    </div>
                </form>
                <!--                Form end       -->
            </div>
            <!---       Map start                  -->
            <div class="col-md-7 col-sm-12 col-xs-12" id="myMap">
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
        </div>
    </div>
    <!--      Map end                   -->
@endsection
