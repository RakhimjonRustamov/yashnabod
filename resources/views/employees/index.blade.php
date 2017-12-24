@extends('layouts.admin-layout')
@section('title', '|Bсе сотрудники')
<style>
    .mybtn1 li{
        display:inline-block;
    }
    .mybtn{
        margin-left:10px;
    }
</style>
@section('content')
    @include('partials._message')
    <div class="row">
        <div class="col-md-8">
            <table class="table">
                <thead>
                <th>#</th>
                <th>Имя сотрудника</th>
                <th>Должность сотрудника</th>
                <th>Создан в</th>
                <th></th>
                </thead>
                <tbody>
                @foreach($employees as $employee)
                    <tr>
                            <td>{{ $employee->id}}</td>
                            <td>{{ $employee->full_name_ru}}</td>
                            <td>{{ $employee->position_ru }}</td>
                            <td>{{ date('M j, Y H:ia',strtotime($employee->created_at))}}</td>
                            <td>
                            <td>
                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#{{ $employee->id}}" id="b2">View</button>
                                <!-- Modal -->
                                <div class="modal fade" id="{{ $employee->id }}" role="dialog">
                                    <div class="modal-dialog">

                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img src="{{ asset('images/employees/'. $employee->image)}}" height="300px" width="555px"/>
                                                <h3><span>{{$employee->full_name_ru}}</span></h3>
                                                <p>{{$employee->position_ru}}</p>
                                            </div>
                                            <div class="modal-footer">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        {{ Form::open(['method' => 'DELETE', 'route' => ['employees.destroy', $employee->id]]) }}
                                                        {{ Form::submit('УДАЛИТЬ', ['class' => 'btn btn-danger btn-block']) }}
                                                        {{ Form::close() }}
                                                        {{--<form action="{{url('admin/employees/'.$employee->id)}}" method='post'>
                                                            {{ method_field('DELETE') }}
                                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                            <button type="submit" class="btn btn-danger btn-block mybtn">Delete</button>
                                                        </form>--}}
                                                    </div>
                                                    <div class="col-md-6">
                                                        <button type="button" class="btn btn-primary btn-block" data-dismiss="modal">ОТМЕНА</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#edit-{{ $employee->id}}" id="b2">&nbspEdit&nbsp;</button>
                                <!-- Modal -->
                                <div class="modal fade" id="edit-{{ $employee->id }}" role="dialog">
                                    <div class="modal-dialog">

                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                {!! Form::model($employee, ['route'=> ['employees.update', $employee->id], 'method'=>'PUT', 'files'=>true])!!}
                                                {{ Form::label('full_name_uz', 'Xodimning Ismi:')}}
                                                {{ Form::text('full_name_uz', null, ['class'=>'form-control'])}}
                                                {{ Form::label('full_name_ru', 'Имя сотрудника:') }}
                                                {{ Form::text('full_name_ru', null, array('class'=>'form-control', 'required'=>'')) }}
                                                <label name="featured_image" style="margin-top:10px">Загрузить новое изображение</label>
                                                <input type="file" name="featured_image">
                                                <img src="{{ asset('images/employees/'. $employee->image)}}" height="60" width="80"/>
                                                <p>{{ Form::label('position_uz', 'Xodim Lavozimi:')}}</p>
                                                {{ Form::textarea('position_uz', null, ['class'=>'form-control'])}}
                                                <p>{{ Form::label('position_ru', 'Должность сотрудника:')}}</p>
                                                {{ Form::textarea('position_ru', null, ['class'=>'form-control'])}}
                                            </div>
                                            <div class="modal-footer">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        {{ Form::submit('Сохранить изменения', ['class'=>'btn btn-success btn-block'])}}
                                                        {!! Form::close()!!}
                                                    </div>
                                                    <div class="col-md-6">
                                                        <button type="button" class="btn btn-primary btn-block" data-dismiss="modal">Отмена</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {!! $employees->links()!!}
        </div>

        <!-- Begining of FORM -->
        <div class="col-md-4">
            <div>
                <h1 align="center">Создать нового сотрудника</h1>
                <form action="{{ route('employees.store')}}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <label>Имя сотрудника:</label>
                    <input type="text" name="full_name_uz" placeholder="Узбек" required="required" class="form-control">
                    <input type="text" name="full_name_ru" placeholder="Pусский" required="required" class="form-control">
                    <label>Загрузить изображение:</label>
                    <input type="file" name="featured_image" class="form-control">
                    <label>Должность сотрудника</label>
                    <input name="position_uz" class="form-control" rows="7" placeholder="Узбек" required="required">
                    <input name="position_ru" class="form-control" rows="7" placeholder="Pусский" required="required">
                    <button type="submit" class="btn btn-success btn-block">Сохранить сотрудника</button>
                </form>
            </div>
            <div class="text-center">

            </div>
        </div> <!-- End of the Create Product-->
    </div>
@endsection
