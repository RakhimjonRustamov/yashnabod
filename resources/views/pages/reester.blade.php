@extends('layouts.app-content')
@section('title', Lang::get('reestr.title'))

@section('stylesheets')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/reester.css') }}">
@endsection

@section('content')
@section('page-title')
<h1>@lang('reestr.Реестер')</h1>
@endsection

    <div class="container-fluid dotted">
        <div class="container"  id="container-fluid-reception">
            <h1>@lang('reestr.Реестер')</h1>
            <div class="row">
                <div class="col-xs-12">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <th>№</th>
                                <th>@lang('reestr.Reyestr raqami')</th>
                                <th>@lang('reestr.Mulk Shakli')</th>
                                <th>@lang('reestr.Yuridik Shaxs nomi')</th>
                                <th>@lang('reestr.IFUT kodi')</th>
                                <th>@lang('reestr.Pochta Manzili')</th>
                                <th>@lang('reestr.E-mail')</th>
                                <th>@lang('reestr.Kiritilgan Sana')</th>
                            </thead>
                            <tbody>
                            @php($i=1)
                            @foreach($residents as $resident)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$resident->reg_number}}</td>
                                <td>{{App::isLocale ('ru')? $resident->ownership_ru: $resident->ownership_uz}}</td>
                                <td>{{App::isLocale ('ru')? $resident->resident_name_ru: $resident->resident_name_uz}}</td>
                                <td>{{$resident->code}}</td>
                                <td>{{App::isLocale ('ru')? $resident->resident_info_ru: $resident->resident_info_uz}}</td>
                                <td>{{$resident->email}}</td>
                                <td>{{$resident->created_at}}</td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div><!--end of .table-responsive-->
                </div>
            </div>

        </div>
    </div>
    <!--//////////////////////////////////////////// end container-fluid7 /////////////////////////////////////////////////////////  -->
@endsection