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
    <script type='text/javascript' src='{{asset('js/bootstrap.min.js')}}'></script>
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">

</head>
<!--///////////////////////////////////// body start /////////////////////////////////////////// -->

<body><!-- /////////////////////////////////////// Navbar //////////////////////////////////// -->
<nav class="navbar navbar-default navbar-doublerow navbar-trans navbar-fixed-top" id="navbar">
    <!-- top nav -->
    <nav class="navbar navbar-top hidden-xs">
        <div class="container">
            <!-- left nav top -->
            <ul class="nav navbar-nav pull-left">
                <li><a href="#"><span class="navbar-elements1">{{__('main.phone')}}</span></a></li>
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
                <a class="navbar-brand" href=""><img src="{{asset('images/photos/yash.png')}}" id="logo"></a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right hidden-xs">
                    <li class="dropdown dropdown1">
                        <a class="navbar-elements1" data-toggle="dropdown" href="#">{{__('main.about')}}<i class="fa fa-chevron-down" aria-hidden="true"></i> </a>
                        <ul class="dropdown-menu dropdown-menu1">
                            <li><a class="dropdown-elements1" href="{{url('/preference-yic')}}" style="">{{__('main.preference')}}</a></li>
                            <li class="divider"></li>
                            <li><a class="dropdown-elements1" href="{{url('/aim')}}">{{__('main.maininfo')}}</a></li>
                            <li class="divider"></li>
                            <li><a class="dropdown-elements1" href="{{url('/coordinated-consulting')}}">{{__('main.cordination')}}</a></li>
                            <li class="divider"></li>
                            <li><a class="dropdown-elements1" href="{{url('/products')}}">{{__('main.product')}}</a></li>
                            <li class="divider"></li>
                            <li><a class="dropdown-elements1" href="{{url('/staff')}}">{{__('main.staff')}}</a></li>
                        </ul>
                    </li>
                    <li class="dropdown dropdown1">
                        <a class="navbar-elements1" data-toggle="dropdown" href="#">{{__('main.register')}}<i class="fa fa-chevron-down" aria-hidden="true"></i></a>
                        <ul class="dropdown-menu dropdown-menu1">
                            <li><a class="dropdown-elements1" href="{{url('/beresident')}}">{{__('main.resident')}}</a></li>
                            <li class="divider"></li>
                            <li><a class="dropdown-elements1" href="{{url('/how-to-join')}}">{{__('main.participate')}}</a></li>
                            <li class="divider"></li>
                            <li><a class="dropdown-elements1" href="{{url('/questions')}}">{{__('main.questions')}}</a></li>
                            <li class="divider"></li>
                            <li><a class="dropdown-elements1" href="{{url('/request')}}">{{__('main.ask')}}</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="navbar-elements1" href="{{url('/residents')}}">{{__('main.ourresident')}}</a>
                    </li>
                    <li>
                        <a class="navbar-elements1" href="{{url('/zones')}}">{{__('main.zone')}}</a>
                    </li>
                    <li class="dropdown dropdown1">
                        <a class="navbar-elements1" data-toggle="dropdown" href="#">{{__('main.press')}}<i class="fa fa-chevron-down" aria-hidden="true"></i></a>
                        <ul class="dropdown-menu dropdown-menu1">
                            <li><a class="dropdown-elements1" href="{{url('/news/')}}">{{__('main.news')}}</a></li>
                            <li class="divider"></li>
                            <li><a class="dropdown-elements1" href="{{url('/popular-info')}}">{{__('main.smi')}}</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="navbar-elements1" href="{{url('/contact')}}">{{__('main.contact')}}</a>
                    </li>
                </ul>
                <!--////////////////////////////////////////////////// mobile navbar ///////////////////////////////////////-->
                <ul class="nav navbar-nav navbar-right visible-xs">
                    <li class="dropdown">
                        <a class="dropdown-toggle navbar-elements1" data-toggle="dropdown" href="#">{{__('main.about')}}<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a class="navbar-elements1" href="{{url('/preference-yic')}}">{{__('main.preference')}}</a></li><li class="divider"></li>
                            <li><a class="navbar-elements1" href="{{url('/aim')}}">{{__('main.maim')}}</a></li><li class="divider"></li>
                            <li><a class="navbar-elements1" href="{{url('/coordinated-consulting')}}">{{__('main.cordination')}}</a></li><li class="divider"></li>
                            <li><a class="navbar-elements1" href="{{url('/products')}}">{{__('main.product')}}</a></li><li class="divider"></li>
                            <li><a class="navbar-elements1" href="{{url('/staff')}}">{{__('main.staff')}}</a></li><li class="divider"></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle navbar-elements1" data-toggle="dropdown" href="#">{{__('main.register')}}<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a class="navbar-elements1" href="{{url('beresident')}}">{{__('main.resident')}}</a></li><li class="divider"></li>
                            <li><a class="navbar-elements1" href="{{url('/how-to-join')}}">{{__('main.participate')}}</a></li><li class="divider"></li>
                            <li><a class="navbar-elements1" href="{{url('/questions')}}">{{__('main.questions')}}</a></li><li class="divider"></li>
                            <li><a class="navbar-elements1" href="{{url('request')}}">{{__('main.ask')}}</a></li><li class="divider"></li>
                        </ul>
                    </li>
                    <li>
                        <a class="navbar-elements1" href="{{url('/residents')}}">{{__('main.ourresident')}}</a>
                    </li>
                    <li>
                        <a class="navbar-elements1" href="{{url('/zones')}}">{{__('main.zone')}}</a>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle navbar-elements1" data-toggle="dropdown" href="#">{{__('main.press')}}<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a class="navbar-elements1" href="{{url('/news')}}">{{__('main.news')}}</a></li><li class="divider"></li>
                            <li><a class="navbar-elements1" href="{{url('/popular-info')}}">{{__('main.smi')}}</a></li><li class="divider"></li>
                        </ul>
                    </li>

                    <li>
                        <a class="navbar-elements1" href="{{url('/contact')}}">{{__('main.contact')}}</a>
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
        <h1>{{__('main.H1')}}</h1>
        <div class="row">
            <div class="submit-wrapper">
                <a href="{{url('/request')}}">{{__('main.request')}}</a>
        </div>
        </div>
        <div class="row hidden-sm hidden-xs" id="icons-row">
            <div class="col-md-3">
                    <span>
                        <a href="{{url('/normative')}}" class="container-fluid-a">
                        <i class="fa fa-gavel icons" aria-hidden="true"></i>
                        <p class="icon-under-text">{{__('main.normativ')}}</p>
                        </a>
                    </span>
            </div>
            <div class="col-md-3">
                    <span>
                        <a href="{{url('/reception')}}" class="container-fluid-a">
                        <i class="fa fa-pencil-square-o icons" aria-hidden="true"></i>
                        <p class="icon-under-text">{{__('main.record')}}</p>
                        </a>

                    </span>
            </div>
            <div class="col-md-3">
                    <span>
                        <a href="{{url('/questions')}}" class="container-fluid-a">
                        <i class="fa fa-question-circle-o icons" aria-hidden="true"></i>
                        <p class="icon-under-text">{{__('main.faq')}}</p>
                        </a>

                    </span>
            </div>
            <div class="col-md-3">
                    <span>
                        <a href="{{url('/reester')}}" class="container-fluid-a">
                        <i class="fa fa-table icons" aria-hidden="true"></i>
                        <p class="icon-under-text">{{__('main.reestr')}}</p>
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
                <img src="{{asset('images/photos/yash.png')}}" id="footer-logo">
                <p>
                        <br> @lang('main.© 2017 Инновационный технопарк "Яшнабад".')
                        <br> @lang('main.Все права защищены.')
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
                <h2 class="footer-h1">{{__('main.about')}}</h2>
                <ul>
                    <li><a href="{{url('/preference-yic')}}">{{__('main.preference')}}</a></li>
                    <li><a href="{{url('/aim')}}">Главная информация</a></li>
                    <li><a href="{{url('/coordinated-consulting')}}">{{__('main.cordination')}}</a></li>
                    <li><a href="{{url('/products')}}">{{__('main.product')}}</a></li>
                    <li><a href="{{url('/staff')}}">{{__('main.staff')}}</a></li>
                </ul>
            </div>
            <div class="col-md-2 footer-col">
                <h2 class="footer-h1">{{__('main.register')}}</h2>
                <ul>
                    <li><a href="{{url('beresident')}}">{{__('main.resident')}}</a></li>
                    <li><a href="{{url('/how-to-join')}}">{{__('main.participate')}}</a></li>
                    <li><a href="{{url('/questions')}}">{{__('main.questions')}}</a></li>
                    <li><a href="{{url('request')}}">{{__('main.ask')}}</a></li>
                </ul>
            </div>
            <div class="col-md-2 footer-col">
                <h2 class="footer-h1">{{__('main.press')}}</h2>
                <ul>
                    <li><a href="{{url('/news')}}">{{__('main.news')}}</a></li>
                    <li><a href="{{url('/popular-info')}}">{{__('main.smi')}}</a></li>
                </ul>
            </div>
            <div class="col-md-3 footer-col">
                <h2 class="footer-h1">@lang('main.Наш адрес')</h2>
                <ul>
                    <li class="address">@lang('main.Республика Узбекистан')</li>
                    <li class="address">@lang('main.Город Ташкент')</li>
                    <li class="address">@lang('main.Яшнабадский район')</li>
                    <li class="address">@lang('main.Улица Мажнунтол 5')</li>
                    <li class="address">@lang('main.Тел:')
                                                                <br>+99871 296 04 22
                                                                <br>+99893 652 42 50</li>
                </ul>
            </div>
        </div>
        <hr>
        <div class="row text-center">
            <a href="">@lang('main.IUTLab.All rights reserved.')</a>
        </div>
    </div>
</footer>
<!--/////////////////////////////////////////////// end Footer /////////////////////////////////////////////////////////////  -->
<a href="#" class="scrollToTop"> <span class="fa fa-arrow-up"></span></a>
<script src="{{asset('js/java1.js')}}"></script>
<script src="{{asset('js/java.js')}}"></script>
</body>
</html>