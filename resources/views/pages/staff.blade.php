@extends('layouts.app-content')
@section('title', 'Staff')

@section('stylesheets')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/staff.css')}}">
@endsection

@section('content')
@section('page-title')
<h1>Сотрудники</h1>
@endsection
    <div class="container-fluid dotted">
        <div class="container" id="staff-container-fluid1">
            <h1>Сотрудники</h1>
            <table class="table table-bordered">
                <thead>
                <tr class="active">
                    <th>No</th>
                    <th>Фото</th>
                    <th>Ф.И.О.</th>
                    <th>Должность</th>
                </tr>
                </thead>
                <tbody>
                @foreach($employees as $employee)
                <tr>
                    <td>{{$employee->id}}</td>
                    <td><img src="{{asset('images/employees/'. $employee->image)}}" class=" my-image"></td>
                    <td>{{$employee->full_name_ru}}</td>
                    <td>{{$employee->position_ru}}</td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!--//////////////////////////////////////////// end container-fluid7 /////////////////////////////////////////////////////////  -->

@endsection