@extends('layouts.admin-layout')
@section('title', '| All Posts')
@section('stylesheets')
    <style>
        #b1{
            background:#ff9933;
            color:#fff;
        }
        #b2{
            background:#5bc0de;
            color:#fff;
        }
    </style>
@endsection
@section('content')
    @include('partials._message')
    <div class="row">
        <div class="col-md-10">
            <h1 align="center">Все новости</h1>
        </div>
        <div class="col-md-2">
            <a href="{{route('posts.create')}}" class="btn btn-success btn-block">Создать новость</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <table class="table">
                <thead>
                <th>#</th>
                <th>Заглавие</th>
                <th>Содержание</th>
                <th>Создан в</th>
                </thead>
                <tbody>
                @foreach($posts as $post)
                    <tr>
                        <td>{{ $post->id}}</td>
                        <td>{{ strip_tags($post->title_ru)}}</td>
                        <td>{{ substr(strip_tags($post->body_ru), 0, 50)}}{{ strlen(strip_tags($post->body_ru)) >50 ? "...":""}}</td>
                        <td>{{ date('M j, Y H:ia',strtotime($post->created_at))}}</td>

                        <div class="col-md-4">
                        <td><a href="{{ route('blog.single', ['slug'=>$post->slug])}}" class="btn btn-warning" id="b1" >View&nbsp;&nbsp </a></td>
                        <td>
                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#{{$post->id}}" id="b2">&nbspEdit&nbsp &nbsp;</button>
                            <!-- Modal -->
                            <div class="modal fade" id="{{$post->id}}" role="dialog">
                                <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Update The Post</h4>
                                        </div>
                                        <div class="modal-body">
                                            {!! Form::model($post, ['route'=> ['posts.update', $post->id], 'method'=>'PUT', 'files'=>true])!!}
                                            {{ Form::label('title_uz', 'Title_Uz:')}}
                                            {{ Form::text('title_uz', null, ['class'=>'form-control'])}}
                                            {{ Form::label('title_ru', 'Title_Ru:')}}
                                            {{ Form::text('title_ru', null, ['class'=>'form-control'])}}
                                            <label name="featured_image" style="margin-top:10px"> Загрузить новое изображение</label>
                                            <input type="file" name="featured_image">
                                            <img src="{{ asset('images/posts/'. $post->image)}}" height="60" width="80"/>
                                            <p>{{ Form::label('body_uz', 'Узбекский:')}}</p>
                                            {{ Form::textarea('body_uz', null, ['class'=>'form-control'])}}
                                            <p>{{ Form::label('body_ru', 'Pусский:')}}</p>
                                            {{ Form::textarea('body_ru', null, ['class'=>'form-control'])}}
                                        </div>
                                        <div class="modal-footer">
                                            <div class="row">
                                                <div class="col-md-6">
                                                {{ Form::submit('Save Changes', ['class'=>'btn btn-success btn-block'])}}
                                                {!! Form::close()!!}
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
                              {{ Form::open(['method' => 'DELETE', 'route' => ['posts.destroy', $post->id]]) }}
                              {{ Form::submit('Delete', ['class' => 'btn btn-danger btn-block']) }}
                              {{ Form::close() }}

                             {{-- <form action="{{url('admin/posts/'.$post->id)}}" method='post'>
                                  {{ method_field('DELETE') }}
                                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                  <button type="submit" class="btn btn-danger mybtn">Delete</button>
                              </form>--}}
                          </td>

                        </div>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="text-center">
                {!! $posts->links()!!}
            </div>
        </div>
    </div>
@endsection










