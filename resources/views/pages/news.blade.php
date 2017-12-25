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
        <div class="col-md-8">
            <div class="row">
                @foreach($posts as $post)
                    <div class="col-md-6 col-sm-12 news-column">
                        <div class="news thumbnail" style="background-image: url('{{asset('images/posts/'.$post->image)}}') ">
                        </div>
                        <div class="content">
                            <time datetime="2014-01-20"><h5><time>{{ date('M j, Y H:ia',strtotime($post->created_at))}}</time></h5></time>
                            <p class="news-text">
                                {{substr($post->body_ru, 0, 245)}}{{strlen($post->body_ru)>50 ? "...":""}}
                            </p>
                        </div>
                        <div class="">
                            <a href="{{url('/news/'.$post->slug)}}" class="btn btn-primary btn-sm">Read more</a>
                        </div>
                    </div>
                @endforeach
                {!! $posts->links()!!}
            </div>
        </div>
    </div>
</div>

@endsection