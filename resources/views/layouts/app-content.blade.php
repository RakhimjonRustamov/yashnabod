<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    <link rel="icon" href="" type="image/x-icon">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/footer.css') }}">
    @yield('stylesheets')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="shortcut icon" href="{{ asset('images/photos/yash.png')}}" type="image/png">
    <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">

    @yield('scripts')

    <script type='text/javascript' src='{{asset('js/jquery-3.2.1.min.js')}}'></script>
    <script type='text/javascript' src='{{  asset('js/bootstrap.min.js')}}'></script>
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
</head>
<!--///////////////////////////////////// body start /////////////////////////////////////////// -->

<body>








<!-- /////////////////////////////////////// Navbar //////////////////////////////////// -->
<nav class="navbar navbar-default navbar-doublerow navbar-trans navbar-fixed-top" id="navbar">
    <!-- top nav -->
    <nav class="navbar navbar-top hidden-xs">
        <div class="container">
            <!-- left nav top -->
            <ul class="nav navbar-nav pull-left">
                <li><a href="#"><span class="navbar-elements1">ЕСТЬ ВОПРОСЫ? ЗВОНИТЕ: <b>+963000000000</b></span></a></li>
            </ul>
            <!-- right nav top -->
            <ul class="nav navbar-nav pull-right">
                <li>
                        <span class="glyphicon glyphicon-search" id="glyphicon-search">
            <form action="{{route('search')}}" autocomplete="off">
             <input id="search" name="search" type="text" placeholder="Что ищем?"><input id="search_submit" value="Rechercher" type="submit">
            </form>
          </span>
                </li>
                <a href="{{route('lang.switch', ['locale'=>'ru'])}}"><i class="fa fa-globe" id="fa-globe"></i><span>Russian</span></a>
                <a href="{{route('lang.switch', ['locale'=>'en'])}}"><i class="fa fa-globe" id="fa-globe"></i><span>English</span></a>
                <a href="{{route('lang.switch', ['locale'=>'uz'])}}"><i class="fa fa-globe" id="fa-globe"></i><span>Uzbek</span></a>
            </ul>
        </div>
    </nav>
    <!-- down nav -->
    <nav class="navbar navbar-default" id="navbar">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{url('/')}}"><img src="{{asset('images/photos/yash.png')}}" id="logo"></a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right hidden-xs">
                    <li class="dropdown dropdown1">
                        <a class="navbar-elements1" data-toggle="dropdown" href="#">О нас <i class="fa fa-chevron-down" aria-hidden="true"></i></a>
                        <ul class="dropdown-menu dropdown-menu1">
                            <li><a class="dropdown-elements1" href="{{url('/preference-yic')}}" style="">Почему Яшнабад</a></li>
                            <li class="divider"></li>
                            <li><a class="dropdown-elements1" href="{{url('/aim')}}">Главная информация</a></li>
                            <li class="divider"></li>
                            <li><a class="dropdown-elements1" href="{{url('/coordinated-consulting')}}">Координационный Совет</a></li>
                            <li class="divider"></li>
                            <li><a class="dropdown-elements1" href="{{url('/products')}}">Наши продукции</a></li>
                            <li class="divider"></li>
                            <li><a class="dropdown-elements1" href="{{url('/staff')}}">Сотрудники</a></li>
                        </ul>
                    </li>
                    <li class="dropdown dropdown1">
                        <a class="navbar-elements1" data-toggle="dropdown" href="#">Регистрация <i class="fa fa-chevron-down" aria-hidden="true"></i></a>
                        <ul class="dropdown-menu dropdown-menu1">
                            <li><a class="dropdown-elements1" href="{{url('beresident')}}">Как стать резидентом?</a></li>
                            <li class="divider"></li>
                            <li><a class="dropdown-elements1" href="{{url('/how-to-join')}}">Как вступить?</a></li>
                            <li class="divider"></li>
                            <li><a class="dropdown-elements1" href="{{url('/questions')}}">Вопросы и ответы</a></li>
                            <li class="divider"></li>
                            <li><a class="dropdown-elements1" href="{{url('request')}}">Подать заявку</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="navbar-elements1" href="{{url('/residents')}}">Наши резиденты</a>
                    </li>
                    <li>
                        <a class="navbar-elements1" href="{{url('/zones')}}">Зоны производства</a>
                    </li>
                    <li class="dropdown dropdown1">
                        <a class="navbar-elements1" data-toggle="dropdown" href="#">Пресса <i class="fa fa-chevron-down" aria-hidden="true"></i></a>
                        <ul class="dropdown-menu dropdown-menu1">
                            <li><a class="dropdown-elements1" href="{{url('/news')}}">Новости</a></li>
                            <li class="divider"></li>
                            <li><a class="dropdown-elements1" href="{{url('/popular-info')}}">СМИ о нас</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="navbar-elements1" href="{{url('/contact')}}">Контакты</a>
                    </li>
                </ul>
                <!--////////////////////////////////////////////////// mobile navbar ///////////////////////////////////////-->
                <ul class="nav navbar-nav navbar-right visible-xs">
                    <li class="dropdown">
                        <a class="dropdown-toggle navbar-elements1" data-toggle="dropdown" href="#">О нас<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a class="navbar-elements1" href="{{url('/preference-yic')}}">Почему Яшнабад</a></li><li class="divider"></li>
                            <li><a class="navbar-elements1" href="{{url('/aim')}}">Главная информация</a></li><li class="divider"></li>
                            <li><a class="navbar-elements1" href="{{url('/coordinated-consulting')}}">Координационный Совет</a></li><li class="divider"></li>
                            <li><a class="navbar-elements1" href="{{url('/products')}}">Наши продукции</a></li><li class="divider"></li>
                            <li><a class="navbar-elements1" href="{{url('/staff')}}">Сотрудники</a></li><li class="divider"></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle navbar-elements1" data-toggle="dropdown" href="#">Регистрация<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a class="navbar-elements1" href="{{url('beresident')}}">Как стать резидентом?</a></li><li class="divider"></li>
                            <li><a class="navbar-elements1" href="{{url('/how-to-join')}}">Как вступить?</a></li><li class="divider"></li>
                            <li><a class="navbar-elements1" href="{{url('/questions')}}">Вопросы и ответы</a></li><li class="divider"></li>
                            <li><a class="navbar-elements1" href="{{url('request')}}">Подать заявку</a></li><li class="divider"></li>
                        </ul>
                    </li>
                    <li>
                        <a class="navbar-elements1" href="{{url('/residents')}}">Резиденты</a>
                    </li>
                    <li>
                        <a class="navbar-elements1" href="{{url('/zones')}}">Зоны производства</a>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle navbar-elements1" data-toggle="dropdown" href="#">Пресса<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a class="navbar-elements1" href="{{url('/news')}}">Новости</a></li><li class="divider"></li>
                            <li><a class="navbar-elements1" href="{{url('/popular-info')}}">СМИ о нас</a></li><li class="divider"></li>
                        </ul>
                    </li>

                    <li>
                        <a class="navbar-elements1" href="{{url('/contact')}}">Контакты</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</nav>
<!-- ///////////////////////////////////////// end navbar //////////////////////////////////////  -->


<!-- ////////////////////////////////// container-fluid /////////////////////////////////////////////////// -->
<div class="container-fluid" id="other-container-fluid">
    <!-- ////////////////////////////////// fade container ///////////////////////////////////////// -->
    <div class="container" id="fade-container">
        <h1>@yield('page-title')</h1>
        <hr width="400px">
        <hr width="50px">
        <div class="row">
            <div class="submit-wrapper">
                <a href="#">@lang('main.language')</a>
            </div>
        </div>
    </div>
    <!-- ///////////////////////////////// end fade container //////////////////////////////////////////-->
</div>
<!--///////////////////////////////////////// end container-fluid ////////////////////////////////////// -->


@yield('content')


<!--//////////////////////////////////////////// end container-fluid7 /////////////////////////////////////////////////////////  -->
<!-- //////////////////////////////////////////////// Footer ////////////////////////////////////////////////////////////// -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img src="{{asset('images/photos/yash.png')}}" id="footer-logo">
                <p>
                    <br> © 2017 Yashnabod Innovation Center.
                    <br> Все права защищены.
                </p>
                <div class="footer-social">
                    <ul>
                        <li><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        <li><a href=""><i class="fa fa-google" aria-hidden="true"></i></a></li>
                        <li><a href=""><i class="fa fa-send" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-2">
            </div>
            <div class="col-md-2">
            </div>
            <div class="col-md-2">
            </div>
            <div class="col-md-2">
            </div>
        </div>
        <hr>
        <div class="row text-center">
            <a href=""> ©IUTLab.All rights reserved.</a>
        </div>
    </div>
</footer>
<!--/////////////////////////////////////////////// end Footer /////////////////////////////////////////////////////////////  -->
<a href="#" class="scrollToTop"> <span class="fa fa-arrow-up"></span></a>
<script src="{{asset('js/java1.js')}}"></script>
<script src="{{asset('js/java.js')}}"></script>
</body>
</html>