@extends('layouts.app-content')
@section('title', Lang::get('contact.title'))
@section('stylesheets')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/contact.css') }}">
@endsection
@section('content')
@section('page-title')
<h1>{{__('contact.title-contact')}}</h1>
@endsection
    <div class="container-fluid dotted" id="container-fluid-contacts1">
        <h1>{{__('contact.title-contact')}}</h1>
        <div class="row" id="row-contacts">
            <div class="col-md-5">
                <!--                Main information    start -->
                <h1 id="adress">{{__('contact.address')}}</h1>
                <div>
                    <hr>
                </div>
                <p id="contacts-info">{{__('contact.contacts-info1')}}</p>
                <p id="contacts-info">{{__('contact.contacts-info2')}}</p>
                <p id="contacts-info">{{__('contact.contacts-info4')}}</p>
                <p id="contacts-info">{{__('contact.contacts-info5')}}</p>
                <h2 id="contact-us">{{__('contact.contacts-info6')}}</h2>
                <!--          Main informatiom  end       -->
                <!--        Form start                  -->
                <form action="{{route('contact')}}" method="POST">
                    {{csrf_field()}}
                    <div class="row row-contacts">
                        <div class="col-md-6" class="contacts-form">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="{{__('contact.name-placeholder')}}:*" name="name" required="required">
                            </div>
                        </div>
                        <div class="col-md-6" class="contacts-form">
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="{{__('contact.email-placeholder')}}:*" name="email" required="required">
                            </div>
                        </div>
                    </div>
                    <div class="row row-contacts">
                        <div class="col-md-12" class="contacts-form">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="{{__('contact.theme-placeholder')}}:*" name="subject" required="required">
                            </div>
                        </div>
                    </div>
                    <div class="row row-contacts">
                        <div class="col-md-12" class="contacts-form">
                            <div class="form-group">
                                <textarea class="form-control" name="message" placeholder="{{__('contact.message-placeholder')}}:*" rows="5" cols="60"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row row-contacts">
                        <div class="col-md-4" class="contacts-form">
                            <button type="submit" class="btn" id="contact-us-button">{{__('contact.sending')}}</button>
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
