@extends('layouts.app')

@section('content')

    <!-- /////////////////////////////////////// container-fluid1 ////////////////////////////////////////// -->
    <div class="container dotted" id="container-fluid1">
        <h1>О нас</h1>
        <div class="row">
            <div class="col-md-3 slideanim" id="col-82">
            </div>
            <div class="col-md-9 slideanim" id="col-81">
                <p>Технопарк — Это территориальная, научная, технологическая и техническая база для реализации инновационных проектов. Технопарк- имущественный комплекс, в котором объединены научно-исследовательские институты, объекты индустрии, деловые центры, выставочные площадки, учебные заведения, а также обслуживающие объекты: средства транспорта, подъездные пути, жилые поселки, охрана. Международная ассоциация технологических парков даёт своё определение объекту инновационной инфраструктуры. По мнению ассоциации, технопарк — это организация, управляемая специалистами, главной целью которых является увеличение благосостояния местного сообщества посредством продвижения инновационной культуры, а также состязательности инновационного бизнеса и научных организаций. Для достижения этих целей технопарк стимулирует и управляет потоками знаний и технологий между университетами, научно-исследовательскими институтами, компаниями и рынками. Он упрощает создание и рост инновационным компаниям с помощью инкубационных процессов и процессов выведения новых компаний из существующих (spin-off processes). Технопарк помимо высококачественных площадей обеспечивает другие услуги..</p>
            </div>
        </div>
    </div>
    <!-- ////////////////////////////////////////// end container fluid1 ///////////////////////////////////// -->
    <!-- ////////////////////////////////////////// container-fluid2 ///////////////////////////////////// -->
    <div class="container dotted" id="container-fluid2">
        <h1>Наши продукции</h1>
        <div class="row">
            <div class="col-md-12">
                <div id="Carousel" class="carousel slide">
                    <ol class="carousel-indicators">
                        <li data-target="#Carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#Carousel" data-slide-to="1"></li>
                    </ol>
                    <!-- Carousel items -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="row">
                                <div class="col-md-3 col-sm-12 img-col">
                                    <img class="image" src="{{asset('images/photos/technology.jpg')}}">
                                    <a href="">
                                        <div class="middle">
                                            <div class="text1">Смотреть</div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 col-sm-12 img-col">
                                    <img class="image" src="{{asset('images/photos/technology.jpg')}}">
                                    <a href="">
                                        <div class="middle">
                                            <div class="text1">Смотреть</div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 col-sm-12 img-col">
                                    <img class="image" src="{{asset('images/photos/technology.jpg')}}">
                                    <a href="">
                                        <div class="middle">
                                            <div class="text1">Смотреть</div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 col-sm-12 img-col">
                                    <img class="image" src="{{asset('images/photos/technology.jpg')}}">
                                    <a href="">
                                        <div class="middle">
                                            <div class="text1">Смотреть</div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row">
                                <div class="col-md-3 col-sm-12 img-col">
                                    <img class="image" src="{{asset('images/photos/technology.jpg')}}">
                                    <a href="">
                                        <div class="middle">
                                            <div class="text1">Смотреть</div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 col-sm-12 img-col">
                                    <img class="image" src="{{asset('images/photos/technology.jpg')}}">
                                    <a href="">
                                        <div class="middle">
                                            <div class="text1">Смотреть</div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 col-sm-12 img-col">
                                    <img class="image" src="{{asset('images/photos/technology.jpg')}}">
                                    <a href="">
                                        <div class="middle">
                                            <div class="text1">Смотреть</div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 col-sm-12 img-col">
                                    <img class="image" src="{{asset('images/photos/technology.jpg')}}">
                                    <a href="">
                                        <div class="middle">
                                            <div class="text1">Смотреть</div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ////////////////////////////////////////// end container-fluid2 ///////////////////////////////////// -->
    <!-- ////////////////////////////////////////// container-fluid3 /////////////////////////////////////////-->
    <div class="container dotted" id="container-fluid3">
        <h1>Возможности</h1>
        <div class="row">
            <div class="col-md-1 cols">
            </div>
            <div class="col-md-2 cols">
                <div class="sub-div">
                    <div class="circle">
                        <span class="fa fa-trophy"></span>
                    </div>
                    <div class="text">
                        <p>Содействие резидентам в привлечении иностранных инвестиций</p>
                    </div>
                </div>
            </div>
            <div class="col-md-2 cols">
                <div class="sub-div">
                    <div class="circle">
                        <span class="fa fa-thumbs-o-up"></span>
                    </div>
                    <div class="text">
                        <p>Содействие в трудоустройстве ИТ выпускников</p>
                    </div>
                </div>
            </div>
            <div class="col-md-2 cols">
                <div class="sub-div">
                    <div class="circle">
                        <span class="fa fa-balance-scale"></span>
                    </div>
                    <div class="text">
                        <p>Cоздание организ.-технических и финансово-экономич. условий для развития ИТ сферы</p>
                    </div>
                </div>
            </div>
            <div class="col-md-2 cols">
                <div class="sub-div">
                    <div class="circle">
                        <span class="fa fa-bar-chart"></span>
                    </div>
                    <div class="text">
                        <p>Повышение квалификации и переподготовки ит кадров</p>
                    </div>
                </div>
            </div>
            <div class="col-md-2 cols">
                <div class="sub-div">
                    <div class="circle">
                        <span class="fa fa-address-card"></span>
                    </div>
                    <div class="text">
                        <p>Поддержка ИТ проектам начинающих предпринимателей</p>
                    </div>
                </div>
            </div>
            <div class="col-md-1 cols">
            </div>
        </div>
    </div>
    <!-- /////////////////////////////////////////////// end container-fluid3 ////////////////////////////////////// -->
    <!-- ///////////////////////////////////////////// container-fluid4 ////////////////////////////////////////////  -->
    <div class="container-fluid dotted " id="container-fluid4">
        <div class="row" id="container-fluid4-row">
            <div class="col-md-3 countup-item">
                <div class="counter slideanim" data-count="150">0</div>
                <h3>Поступившие заявки</h3>
            </div>
            <div class="col-md-3 countup-item">
                <div class="counter slideanim" data-count="85">0</div>
                <h3>Поступившие заявки</h3>
            </div>
            <div class="col-md-3 countup-item">
                <div class="counter slideanim" data-count="2200">0</div>
                <h3>Поступившие заявки</h3>
            </div>
            <div class="col-md-3 countup-item">
                <div class="counter slideanim" data-count="0">0</div>
                <h3>Поступившие заявки</h3>
            </div>
        </div>
    </div>
    <!-- //////////////////////////////////////////// end container-fluid4 ///////////////////////////////////////// -->
    <!-- ///////////////////////////////////////////// container-fluid5 ////////////////////////////////////////////  -->
    <div class="container dotted" id="container-fluid5">
        <h1>Новости</h1>
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-md-6 col-sm-12 news-col">
                        <div class="post">
                            <div class="post-img-content">
                                <img src="{{asset('images/Wallpapers/Wallpaper1.jpg')}}" class="img-responsive" />
                                <span class="post-title"><b>Make a Image Blur Effects With</b><br /></span>
                            </div>
                            <div class="content">
                                <div class="author">
                                    By <b>Bhaumik</b> |
                                    <time datetime="2014-01-20">January 20th, 2014</time>
                                </div>
                                <div>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                </div>
                                <div>
                                    <a href="" class="btn btn-primary btn-sm">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 news-col">
                        <div class="post">
                            <div class="post-img-content">
                                <img src="{{asset('images/Wallpapers/Wallpaper1.jpg')}}" class="img-responsive" />
                                <span class="post-title"><b>Make a Image Blur Effects With</b><br /></span>
                            </div>
                            <div class="content">
                                <div class="author">
                                    By <b>Bhaumik</b> |
                                    <time datetime="2014-01-20">January 20th, 2014</time>
                                </div>
                                <div>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                </div>
                                <div>
                                    <a href="" class="btn btn-primary btn-sm">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 news-col">
                        <div class="post">
                            <div class="post-img-content">
                                <img src="{{asset('images/Wallpapers/Wallpaper1.jpg')}}" class="img-responsive" />
                                <span class="post-title"><b>Make a Image Blur Effects With</b><br /></span>
                            </div>
                            <div class="content">
                                <div class="author">
                                    By <b>Bhaumik</b> |
                                    <time datetime="2014-01-20">January 20th, 2014</time>
                                </div>
                                <div>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                </div>
                                <div>
                                    <a href="" class="btn btn-primary btn-sm">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 news-col">
                        <div class="post">
                            <div class="post-img-content">
                                <img src="{{asset('images/Wallpapers/Wallpaper1.jpg')}}" class="img-responsive" />
                                <span class="post-title"><b>Make a Image Blur Effects With</b><br /></span>
                            </div>
                            <div class="content">
                                <div class="author">
                                    By <b>Bhaumik</b> |
                                    <time datetime="2014-01-20">January 20th, 2014</time>
                                </div>
                                <div>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                </div>
                                <div>
                                    <a href="" class="btn btn-primary btn-sm">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 news-col">
                        <div class="post">
                            <div class="post-img-content">
                                <img src="{{asset('images/Wallpapers/Wallpaper1.jpg')}}" class="img-responsive" />
                                <span class="post-title"><b>Make a Image Blur Effects With</b><br /></span>
                            </div>
                            <div class="content">
                                <div class="author">
                                    By <b>Bhaumik</b> |
                                    <time datetime="2014-01-20">January 20th, 2014</time>
                                </div>
                                <div>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                </div>
                                <div>
                                    <a href="" class="btn btn-primary btn-sm">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 news-col">
                        <div class="post">
                            <div class="post-img-content">
                                <img src="{{asset('images/Wallpapers/Wallpaper1.jpg')}}" class="img-responsive" />
                                <span class="post-title"><b>Make a Image Blur Effects With</b><br /></span>
                            </div>
                            <div class="content">
                                <div class="author">
                                    By <b>Bhaumik</b> |
                                    <time datetime="2014-01-20">January 20th, 2014</time>
                                </div>
                                <div>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                </div>
                                <div>
                                    <a href="" class="btn btn-primary btn-sm">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--///////////////////////////////////////////////////// RECENT POST  ///////////////////////////////////////////-->
            <div class="col-lg-4">
                <div class="widget-sidebar">
                    <h2 class="title-widget-sidebar">// Последние новости</h2>
                    <div class="content-widget-sidebar">
                        <ul>
                            <li class="recent-post">
                                <div class="post-img">
                                    <img src="{{asset('images/Wallpapers/Wallpaper1.jpg')}}" class="img-responsive">
                                </div>
                                <a href="#"><h5>Excepteur sint occaecat cupi non proident laborum.</h5></a>
                                <p><small><i class="fa fa-calendar" data-original-title="" title=""></i> </small></p>
                            </li>
                            <hr>
                            <li class="recent-post">
                                <div class="post-img">
                                    <img src="{{asset('images/Wallpapers/Wallpaper1.jpg')}}" class="img-responsive">
                                </div>
                                <a href="#"><h5>Excepteur sint occaecat cupi non proident laborum.</h5></a>
                                <p><small><i class="fa fa-calendar" data-original-title="" title=""></i></small></p>
                            </li>
                            <hr>
                            <li class="recent-post">
                                <div class="post-img">
                                    <img src="{{asset('images/Wallpapers/Wallpaper1.jpg')}}" class="img-responsive">
                                </div>
                                <a href="#"><h5>Excepteur sint occaecat cupi non proident laborum.</h5></a>
                                <p><small><i class="fa fa-calendar" data-original-title="" title=""></i></small></p>
                            </li>
                            <hr>
                            <li class="recent-post">
                                <div class="post-img">
                                    <img src="{{asset('images/Wallpapers/Wallpaper1.jpg')}}" class="img-responsive">
                                </div>
                                <a href="#"><h5>Excepteur sint occaecat cupi non proident laborum.</h5></a>
                                <p><small><i class="fa fa-calendar" data-original-title="" title=""></i></small></p>
                            </li>
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
                                    <img src="{{asset('images/Wallpapers/Wallpaper1.jpg')}}" class="img-responsive">
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
                                    <img src="{{asset('images/Wallpapers/Wallpaper1.jpg')}}" class="img-responsive">
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
                                    <img src="{{asset('images/Wallpapers/Wallpaper1.jpg')}}" class="img-responsive">
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
                                    <img src="{{asset('images/Wallpapers/Wallpaper1.jpg')}}" class="img-responsive">
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
    <!-- ///////////////////////////////////////////// end container-fluid5 ////////////////////////////////////////////  -->
    <!-- ///////////////////////////////////////////// container-fluid6 /////////////////////////////////////////////////  -->
    <div class="container dotted" id="container-fluid6">
        <h1>Наши резиденты</h1>
        <div class="row">
            <div class="col-md-12">
                <div id="Carousel" class="carousel slide">
                    <ol class="carousel-indicators">
                        <li data-target="#Carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#Carousel" data-slide-to="1"></li>
                    </ol>
                    <!-- Carousel items -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="row">
                                <div class="col-md-2"><a href="#" class="thumbnail"><img src="{{asset('images/photos/artel.jpg')}}" alt="Image" style="max-width:100%;"></a></div>
                                <div class="col-md-2"><a href="#" class="thumbnail"><img src="{{asset('images/photos/artel.jpg')}}" alt="Image" style="max-width:100%;"></a></div>
                                <div class="col-md-2"><a href="#" class="thumbnail"><img src="{{asset('images/photos/artel.jpg')}}" alt="Image" style="max-width:100%;"></a></div>
                                <div class="col-md-2"><a href="#" class="thumbnail"><img src="{{asset('images/photos/artel.jpg')}}" alt="Image" style="max-width:100%;"></a></div>
                                <div class="col-md-2"><a href="#" class="thumbnail"><img src="{{asset('images/photos/artel.jpg')}}" alt="Image" style="max-width:100%;"></a></div>
                                <div class="col-md-2"><a href="#" class="thumbnail"><img src="{{asset('images/photos/artel.jpg')}}" alt="Image" style="max-width:100%;"></a></div>
                            </div>
                            <!--.row-->
                        </div>
                        <!--.item-->
                        <div class="item">
                            <div class="row">
                                <div class="col-md-2"><a href="#" class="thumbnail"><img src="{{asset('images/photos/artel.jpg')}}" alt="Image" style="max-width:100%;"></a></div>
                                <div class="col-md-2"><a href="#" class="thumbnail"><img src="{{asset('images/photos/artel.jpg')}}" alt="Image" style="max-width:100%;"></a></div>
                                <div class="col-md-2"><a href="#" class="thumbnail"><img src="{{asset('images/photos/artel.jpg')}}" alt="Image" style="max-width:100%;"></a></div>
                                <div class="col-md-2"><a href="#" class="thumbnail"><img src="{{asset('images/photos/artel.jpg')}}" alt="Image" style="max-width:100%;"></a></div>
                                <div class="col-md-2"><a href="#" class="thumbnail"><img src="{{asset('images/photos/artel.jpg')}}" alt="Image" style="max-width:100%;"></a></div>
                                <div class="col-md-2"><a href="#" class="thumbnail"><img src="{{asset('images/photos/artel.jpg')}}" alt="Image" style="max-width:100%;"></a></div>
                            </div>
                            <!--.row-->
                        </div>
                        <!--.item-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--//////////////////////////////////////////// end container-fluid6 /////////////////////////////////////////////////////////  -->
    <!-- ///////////////////////////////////////////// container-fluid7 /////////////////////////////////////////////////  -->
    <div class="container dotted" id="container-fluid6">
        <h1>Полезные сайты</h1>
        <div class="row">
            <div class="col-md-6">
                <a href="">
                    <div id="facebook">
                    </div>
                </a>
                <a href="">
                    <div id="google">
                    </div>
                </a>
            </div>
            <div class="col-md-6">
                <a href="">
                    <div id="telegram">
                    </div>
                </a>
                <a href="">
                    <div id="instagram">
                    </div>
                </a>
            </div>
        </div>
    </div>


@endsection