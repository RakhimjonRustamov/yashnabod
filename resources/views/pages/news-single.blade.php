@extends('layouts.app-content')
@section('title'| 'News Single')@stop
@section('stylesheets')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/news.css') }}">
@endsection
@section('content')
@section('page-title')
<h1>Новости</h1>
@endsection
<div class="container-fluid dotted">
    <div class="container" id="news-container-fluid1">
        <h1>Новости</h1>
        <div class="row">
            <div class="col-md-9">
                <div class="news-column">
                    <div class="news thumbnail" style="background-image: url('{{ asset('images/posts/'. $post->image) }}')">
                    </div>
                </div>
                <div class="news-text">
                    <h1>{{$post->title_uz}}</h1>
                    <p>{{$post->body_uz}}</p></div>
                <span class="blog-date">{{ date('M j, Y H:ia',strtotime($post->created_at))}}</span>
            </div>
            <div class="col-md-3">
                <div class="widget-sidebar">
                    <h2 class="title-widget-sidebar">// Последние новости</h2>
                    <div class="content-widget-sidebar">
                        <ul>
                            @foreach($posts as $post)
                            <li class="recent-post">
                                <a href="{{url('/news/'.$post->slug)}}">

                                    <div class="post">
                                        <div class="post-img-content1" style="background-image: url('{{asset('images/posts/'.$post->image)}}')">

                                        </div>
                                        <div class="content">
                                            <div class="author">
                                                <time datetime="2014-01-20"><time>{{ date('M j, Y H:ia',strtotime($post->created_at))}}</time></time>
                                            </div>
                                            <div class="text-justify">
                                                <a href="{{url('/news/'.$post->slug)}}"><h5 class="text-justfy news1-text">{{$post->title_ru}}</h5></a>
                                            </div>
                                        </div>
                                    </div>

                            </li>
                                <hr>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection