@extends('layouts.app-content')
@section('title',Lang::get('preference.title'))

@endsection

@section('stylesheets')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/whyYIC.css')}}">
@endsection
@section('content')
       @section('page-title')
        <h1>{{__('main.preference')}}</h1>
       @endsection
                <div class="container-fluid dotted">
                    <div class="container" id="why-container-fluid1">
                        <h1>{{__('main.preference')}}</h1>
                        <p>{{__('main.technoP')}}</p>
                        <p>@lang('main.Кроме того,на сегодняшний день действует дирекция инновационного технопарка, а также начат прием заявок во включение в резиденты технопарка,которым предоставляются налоговые льготы в виде освобождения от уплаты единого налогового платежа сроком до 10 лет, преференции в виде возможности получения кредитов под 7%, а также производственные площади.')</p>
                        <p>@lang('main.Приоритетными направлениями деятельности технопарка являются:')
                                                                        <ol>
                                                                            <li>@lang('main.химические технологии, биотехнологии, фармацевтика, защита растений;')</li>
                                                                            <li>@lang('main.материаловедение, технологии обработки металлов')</li>
                                                                            <li>@lang('main.пищевая промышленность')</li>
                                                                            <li>@lang('main.электронные измерительные приборы, робототехника, машиностроение, электротехника')</li>
                                                                        </ol>
                                                                        </p>
                        <p>@lang('main.Области специализации технопарка «Яшнабад» могут быть расширены по решению Координационного совета.')</p>
                    </div>
                </div>
@endsection
