@extends('layouts.app-content')
@section('title'| 'News')@stop
@section('stylesheets')
<link rel="stylesheet" type="text/css" href="{{ asset('css/search.css') }}">
@endsection
@section('content')
@section('page-title')
    @foreach($products as $product)
        <h1>{{$product}}</h1>
    @endforeach
    @foreach($posts as $post)
        <h1>{{$post}}</h1>
    @endforeach
    {!! $posts->links()!!}

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
                        <p class="text-under">Новости</p>
                    </div>
                </div>
            </div>
            <div class="tab-content">
                <div id="menu1" class="tab-pane fade active in">
                    <h1 class="title">Продукты</h1>
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-4 col-md-4">
                                <div class="post">
                                    <div class="post-img-content" style="background-image: url('https://i.pinimg.com/736x/1d/b5/bb/1db5bb67e1f6e031e146366aa19142b1--kids-photography-girls-fall-family-photography.jpg')">

                                    </div>
                                    <div class="content">

                                        <div class="text-justify">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                            Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                            unknown printer took a galley of type and scrambled it to make a type specimen book.
                                        </div>
                                        <div>
                                            <a href="" class="btn btn-primary btn-sm button-read">Читать дальше</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-4">
                                <div class="post">
                                    <div class="post-img-content" style="background-image: url('https://i.pinimg.com/736x/1d/b5/bb/1db5bb67e1f6e031e146366aa19142b1--kids-photography-girls-fall-family-photography.jpg')">

                                    </div>
                                    <div class="content">

                                        <div class="text-justify">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                            Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                            unknown printer took a galley of type and scrambled it to make a type specimen book.
                                        </div>
                                        <div>
                                            <a href="" class="btn btn-primary btn-sm button-read">Читать дальше</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-4">
                                <div class="post">
                                    <div class="post-img-content" style="background-image: url('https://i.pinimg.com/736x/1d/b5/bb/1db5bb67e1f6e031e146366aa19142b1--kids-photography-girls-fall-family-photography.jpg')">

                                    </div>
                                    <div class="content">

                                        <div class="text-justify">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                            Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                            unknown printer took a galley of type and scrambled it to make a type specimen book.
                                        </div>
                                        <div>
                                            <a href="" class="btn btn-primary btn-sm button-read">Читать дальше</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="menu2" class="tab-pane fade">
                    <h1 class="title">Резиденты</h1>
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-4 col-md-4">
                                <div class="post">
                                    <div class="post-img-content" style="background-image: url('https://i.pinimg.com/736x/1d/b5/bb/1db5bb67e1f6e031e146366aa19142b1--kids-photography-girls-fall-family-photography.jpg')">

                                    </div>
                                    <div class="content">

                                        <div class="text-justify">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                            Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                            unknown printer took a galley of type and scrambled it to make a type specimen book.
                                        </div>
                                        <div>
                                            <a href="" class="btn btn-primary btn-sm button-read">Читать дальше</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-4">
                                <div class="post">
                                    <div class="post-img-content" style="background-image: url('https://i.pinimg.com/736x/1d/b5/bb/1db5bb67e1f6e031e146366aa19142b1--kids-photography-girls-fall-family-photography.jpg')">

                                    </div>
                                    <div class="content">

                                        <div class="text-justify">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                            Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                            unknown printer took a galley of type and scrambled it to make a type specimen book.
                                        </div>
                                        <div>
                                            <a href="" class="btn btn-primary btn-sm button-read">Читать дальше</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-4">
                                <div class="post">
                                    <div class="post-img-content" style="background-image: url('https://i.pinimg.com/736x/1d/b5/bb/1db5bb67e1f6e031e146366aa19142b1--kids-photography-girls-fall-family-photography.jpg')">

                                    </div>
                                    <div class="content">

                                        <div class="text-justify">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                            Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                            unknown printer took a galley of type and scrambled it to make a type specimen book.
                                        </div>
                                        <div>
                                            <a href="" class="btn btn-primary btn-sm button-read">Читать дальше</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="menu3" class="tab-pane fade">
                    <h1 class="title">Новости</h1>
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-4 col-md-4">
                                <div class="post">
                                    <div class="post-img-content" style="background-image: url('https://i.pinimg.com/736x/1d/b5/bb/1db5bb67e1f6e031e146366aa19142b1--kids-photography-girls-fall-family-photography.jpg')">
                                    </div>
                                    <div class="content">
                                        <div class="author">
                                            <time datetime="2014-01-20">January 20th, 2014</time>
                                        </div>
                                        <div class="text-justify">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                            Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                            unknown printer took a galley of type and scrambled it to make a type specimen book.
                                        </div>
                                        <div>
                                            <a href="" class="btn btn-primary btn-sm button-read">Читать дальше</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-4">
                                <div class="post">
                                    <div class="post-img-content" style="background-image: url('https://i.pinimg.com/736x/1d/b5/bb/1db5bb67e1f6e031e146366aa19142b1--kids-photography-girls-fall-family-photography.jpg')">

                                    </div>
                                    <div class="content">
                                        <div class="author">
                                            <time datetime="2014-01-20">January 20th, 2014</time>
                                        </div>
                                        <div class="text-justify">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                            Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                            unknown printer took a galley of type and scrambled it to make a type specimen book.
                                        </div>
                                        <div>
                                            <a href="" class="btn btn-primary btn-sm button-read">Читать дальше</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-4">
                                <div class="post">
                                    <div class="post-img-content" style="background-image: url('https://i.pinimg.com/736x/1d/b5/bb/1db5bb67e1f6e031e146366aa19142b1--kids-photography-girls-fall-family-photography.jpg')">

                                    </div>
                                    <div class="content">
                                        <div class="author">
                                            <time datetime="2014-01-20">January 20th, 2014</time>
                                        </div>
                                        <div class="text-justify">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                            Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                            unknown printer took a galley of type and scrambled it to make a type specimen book.
                                        </div>
                                        <div>
                                            <a href="" class="btn btn-primary btn-sm button-read">Читать дальше</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>














@endsection