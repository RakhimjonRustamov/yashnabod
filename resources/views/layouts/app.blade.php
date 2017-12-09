<!DOCTYPE html>
<html lang="en">

<head>
    <title>Yashnabod</title>
    <link rel="icon" href="" type="image/x-icon">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">

    @yield('stylesheets')
    @yield('scripts')

    <script type='text/javascript' src='{{asset('js/jquery-3.2.1.min.js')}}'></script>
    <script type='text/javascript' src='{{asset('js/bootstrap.min.js')}}'></script>

</head>
<!--///////////////////////////////////// body start /////////////////////////////////////////// -->

<body><!-- /////////////////////////////////////// Navbar //////////////////////////////////// -->
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
                <a class="navbar-brand" href="#myPage"><img src="{{asset('images/photos/logo.png')}}" id="logo"></a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right hidden-xs">
                    <li class="dropdown dropdown1">
                        <a class="navbar-elements1" data-toggle="dropdown" href="#">О нас </a>
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
                        <a class="navbar-elements1" data-toggle="dropdown" href="#">Регистрация</a>
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
                        <a class="navbar-elements1" data-toggle="dropdown" href="#">Пресса</a>
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
<div class="container-fluid " id="container-fluid">
    <ul class="hidden-xs" id="container-fluid-iconbar">
        <li><a href=""><i class="fa fa-facebook-square container-fluid-icon" id="fa-facebook" aria-hidden="true"></i></a></li>
        <li><a href=""><i class="fa fa-google-plus-square container-fluid-icon" id="fa-google" aria-hidden="true"></i></a></li>
        <li><a href=""><i class="fa fa-telegram container-fluid-icon" id="fa-telegram" aria-hidden="true"></i></a></li>
        <li><a href=""><i class="fa fa-instagram container-fluid-icon" id="fa-instagram" aria-hidden="true"></i></a></li>
    </ul>
    <div class="container" id="fade-container">
        <h1>Инновационный технопарк "Яшнабад"<br>Мы приближаем будущее</h1>
        <div class="row">
            <div class="submit-wrapper">
                <a href="{{url('/request')}}">Подать заявку</a>
            </div>
        </div>
        <div class="row hidden-sm hidden-xs" id="icons-row">
            <div class="col-md-3">
                    <span>
                        <a href="{{url('/normative')}}" class="container-fluid-a">
                        <i class="fa fa-gavel icons" aria-hidden="true"></i>
                        <p class="icon-under-text">Нормативно правовая <br> база</p>
                        </a>
                    </span>
            </div>
            <div class="col-md-3">
                    <span>
                        <a href="{{url('/reception')}}" class="container-fluid-a">
                        <i class="fa fa-pencil-square-o icons" aria-hidden="true"></i>
                        <p class="icon-under-text">Записаться на прием <br> в дирекцию</p>
                        </a>

                    </span>
            </div>
            <div class="col-md-3">
                    <span>
                        <a href="{{url('/questions')}}" class="container-fluid-a">
                        <i class="fa fa-question-circle-o icons" aria-hidden="true"></i>
                        <p class="icon-under-text">FAQ</p>
                        </a>

                    </span>
            </div>
            <div class="col-md-3">
                    <span>
                        <a href="{{url('/reester')}}" class="container-fluid-a">
                        <i class="fa fa-table icons" aria-hidden="true"></i>
                        <p class="icon-under-text">Реестр</p>
                        </a>
                    </span>
            </div>
        </div>
    </div>
</div>
<!--///////////////////////////////////////// end container-fluid ////////////////////////////////////// -->



@yield('content')



<!--//////////////////////////////////////////// end container-fluid7 /////////////////////////////////////////////////////////  -->
<!-- //////////////////////////////////////////////// Footer ////////////////////////////////////////////////////////////// -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <img src="{{asset('images/photos/logo.png')}}" id="footer-logo">
                <p>
                    <br> © 2017 Инновационный технопарк "Яшнабад".
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
            <div class="col-md-2 footer-col">
                <h2 class="footer-h1">О нас</h2>
                <ul>
                    <li><a href="{{url('/preference-yic')}}">Почему Яшнабад?</a></li>
                    <li><a href="{{url('/aim')}}">Главная информация</a></li>
                    <li><a href="{{url('/coordinated-consulting')}}">Кординационный совет</a></li>
                    <li><a href="{{url('/products')}}">Наши продукции</a></li>
                    <li><a href="{{url('/staff')}}">Сотрудники</a></li>
                </ul>
            </div>
            <div class="col-md-2 footer-col">
                <h2 class="footer-h1">Регистрация</h2>
                <ul>
                    <li><a href="{{url('beresident')}}">Как стать резидентом?</a></li>
                    <li><a href="{{url('/how-to-join')}}">Как вступить?</a></li>
                    <li><a href="{{url('/questions')}}">Вопросы и ответы</a></li>
                    <li><a href="{{url('request')}}">Подать заявку</a></li>
                </ul>
            </div>
            <div class="col-md-2 footer-col">
                <h2 class="footer-h1">Пресса</h2>
                <ul>
                    <li><a href="{{url('/news')}}">Новости</a></li>
                    <li><a href="{{url('/popular-info')}}">СМИ о нас</a></li>
                </ul>
            </div>
            <div class="col-md-3 footer-col">
                <h2 class="footer-h1">Наш адрес</h2>
                <ul>
                    <li class="address">Республика Узбекистан</li>
                    <li class="address">Город Ташкент</li>
                    <li class="address">Яшнабадский район</li>
                    <li class="address">Улица Мажнунтол 5</li>
                    <li class="address">Тел:
                        <br>+99871 296 04 22
                        <br>+99893 652 42 50</li>
                </ul>
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