@extends('layouts.app-content')
@section('title', Lang::get('normative.title'))

@section('stylesheets')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/normative.css') }}">
@endsection

@section('content')
@section('page-title')
<h1>@lang('normative.Нормативно правовая база')</h1>
@endsection
<div class="container-fluid dotted">
    <div class="container" id="normative-container-fluid1">
        <h1>@lang('normative.Нормативно правовая база')</h1>
        <ul>
            @if(App::isLocale('ru'))
            <li>@lang('normative.Указ Президента Республики Узбекистан от 5 июня 2017 г. №УП-5068 «О создании инновационного технопарка в Яшнабадском районе города Ташкента»')
                <br> <a href="{{route('normative.download', ['normative'=>$normatives[0]->id])}}" class="btn btn-default">
                    <i class="fa fa-download" aria-hidden="true"></i> @lang('normative.Скачать файл')
                </a>
            </li>
            @else
                <li>@lang('normative.Указ Президента Республики Узбекистан от 5 июня 2017 г. №УП-5068 «О создании инновационного технопарка в Яшнабадском районе города Ташкента»')
                    <br> <a href="{{route('normative.download', ['normative'=>$normatives[1]->id])}}" class="btn btn-default">
                        <i class="fa fa-download" aria-hidden="true"></i> @lang('normative.Скачать файл')
                    </a>
                </li>
            @endif
            <br>
                @if(App::isLocale('ru'))
            <li>@lang('normative.Постановление Кабинета Министров от 2 сентября 2017 г. №686 «О мерах по комплексному развитию Яшнабадского района г.Ташкента»')
                <br><a href="{{route('normative.download', ['normative'=>$normatives[2]->id])}}" class="btn btn-default">
                    <i class="fa fa-download" aria-hidden="true"></i> @lang('normative.Скачать файл')
                </a>
            </li>
                @else
                    <li>@lang('normative.Постановление Кабинета Министров от 2 сентября 2017 г. №686 «О мерах по комплексному развитию Яшнабадского района г.Ташкента»')
                        <br><a href="{{route('normative.download', ['normative'=>$normatives[3]->id])}}" class="btn btn-default">
                            <i class="fa fa-download" aria-hidden="true"></i> @lang('normative.Скачать файл')
                        </a>
                    </li>
                @endif
            <br>
                @if(App::isLocale('ru'))
            <li>@lang('normative.Постановление Кабинета Министров от 5 июля 2017 г. №468 «О мерах по организации деятельности инновационного технопарка в Яшнабадском районе города Ташкента»')
              <br><a href="{{route('normative.download', ['normative'=>$normatives[4]->id])}}" class="btn btn-default">
                    <i class="fa fa-download" aria-hidden="true"></i> @lang('normative.Скачать файл')
                </a>
            </li>
                @else
                    <li>@lang('normative.Постановление Кабинета Министров от 5 июля 2017 г. №468 «О мерах по организации деятельности инновационного технопарка в Яшнабадском районе города Ташкента»')
                        <br><a href="{{route('normative.download', ['normative'=>$normatives[5]->id])}}" class="btn btn-default">
                            <i class="fa fa-download" aria-hidden="true"></i> @lang('normative.Скачать файл')
                        </a>
                    </li>
                @endif
                <br>
        </ul>
    </div>
</div>
@endsection