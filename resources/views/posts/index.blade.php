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
            <a href="{{route('posts.create')}}" class="btn btn-success btn-block"><span class=" glyphicon glyphicon-plus"></span>Создать новость</a>
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
                        <div class="col-md-8">
                        <td>{{ $post->id}}</td>
                        <td>{{ strip_tags($post->title)}}</td>
                        <td>{{ substr(strip_tags($post->body), 0, 50)}}{{ strlen(strip_tags($post->body)) >50 ? "...":""}}</td>
                        <td>{{ date('M j, Y H:ia',strtotime($post->created_at))}}</td>
                        </div>
                        <div class="col-md-4">
                        <td><a href="{{ route('blog.single', ['slug'=>$post->slug])}}" class="btn btn-warning" id="b1" ><span class=" glyphicon glyphicon-eye-open"></span>View&nbsp;&nbsp; </a></td>
                        <td>
                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#{{ $post->id}}" id="b2"><span class="glyphicon glyphicon-edit"></span>&nbspEdit&nbsp &nbsp;</button>
                            <!-- Modal -->
                            <div class="modal fade" id="{{ $post->id }}" role="dialog">
                                <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Update The Post</h4>
                                        </div>
                                        <div class="modal-body">
                                            {!! Form::model($post, ['route'=> ['posts.update', $post->id], 'method'=>'PUT', 'files'=>true])!!}
                                            {{ Form::label('title', 'Title:')}}
                                            {{ Form::text('title', null, ['class'=>'form-control'])}}
                                            {{ Form::label('slug', 'Slug:') }}
                                            {{ Form::text('slug', null, array('class'=>'form-control', 'required'=>'', 'minlength'=>'5', 'maxlength'=>'100')) }}
                                            <label name="featured_image" style="margin-top:10px"> Upload New Image</label>
                                            <input type="file" name="featured_image">
                                            <img src="{{ asset('images/'. $post->image)}}" height="60" width="80"/>
                                            <p>{{ Form::label('body', 'Body:')}}</p>
                                            {{ Form::textarea('body', null, ['class'=>'form-control'])}}
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
                              <form action="{{url('admin/posts/'.$post->id)}}" method='post'>
                                  {{ method_field('DELETE') }}
                                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                  <button type="submit" class="btn btn-danger mybtn"><span class="glyphicon glyphicon-trash"></span>Delete</button>
                              </form>
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










