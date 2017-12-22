@extends('layouts.app-content')
@section('title'| 'News')@stop
@section('stylesheets')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/news.css') }}">
@endsection
@section('content')
@section('page-title')
<h1>Новости</h1>
@endsection

<div class="container-fluid  dotted">
    <div class="container" id="news-container-fluid1">
        <h1>Новости</h1>
        <div class="row">
            <div class="col-md-8 " >
                <div class="news-column">
                    <div class="news thumbnail" style="background-image: url('{{ asset('images/posts/'. $post[0]->image) }}')">
                    </div>
                </div>
                <div class="news-text">
                    <p>{{substr($post[0]->body_ru, 0, 245)}}{{strlen($post[0]->body_ru)>50 ? "...":""}}</p>
                </div>
                <span class="blog-date"> <time datetime="2014-01-20"><h5><time>{{ date('M j, Y H:ia',strtotime($post[0]->created_at))}}</time></h5></time></span>
            </div>
            <div class="col-md-4">
                <div class="widget-sidebar">
                    <h2 class="title-widget-sidebar">// Последние новости</h2>
                    <div class="content-widget-sidebar">
                        <ul>
                            @foreach($posts as $post)
                                <li class="recent-post">
                                    <a href="{{url('/news/'.$post->slug)}}">
                                        <div class="news-column1">
                                            <div class="news1 thumbnail" style="background-image: url('{{asset('images/posts/'.$post->image)}}') ">
                                            </div>
                                        </div>
                                        <a href="{{url('/news/'.$post->slug)}}"><h5 class="text-center news1-text">{{$post->title_ru}}</h5></a>
                                    </a>
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