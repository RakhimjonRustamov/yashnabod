@extends('layouts.app-content')
@section('title', 'Staff')

@section('stylesheets')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/staff.css')}}">
@endsection

@section('content')
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
                <tr>
                    <td>1.</td>
                    <td><img src="../photos/director.jpg" class=" my-image"></td>
                    <td>Ахмеджанов Надирджан Уткурджанович
                    </td>
                    <td>Директор
                    </td>
                </tr>
                <tr>
                    <td>1.</td>
                    <td><img src="../photos/director.jpg" class=" my-image"></td>
                    <td>Ахмеджанов Надирджан Уткурджанович
                    </td>
                    <td>Директор
                    </td>
                </tr>
                <tr>
                    <td>1.</td>
                    <td><img src="../photos/director.jpg" class=" my-image"></td>
                    <td>Ахмеджанов Надирджан Уткурджанович
                    </td>
                    <td>Директор
                    </td>
                </tr>
                <tr>
                    <td>1.</td>
                    <td><img src="../photos/director.jpg" class=" my-image"></td>
                    <td>Ахмеджанов Надирджан Уткурджанович
                    </td>
                    <td>Директор
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!--//////////////////////////////////////////// end container-fluid7 /////////////////////////////////////////////////////////  -->

@endsection