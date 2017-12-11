@extends('layouts.admin-layout')
@section('title', '| All Residents')
@section('content')
    @include('partials._message')
    <div class="row">
        <div class="col-md-8">
            <table class="table">
                <thead>
                <th>#</th>
                <th>Resident name in Russian</th>
                <th>Created At </th>
                <th></th>
                <th></th>

                </thead>
                <tbody>
                @foreach($residents as $resident)
                    <tr>
                        <div class="col-md-8">
                            <td>{{ $resident->id}}</td>
                            <td>{{ strip_tags($resident->resident_name_ru)}}</td>
                            <td>{{ date('M j, Y H:ia',strtotime($resident->created_at))}}</td>
                            <td>
                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#{{ $resident->id}}" id="b2"><span class="glyphicon glyphicon-eye-open"></span>View</button>
                                <!-- Modal -->
                                <div class="modal fade" id="{{ $resident->id }}" role="dialog">
                                    <div class="modal-dialog">

                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img src="{{ asset('images/residents/'. $resident->resident_logo)}}" height="300px" width="555px"/>
                                                <h3><span>{{$resident->resident_name_ru}}</span></h3>
                                            </div>
                                            <div class="modal-body">
                                                <p>{{$resident->resident_info_ru}}</p>
                                            </div>
                                            <div class="modal-footer">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <form action="{{url('admin/residents/'.$resident->id)}}" method='post'>
                                                            {{ method_field('DELETE') }}
                                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                            <button type="submit" class="btn btn-danger btn-block mybtn">Delete</button>
                                                        </form>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <button type="button" class="btn btn-primary btn-block" data-dismiss="modal">Cancel</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit-{{ $resident->id}}" id="b2"><span class="glyphicon glyphicon-edit"></span>&nbspEdit&nbsp &nbsp;</button>
                                <!-- Modal -->
                                <div class="modal fade" id="edit-{{ $resident->id }}" role="dialog">
                                    <div class="modal-dialog">

                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                {!! Form::model($resident, ['route'=> ['residents.update', $resident->id], 'method'=>'PUT', 'files'=>true])!!}
                                                {{ Form::label('resident_name_uz', 'Resident:')}}
                                                {{ Form::text('resident_name_uz', null, ['class'=>'form-control'])}}
                                                {{ Form::label('resident_name_ru', 'Pезидент:') }}
                                                {{ Form::text('resident_name_ru', null, array('class'=>'form-control', 'required'=>'')) }}
                                                <label name="featured_image" style="margin-top:10px">Загрузить новое изображение</label>
                                                <input type="file" name="featured_image">
                                                <img src="{{ asset('images/residents/'. $resident->resident_logo)}}" height="60" width="80"/>
                                                <p>{{ Form::label('resident_info_uz', 'Resident Malumoti:')}}</p>
                                                {{ Form::textarea('resident_info_uz', null, ['class'=>'form-control'])}}
                                                <p>{{ Form::label('resident_info_ru', 'Информация о резидентности:')}}</p>
                                                {{ Form::textarea('resident_info_ru', null, ['class'=>'form-control'])}}
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
                        </div>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {!! $residents->links()!!}
        </div>

        <!-- Begining of FORM -->
        <div class="col-md-4">
            <div>
                <h3 align="center">Create New Resident</h3>
                <form action="{{ route('residents.store')}}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <label>Resident Name:</label>
                    <input type="text" name="resident_name_uz" class="form-control" placeholder="Узбек" required="required">
                    <input type="text" name="resident_name_ru" class="form-control" placeholder="Pусский" required="required">
                    <label>Загрузить новое изображение</label>
                    <input type="file" name="featured_image" class="form-control">
                    <label>Resident Info</label>
                    <textarea name="resident_info_uz" class="form-control" rows="7" placeholder="Узбек" required="required"></textarea>
                    <textarea name="resident_info_ru" class="form-control" rows="7" placeholder="Pусский" required="required"></textarea>
                    <button type="submit"  class="btn btn-success btn-block">Save Resident</button>
                </form>
                <div class="text-center">
                </div>
            </div>
        </div> <!-- End of the Create Product-->
    </div>
@endsection
