@extends('layouts.app-content')
@section('title', 'Reester')

@section('stylesheets')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/reester.css') }}">
@endsection

@section('content')
@section('page-title')
<h1>Реестер</h1>
@endsection

    <div class="container-fluid dotted">
        <div class="container"  id="container-fluid-reception">
            <h1>Реестер</h1>
            <div class="row">
                <div class="col-xs-12">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <th>№</th>
                                <th>Reyestr raqami</th>
                                <th>Mulk Shakli</th>
                                <th>Yuridik Shaxs nomi</th>
                                <th>IFUT kodi</th>
                                <th>Pochta Manzili</th>
                                <th>E-mail</th>
                                <th>Kiritilgan Sana</th>
                            </thead>
                            <tbody>
                            @php($i=1)
                            @foreach($residents as $resident)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$resident->reg_number}}</td>
                                <td>{{$resident->ownership_ru}}</td>
                                <td>{{$resident->resident_name_ru}}</td>
                                <td>{{$resident->code}}</td>
                                <td>{{$resident->resident_info_ru}}</td>
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