@extends('layouts.app-content')
@section('title'| 'News')@stop
@section('stylesheets')
<link rel="stylesheet" type="text/css" href="{{ asset('css/search.css') }}">
@endsection
@section('content')
@section('page-title')

@endsection

<div class="container-fluid dotted">
    <div class="container">
        <div class="row">
            <div class="process">
                <div class="process-row nav nav-tabs">
                    <div class="process-step">
                        <button type="button" class="btn btn-default btn-circle" data-toggle="tab" href="#menu1"><i class="fa fa-shopping-bag fa-3x"></i></button>
                        <p class="text-under">Продукты</p>
                    </div>
                    <div class="process-step">
                        <button type="button" class="btn btn-default btn-circle" data-toggle="tab" href="#menu2"><i class="fa fa-users fa-3x"></i></button>
                        <p class="text-under">Резиденты</p>
                    </div>
                    <div class="process-step">
                        <button type="button" class="btn btn-default btn-circle" data-toggle="tab" href="#menu3"><i class="fa fa-newspaper-o fa-3x"></i></button>
                        <p class="text-under">@lang('Новости')</p>
                    </div>
                </div>
            </div>
            <div class="tab-content">
                <div id="menu1" class="tab-pane fade active in">
                    <h1 class="title">@lang('Продукты')</h1>
                    <div class="container">
                        <div class="row">
                            @foreach($products as $product)
                            <div class="col-sm-4 col-md-4">
                                <div class="post">
                                    <div class="post-img-content" style="background-image: url('{{ asset('images/products/'. $product->product_image)}}')">

                                    </div>
                                    <div class="content">

                                        <div class="text-justify">
                                            {{ App::isLocale('ru') ? $product->product_info_ru : $product->product_info_uz}}
                                        </div>
                                        <div>
                                            <a href="{{url('products/'.$product->id)}}" class="btn btn-primary btn-sm button-read">Читать дальше</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div id="menu2" class="tab-pane fade">
                    <h1 class="title">@lang('Резиденты')</h1>
                    <div class="container">
                        <div class="row">
                            @foreach($residents as $resident)
                            <div class="col-sm-4 col-md-4">
                                <div class="post">
                                    <div class="post-img-content" style="background-image: url('{{ asset('images/residents/'. $resident->resident_logo)}}')">

                                    </div>
                                    <div class="content">

                                        <div class="text-justify">
                                            {{ App::isLocale('ru') ? $resident->resident_info_ru : $resident->resident_info_uz }}
                                        </div>
                                        <div>
                                            <a href="{{url('residents/'.$resident->id)}}" class="btn btn-primary btn-sm button-read">Читать дальше</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                          </div>
                    </div>
                </div>

                <div id="menu3" class="tab-pane fade">
                    <h1 class="title">Новости</h1>
                    <div class="container">
                        <div class="row">
                            @foreach($posts as $post)
                            <div class="col-sm-4 col-md-4">
                                <div class="post">
                                    <div class="post-img-content" style="background-image: url('{{asset('images/posts/'.$post->image)}}')">
                                    </div>
                                    <div class="content">
                                        <div class="author">
                                            <time datetime="2014-01-20">{{ $post->created_at->format('d m Y')}}</time>
                                        </div>
                                        <div class="text-justify">
                                            {{App::isLocale('ru') ? (substr($post->body_ru, 0, 50)) : (substr($post->body_uz, 0, 50))}}
                                        </div>
                                        <div>
                                            <a href="{{url('/news/'.$post->slug)}}" class="btn btn-primary btn-sm button-read">Читать дальше</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            {!! $posts->links()!!}
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>

@endsection