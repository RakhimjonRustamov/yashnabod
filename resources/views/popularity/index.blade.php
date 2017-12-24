@extends('layouts.admin-layout')
@section('title', '| Популярная информация')
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
                <th>Популярная информация</th>
                <th>Популярная ссылка</th>
                <th>Создан в</th>
                <th></th>
                </thead>
                <tbody>
                @foreach($popularities as $popularity)
                    <tr>
                            <td>{{ $popularity->id}}</td>
                            <td>{{ substr(strip_tags($popularity->popular_info_ru), 0, 50)}}{{ strlen(strip_tags($popularity->popular_info_ru)) >20 ? "...":""}}</td>
                            <td>{{$popularity->link}}</td>
                            <td>{{ date('M j, Y H:ia',strtotime($popularity->created_at))}}</td>
                            <td>
                            <td>
                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#{{ $popularity->id}}" id="b2">View</button>
                                <!-- Modal -->
                                <div class="modal fade" id="{{ $popularity->id }}" role="dialog">
                                    <div class="modal-dialog">

                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img src="{{ asset('images/popular/'. $popularity->image)}}" height="300px" width="555px"/>
                                                <h3><span><a>{{$popularity->link}}</a></span></h3>
                                                <p>{{$popularity->popular_info_ru}}</p>
                                            </div>
                                            <div class="modal-footer">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        {{ Form::open(['method' => 'DELETE', 'route' => ['popularity.destroy', $popularity->id]]) }}
                                                        {{ Form::submit('Удалить', ['class' => 'btn btn-danger btn-block']) }}
                                                        {{ Form::close() }}
                                                        {{--
                                                        <form action="{{url('admin/popularity/'.$popularity->id)}}" method='post'>
                                                            {{ method_field('DELETE') }}
                                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                            <button type="submit" class="btn btn-danger btn-block mybtn">Delete</button>
                                                        </form>--}}
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
                            <td>
                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#edit-{{ $popularity->id}}" id="b2">&nbspEdit&nbsp &nbsp;</button>
                                <!-- Modal -->
                                <div class="modal fade" id="edit-{{ $popularity->id }}" role="dialog">
                                    <div class="modal-dialog">

                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                {!! Form::model($popularity, ['route'=> ['popularity.update', $popularity->id], 'method'=>'PUT', 'files'=>true])!!}
                                                {{ Form::label('link', 'Ссылка:')}}
                                                {{ Form::text('link', null, ['class'=>'form-control'])}}
                                                <label name="featured_image" style="margin-top:10px">Загрузить новое изображение</label>
                                                <input type="file" name="featured_image">
                                                <img src="{{ asset('images/popular/'. $popularity->image)}}" height="60" width="80"/>
                                                <p>{{ Form::label('popular_info_uz', ' Refernce Haqida Malumoti:')}}</p>
                                                {{ Form::textarea('popular_info_uz', null, ['class'=>'form-control'])}}
                                                <p>{{ Form::label('popular_info_ru', 'Информация:')}}</p>
                                                {{ Form::textarea('popular_info_ru', null, ['class'=>'form-control'])}}
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
            {!! $popularities->links()!!}
        </div>

        <!-- Begining of FORM -->
        <div class="col-md-4">
            <div>
                <h3 align="center"> Создать новый </h3>
                <form action="{{ route('popularity.store')}}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <label>Информация о популярности:</label>
                    <textarea name="popular_info_uz" class="form-control" rows="7" placeholder="Узбек" required="required"></textarea>
                    <textarea name="popular_info_ru" class="form-control" rows="7" placeholder="Pусский" required="required"></textarea>
                    <label>Загрузить изображение:</label>
                    <input type="file" name="featured_image" class="form-control">
                    <label>Ссылка популярности</label>
                    <input type="text" class="form-control" name="link" placeholder="ссылка" required="required">
                    <button type="submit" class="btn btn-success btn-block">Сохранить</button>
                </form>
            </div>
            <div class="text-center">

            </div>
        </div> <!-- End of the Create Popularity-->
    </div>
@endsection
