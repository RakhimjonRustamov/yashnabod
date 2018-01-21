@extends('layouts.app-content')
@section('title', 'Aim')

@section('stylesheets')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/aim.css')}}">
@endsection

@section('content')
        @section('page-title')
        <h1>{{__('main.maininfo')}}</h1>
        @endsection
    <div class="container-fluid dotted" id="container-fluid-aim">
        <div class="container">
            <div >
                <button class="accordion">{{__('main.acordion1')}}</button>
                <div class="panel">
                    <ul class="interval-aim">
                        <li class="interval-aim">{{__('main.aim1')}}</li>
                        <li class="interval-aim">{{__('main.aim2')}}</li>
                        <li class="interval-aim">{{__('main.aim3')}}</li>
                        <li class="interval-aim">{{__('main.aim4')}}</li>
                    </ul>
                </div>
            </div>
            <div >
                <button class="accordion">{{__('main.acordion2')}}</button>
                <div class="panel">
                    <ul class="interval-aim">
                        <li class="interval-aim">{{__('main.aim5')}}</li>
                        <li class="interval-aim">{{__('main.aim6')}}</li>
                        <li class="interval-aim">{{__('main.aim7')}}</li>
                        <li class="interval-aim">{{__('main.aim8')}}</li>
                        <li class="interval-aim">{{__('main.aim9')}}</li>
                        <li class="interval-aim">{{__('main.aim10')}}</li>
                        <li class="interval-aim">{{__('main.aim11')}}</li>
                        <li class="interval-aim">{{__('main.aim12')}}</li>
                        <li class="interval-aim">{{__('main.aim13')}}</li>
                    </ul>
                </div>
            </div>
            <div >
                <button class="accordion">{{__('main.acordion3')}}</button>
                <div class="panel">
                    <ul class="interval-aim">
                        <li class="interval-aim">{{__('main.aim14')}}</li>
                        <li class="interval-aim">{{__('main.aim15')}}</li>
                        <li class="interval-aim">{{__('main.aim16')}}</li>
                        <li class="interval-aim">{{__('main.aim17')}}</li>
                        <li class="interval-aim">{{__('main.aim18')}}</li>
                        <li class="interval-aim">{{__('main.aim19')}}</li>
                        <li class="interval-aim">{{__('main.aim20')}}</li>
                        <li class="interval-aim">{{__('main.aim21')}}</li>
                        <li class="interval-aim">{{__('main.aim22')}}</li>
                        <li class="interval-aim">{{__('main.aim23')}}</li>
                        <li class="interval-aim">{{__('main.aim24')}}</li>
                    </ul>
                </div>
            </div>
            <div >
                <button class="accordion">{{__('main.acordion4')}}</button>
                <div class="panel">
                    <ul class="interval-aim">
                        <li class="interval-aim">химические технологии, биотехнологии, фармацевтика и медицинская биотехнология, средства защиты растений;</li>
                        <li class="interval-aim">материаловедение, технологии обработки металлов, сейсмостойкость, строительные материалы;</li>
                        <li class="interval-aim">пищевая промышленность;</li>
                        <li class="interval-aim">энергосбережение, производство альтернативных и возобновляемых источников энергии;</li>
                        <li class="interval-aim">электронные измерительные приборы, робототехника, машиностроение, электротехника.</li>
                    </ul>
                    <p id="information-bold">Области специализации технопарка «Яшнабад» могут быть расширены по решению Координационного совета.</p>
                </div>
            </div>

            <div >
                <button class="accordion">Структура технопарка "Яшнабад"</button>
                <div class="panel">
                    <img class="img-responsive" src="{{asset('../images/photos/structure.jpg')}}">
                </div>
            </div>
        </div>
    </div>
@endsection