@extends('layouts.app-content')
@section('title'| 'News Single')@stop
@section('stylesheets')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/news.css') }}">
@endsection
@section('content')
@section('page-title')
<h1>Новости</h1>
@endsection

    <div class="container dotted" id="news-container-fluid1">
        <h1>Новости</h1>
        <div class="row">
            <div class="col-md-8">
                <div class="news-photo">
                    <img class="img-responsive thumbnail" src="{{asset('images/posts/'. $post->image)}}">
                </div>
                <div class="news-text">
                    <h1>{{$post->title_uz}}</h1>
                    <p>{{$post->body_uz}}</p></div>
                <span class="blog-date">{{ date('M j, Y H:ia',strtotime($post->created_at))}}</span>
            </div>
            <div class="col-md-4">
                <div class="widget-sidebar">
                    <h2 class="title-widget-sidebar">// Последние новости</h2>
                    <div class="content-widget-sidebar">
                        <ul>
                            @foreach($posts as $post)
                                <li class="recent-post">
                                    <div class="post-img">
                                        <a href="{{url('/news/'.$post->slug)}}"><img src="{{asset('images/posts/'.$post->image)}}" class="img-responsive"></a>
                                    </div>
                                    <a href="{{url('/news/'.$post->slug)}}"></a>
                                    {{ date('M j, Y H:ia',strtotime($post->created_at))}}
                                    <p><small><i class="fa fa-calendar" data-original-title="{{ date('M j, Y H:ia',strtotime($post->created_at))}}" title="{{$post->title_uz}}"></i> </small></p>
                                </li>
                                <hr>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection