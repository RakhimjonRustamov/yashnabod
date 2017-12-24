@extends('layouts.app-content')
@section('title', 'Normative')

@section('stylesheets')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/normative.css') }}">
@endsection

@section('content')
@section('page-title')
<h1>Нормативно правовая база</h1>
@endsection
<div class="container-fluid dotted">
    <div class="container" id="normative-container-fluid1">
        <h1>Нормативно правовая база</h1>
        <ul>
            <li>Указ Президента Республики Узбекистан от 5 июня 2017 г. №УП-5068 «О создании инновационного технопарка в Яшнабадском районе города Ташкента»
                <br> <a href="{{route('normative.download', ['normative'=>$normatives[0]->id])}}" class="btn btn-default">
                    <i class="fa fa-download" aria-hidden="true"></i> Скачать файл
                </a>
            </li>
            <br>
            <li>Постановление Кабинета Министров от 2 сентября 2017 г. №686 «О мерах по комплексному развитию Яшнабадского района г.Ташкента»
                <br><a href="{{route('normative.download', ['normative'=>$normatives[1]->id])}}" class="btn btn-default">
                    <i class="fa fa-download" aria-hidden="true"></i> Скачать файл
                </a>
            </li>
            <br>
            <li>Постановление Кабинета Министров от 5 июля 2017 г. №468 «О мерах по организации деятельности инновационного технопарка в Яшнабадском районе города Ташкента»
              <br><a href="{{route('normative.download', ['normative'=>$normatives[2]->id])}}" class="btn btn-default">
                    <i class="fa fa-download" aria-hidden="true"></i> Скачать файл
                </a>
            </li>
            <br>
        </ul>
    </div>
</div>
@endsection