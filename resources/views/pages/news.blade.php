@extends('layouts.app-content')
@section('title', Lang::get('news.title'))@stop
@section('stylesheets')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/news.css') }}">
@endsection
@section('content')
@section('page-title')
<h1>{{__('news.title-news')}}</h1>
@endsection

<div class="container-fluid  dotted">
    <div class="container" id="news-container-fluid1">
        <h1>{{__('news.title-news')}}</h1>

            <div class="row">
                @foreach($posts as $post)
                <div class="col-sm-4 col-md-4 column">
                    <div class="post">
                        <div class="post-img-content" style="background-image: url('{{asset('images/posts/'.$post->image)}}')">
                        </div>
                        <div class="content">
                            <div class="author">
                                <time datetime="2014-01-20"><time>{{ $post->created_at->format('d m Y')}}</time></time>
                                <hr>
                            </div>
                            <div class="text-justify">
                                {{substr($post->body_ru, 0, 245)}}{{strlen($post->body_ru)>50 ? "...":""}}
                            </div>
                            <div>
                                <a href="{{url('/news/'.$post->slug)}}"class="btn btn-primary btn-sm button-read">{{__('news.read-more')}}</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                {!! $posts->links()!!}
            </div>

    </div>

</div>

@endsection