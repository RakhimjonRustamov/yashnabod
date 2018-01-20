@extends('layouts.app-content')
@section('title', 'Aim')

@section('stylesheets')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/aim.css')}}">
@endsection

@section('content')
        @section('page-title')
        <h1>{{__('aim.title-aim')}}</h1>
        @endsection
    <div class="container-fluid dotted" id="container-fluid-aim">
        <div class="container">
            <div >
                <button class="accordion">{{__('aim.title-aim1')}}</button>
                <div class="panel">
                    <ul class="interval-aim">
                        <li class="interval-aim">{{__('aim.title-aim1.1')}}</li>
                        <li class="interval-aim">{{__('aim.title-aim1.2')}}</li>
                        <li class="interval-aim">{{__('aim.title-aim1.3')}}</li>
                        <li class="interval-aim">{{__('aim.title-aim1.4')}}</li>
                    </ul>
                </div>
            </div>
            <div >
                <button class="accordion">{{__('aim.title-aim2')}}</button>
                <div class="panel">
                    <ul class="interval-aim">
                        <li class="interval-aim">{{__('aim.title-aim2.1')}}</li>
                        <li class="interval-aim">{{__('aim.title-aim2.2')}}</li>
                        <li class="interval-aim">{{__('aim.title-aim2.3')}}</li>
                        <li class="interval-aim">{{__('aim.title-aim2.4')}}</li>
                        <li class="interval-aim">{{__('aim.title-aim2.5')}}</li>
                        <li class="interval-aim">{{__('aim.title-aim2.6')}}</li>
                        <li class="interval-aim">{{__('aim.title-aim2.7')}}</li>
                        <li class="interval-aim">{{__('aim.title-aim2.8')}}</li>
                        <li class="interval-aim">{{__('aim.title-aim2.9')}}</li>
                    </ul>
                </div>
            </div>
            <div >
                <button class="accordion">{{__('aim.title-aim3')}}</button>
                <div class="panel">
                    <ul class="interval-aim">
                        <li class="interval-aim">{{__('aim.title-aim3.1')}}</li>
                        <li class="interval-aim">{{__('aim.title-aim3.2')}}</li>
                        <li class="interval-aim">{{__('aim.title-aim3.3')}}</li>
                        <li class="interval-aim">{{__('aim.title-aim3.4')}}</li>
                        <li class="interval-aim">{{__('aim.title-aim3.5')}}</li>
                        <li class="interval-aim">{{__('aim.title-aim3.6')}}</li>
                        <li class="interval-aim">{{__('aim.title-aim3.7')}}</li>
                        <li class="interval-aim">{{__('aim.title-aim3.8')}}</li>
                        <li class="interval-aim">{{__('aim.title-aim3.9')}}</li>
                        <li class="interval-aim">{{__('aim.title-aim3.10')}}</li>
                        <li class="interval-aim">{{__('aim.title-aim3.11')}}</li>
                    </ul>
                </div>
            </div>
            <div >
                <button class="accordion">{{__('aim.title-aim4')}}</button>
                <div class="panel">
                    <ul class="interval-aim">
                        <li class="interval-aim">{{__('aim.title-aim4.1')}}</li>
                        <li class="interval-aim">{{__('aim.title-aim4.2')}}</li>
                        <li class="interval-aim">{{__('aim.title-aim4.3')}}</li>
                        <li class="interval-aim">{{__('aim.title-aim4.4')}}</li>
                        <li class="interval-aim">{{__('aim.title-aim4.5')}}</li>
                    </ul>
                    <p id="information-bold">{{__('aim.title-aim4.6')}}</p>
                </div>
            </div>

            <div >
                <button class="accordion">{{__('aim.title-aim5')}}</button>
                <div class="panel">
                    <img class="img-responsive" src="{{asset('../images/photos/structure.jpg')}}">
                </div>
            </div>
        </div>
    </div>
@endsection