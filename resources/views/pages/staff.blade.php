@extends('layouts.app-content')
@section('title', Lang::get('staff.title'))

@section('stylesheets')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/staff.css')}}">
@endsection

@section('content')
@section('page-title')
<h1>{{__('staff.title-staff')}}</h1>
@endsection
    <div class="container-fluid dotted">
        <div class="container" id="staff-container-fluid1">
            <h1>{{__('staff.title-staff')}}</h1>
            <table class="table table-bordered">
                <thead>
                <tr class="active">
                    <th>#</th>
                    <th>{{__('staff.foto-staff')}}</th>
                    <th>{{__('staff.name-staff')}}</th>
                    <th>{{__('staff.position-staff')}}</th>
                </tr>
                </thead>
                <tbody>
                @foreach($employees as $employee)
                <tr>
                    <td>{{$employee->id}}</td>
                    <td><img src="{{asset('images/employees/'. $employee->image)}}" class=" my-image"></td>
                    <td>{{App::isLocale ('ru')? $employee->full_name_ru : $employee->full_name_uz}}</td>
                    <td>{{App::isLocale ('ru')? $employee->position_ru : $employee->position_uz}}</td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!--//////////////////////////////////////////// end container-fluid7 /////////////////////////////////////////////////////////  -->

@endsection