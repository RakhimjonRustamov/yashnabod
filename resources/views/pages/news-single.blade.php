@extends('layouts.app')
@section('title'| 'News Single')@stop
@section('stylesheets')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/news.css') }}">
@endsection
@section('content')

    <div class="container dotted" id="news-container-fluid1">
        <h1>Новости</h1>
        <div class="row">
            <div class="col-md-8">
                <div class="news-photo">
                    <img class="img-responsive thumbnail" src="{{asset('images/'. $post->image)}}">
                </div>
                <div class="news-text">
                    <h1>{{$post->title}}</h1>
                    <p>{{$post->body}}</p></div>
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
                                        <a href="{{url('/news/'.$post->slug)}}"><img src="{{asset('images/'.$post->image)}}" class="img-responsive"></a>
                                    </div>
                                    <a href="{{url('/news/'.$post->slug)}}"><h5>{{$post->title}}</h5></a>
                                    <p><small><i class="fa fa-calendar" data-original-title="" title=""></i> </small></p>
                                </li>
                                <hr>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="widget-sidebar">
                    <h2 class="title-widget-sidebar">// Архив</h2>
                    <div class="last-post">
                        <button class="accordion">Октябрь</button>
                        <div class="panel">
                            <li class="recent-post">
                                <div class="post-img">
                                    <img src="{{asset('images/Wallpapers/Wallpaper3.jpg')}}" class="img-responsive">
                                </div>
                                <a href="#"><h5>Excepteur sint occaecat cupi non proident laborum.</h5></a>
                                <p><small><i class="fa fa-calendar" data-original-title="" title=""></i>Октябрь</small></p>
                            </li>
                        </div>
                    </div>
                    <hr>
                    <div class="last-post">
                        <button class="accordion">Сентябрь</button>
                        <div class="panel">
                            <li class="recent-post">
                                <div class="post-img">
                                    <img src="{{asset('images/Wallpapers/Wallpaper3.jpg')}}" class="img-responsive">
                                </div>
                                <a href="#"><h5>Excepteur sint occaecat cupi non proident laborum.</h5></a>
                                <p><small><i class="fa fa-calendar" data-original-title="" title=""></i>Сентябрь</small></p>
                            </li>
                        </div>
                    </div>
                    <hr>
                    <div class="last-post">
                        <button class="accordion">Август</button>
                        <div class="panel">
                            <li class="recent-post">
                                <div class="post-img">
                                    <img src="{{asset('images/Wallpapers/Wallpaper3.jpg')}}" class="img-responsive">
                                </div>
                                <a href="#"><h5>Excepteur sint occaecat cupi non proident laborum.</h5></a>
                                <p><small><i class="fa fa-calendar" data-original-title="" title=""></i>Август</small></p>
                            </li>
                        </div>
                    </div>
                    <hr>
                    <div class="last-post">
                        <button class="accordion">Июнь</button>
                        <div class="panel">
                            <li class="recent-post">
                                <div class="post-img">
                                    <img src="{{asset('images/Wallpapers/Wallpaper3.jpg')}}" class="img-responsive">
                                </div>
                                <a href="#"><h5>Excepteur sint occaecat cupi non proident laborum.</h5></a>
                                <p><small><i class="fa fa-calendar" data-original-title="" title=""></i>Июнь</small></p>
                            </li>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection