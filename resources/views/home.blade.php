@extends('layouts.app')
@section('title','IndexPage')

@section('stylesheets')
<link rel="stylesheet" type="text/css" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
    <!-- /////////////////////////////////////// container-fluid1 ////////////////////////////////////////// -->
    <div class="container-fluid dotted">
        <div class="container" id="container-fluid1">
            <h1>О нас</h1>
            <div class="row">
                <div class="col-md-3 thumbnail" id="col-82">
                </div>
                <div class="col-md-9" id="col-81">
                    <p>Технопарк — Это территориальная, научная, технологическая и техническая база для реализации инновационных проектов. Технопарк- имущественный комплекс, в котором объединены научно-исследовательские институты, объекты индустрии, деловые центры, выставочные площадки, учебные заведения, а также обслуживающие объекты: средства транспорта, подъездные пути, жилые поселки, охрана. Международная ассоциация технологических парков даёт своё определение объекту инновационной инфраструктуры. По мнению ассоциации, технопарк — это организация, управляемая специалистами, главной целью которых является увеличение благосостояния местного сообщества посредством продвижения инновационной культуры, а также состязательности инновационного бизнеса и научных организаций. Для достижения этих целей технопарк стимулирует и управляет потоками знаний и технологий между университетами, научно-исследовательскими институтами, компаниями и рынками. Он упрощает создание и рост инновационным компаниям с помощью инкубационных процессов и процессов выведения новых компаний из существующих (spin-off processes). Технопарк помимо высококачественных площадей обеспечивает другие услуги...
                        <a href="{{url('/preference-yic')}}" id="readmore">
                           Читать дальше
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- ////////////////////////////////////////// end container fluid1 ///////////////////////////////////// -->
    <!-- ////////////////////////////////////////// container-fluid2 ///////////////////////////////////// -->
    <div class="container-fluid dotted">
        <div class="container" id="container-fluid2">
            <h1>Наши продукции</h1>
            <div class="row">
                <div class="col-md-12">
                    <div id="Carousel" class="carousel slide">
                        <ol class="carousel-indicators">
                            <li data-target="#Carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#Carousel" data-slide-to="1"></li>
                            <li data-target="#Carousel" data-slide-to="3"></li>
                        </ol>
                        <!-- Carousel items -->
                        <div class="carousel-inner">
                            <div class="carousel-inner">
                                <div class="item active">
                                    <div class="row">

                                        <div class="col-md-3 col-sm-3 col-md-3 products-column">
                                            <div class="products thumbnail" style="background-image: url('{{asset('images/products/'.$products[0]->product_image)}}') ">
                                            </div>
                                            <div class="readmore-box">
                                                <a href="{{url('products/'.$products[0]->id)}}">
                                                    <div class="product-text">{{$products[0]->product_name_ru}}</div>
                                                </a>
                                            </div>
                                        </div>

                                            <div class="col-md-3 col-sm-3 col-md-3 products-column">
                                                <div class="products thumbnail" style="background-image: url('{{asset('images/products/'.$products[1]->product_image)}}') ">
                                                </div>
                                                <div class="readmore-box">
                                                    <a href="{{url('products/'.$products[1]->id)}}">
                                                        <div class="product-text">{{$products[1]->product_name_ru}}</div>
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="col-md-3 col-sm-3 col-md-3 products-column">
                                                <div class="products thumbnail" style="background-image: url('{{asset('images/products/'.$products[2]->product_image)}}') ">
                                                </div>
                                                <div class="readmore-box">
                                                    <a href="{{url('products/'.$products[2]->id)}}">
                                                        <div class="product-text">{{$products[2]->product_name_ru}}</div>
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="col-md-3 col-sm-3 col-md-3 products-column">
                                                <div class="products thumbnail" style="background-image: url('{{asset('images/products/'.$products[3]->product_image)}}') ">
                                                </div>
                                                <div class="readmore-box">
                                                    <a href="{{url('products/'.$products[3]->id)}}">
                                                        <div class="product-text">{{$products[3]->product_name_ru}}</div>
                                                    </a>
                                                </div>
                                            </div>

                                    </div>
                                </div>
                                <div class="item">
                                    <div class="row">
                                            <div class="col-md-3 col-sm-3 col-md-3 products-column">
                                                <div class="products thumbnail" style="background-image: url('{{asset('images/products/'.$products[4]->product_image)}}') ">
                                                </div>
                                                <div class="readmore-box">
                                                    <a href="{{url('products/'.$products[4]->id)}}">
                                                        <div class="product-text">{{$products[4]->product_name_ru}}</div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-3 col-md-3 products-column">
                                                <div class="products thumbnail" style="background-image: url('{{asset('images/products/'.$products[5]->product_image)}}') ">
                                                </div>
                                                <div class="readmore-box">
                                                    <a href="{{url('products/'.$products[5]->id)}}">
                                                        <div class="product-text">{{$products[5]->product_name_ru}}</div>
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="col-md-3 col-sm-3 col-md-3 products-column">
                                                <div class="products thumbnail" style="background-image: url('{{asset('images/products/'.$products[6]->product_image)}}') ">
                                                </div>
                                                <div class="readmore-box">
                                                    <a href="{{url('products/'.$products[6]->id)}}">
                                                        <div class="product-text">{{$products[6]->product_name_ru}}</div>
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="col-md-3 col-sm-3 col-md-3 products-column">
                                                <div class="products thumbnail" style="background-image: url('{{asset('images/products/'.$products[7]->product_image)}}') ">
                                                </div>
                                                <div class="readmore-box">
                                                    <a href="{{url('products/'.$products[7]->id)}}">
                                                        <div class="product-text">{{$products[7]->product_name_ru}}</div>
                                                    </a>
                                                </div>
                                            </div>

                                    </div>
                                </div>
                            </div>
                            <!--.carousel-inner-->
                            <a data-slide="prev" href="#Carousel" class="left carousel-control hidden-xs hidden-sm">‹</a>
                            <a data-slide="next" href="#Carousel" class="right carousel-control hidden-xs hidden-sm">›</a>
                        </div>
                        <!--.Carousel-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--.container-->
    <!-- ////////////////////////////////////////// end container-fluid2 ///////////////////////////////////// -->
    <!-- ////////////////////////////////////////// container-fluid3 /////////////////////////////////////////-->
    <div class="container-fluid dotted">
        <div class="container" id="container-fluid3">
            <h1>Возможности</h1>
            <div class="row">
                <div class="col-md-2 cols">
                    <div class="sub-div">
                        <a href="{{url('/taxes')}}" class="link1">
                            <div class="circle">
                                <span class="fa fa-calendar sub-icon"></span>
                            </div>
                            <div class="text">
                                <p>«Налоговые каникулы» для резидентов технопарка.</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-2 cols">
                    <div class="sub-div">
                        <a href="{{url('/credits')}}" class="link1">
                            <div class="circle">
                                <span class="fa fa-credit-card sub-icon"></span>
                            </div>
                            <div class="text">
                                <p>Льготное кредитование.</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-2 cols">
                    <div class="sub-div">
                        <a href="{{url('/areas')}}" class="link1">
                            <div class="circle">
                                <span class="fa fa-map sub-icon"></span>
                            </div>
                            <div class="text">
                                <p>Доступные производственные площади.</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-2 cols">
                    <div class="sub-div">
                        <a href="{{url('/promotion')}}" class="link1">
                            <div class="circle">
                                <span class="fa fa-handshake-o sub-icon"></span>
                            </div>
                            <div class="text">
                                <p>Содействие в прохождении разрешительных процедур.</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-2 cols">
                    <div class="sub-div">
                        <a href="{{url('/sponsorship')}}" class="link1">
                            <div class="circle">
                                <span class="fa fa-money sub-icon"></span>
                            </div>
                            <div class="text">
                                <p>Привлечение спонсоров и инвесторов для реализации проектов.</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-2 cols">
                    <div class="sub-div">
                        <a href="{{url('/copyright')}}" class="link1">
                            <div class="circle">
                                <span class="fa fa-shield sub-icon"></span>
                            </div>
                            <div class="text">
                                <p>Защита авторских прав на объекты интеллектуальной собственности.</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /////////////////////////////////////////////// end container-fluid3 ////////////////////////////////////// -->
    <!-- ///////////////////////////////////////////// container-fluid4 ////////////////////////////////////////////  -->
    <div class="container-fluid" id="container-fluid4">
        <div class="row" id="container-fluid4-row">
            <div class="col-md-3 countup-item">
                <div class="counter slideanim" data-count="{{$counter[0]->counter1}}"></div>
                <h3>Поступившие заявки</h3>
            </div>
            <div class="col-md-2 countup-item">
                <div class="counter slideanim" data-count="{{$counter[0]->counter2}}"></div>
                <h3>Поступившие заявки</h3>
            </div>
            <div class="col-md-2 countup-item">
                <div class="counter slideanim" data-count="{{$counter[0]->counter3}}"></div>
                <h3>Поступившие заявки</h3>
            </div>
            <div class="col-md-2 countup-item">
                <div class="counter slideanim" data-count="{{$counter[0]->counter4}}"></div>
                <h3>Поступившие заявки</h3>
            </div>
            <div class="col-md-3 countup-item">
                <div class="counter slideanim" data-count="{{$counter[0]->counter5}}"></div>
                <h3>Поступившие заявки</h3>
            </div>
        </div>
    </div>
    <!-- //////////////////////////////////////////// end container-fluid4 ///////////////////////////////////////// -->
    <!-- ///////////////////////////////////////////// container-fluid5 ////////////////////////////////////////////  -->
    <div class="container-fluid dotted">
        <div class="container" id="container-fluid5">
            <h1>Новости</h1>
            <div class="row">

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
                    </div>
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


    <!-- ///////////////////////////////////////////// end container-fluid5 ////////////////////////////////////////////  -->
    <!-- ///////////////////////////////////////////// container-fluid6 /////////////////////////////////////////////////  -->
    <div class="container-fluid dotted">
        <div class="container" id="container-fluid6">
            <h1>Наши резиденты</h1>
            <div class="row">
                <div class="col-md-12">
                    <div id="Carousel" class="carousel slide">
                        <!-- Carousel items -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="row">
                                    @foreach($residents as $resident)
                                    <div class="col-md-2 residents-column">
                                        <div class="residents thumbnail" style="background-image: url('{{ asset('images/residents/'. $resident->resident_logo)}}')">
                                        </div>
                                        <div class="readmore-box-residents">
                                            <a href="{{url('residents/'.$resident->id)}}">
                                                <div class="product-text">{{$resident->resident_info_uz}}</div>                                            </a>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                <!--.row-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--//////////////////////////////////////////// end container-fluid6 /////////////////////////////////////////////////////////  -->
    <!-- ///////////////////////////////////////////// container-fluid7 /////////////////////////////////////////////////  -->
    <div class="container-fluid dotted">
        <div class="container" id="container-fluid7">
            <h1>Полезные сайты</h1>
            <div class="row">
                <div class="col-md-6">
                    <a href="http://google.com">
                        <div id="facebook">
                        </div>
                    </a>
                    <a href="http://google.com">
                        <div id="google">
                        </div>
                    </a>
                </div>
                <div class="col-md-6">
                    <a href="http://google.com">
                        <div id="telegram">
                        </div>
                    </a>
                    <a href="http://google.com">
                        <div id="instagram">
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!--//////////////////////////////////////////// end container-fluid7 /////////////////////////////////////////////////////////  -->
@endsection