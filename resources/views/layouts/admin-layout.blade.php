<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Admin</title>

    <!-- Styles -->
    <link rel="shortcut icon" href="{{ asset('images/photos/tuftalogo.png')}}" type="image/png">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet" type="text/css">

    @yield('stylesheets')

    <!-- Scripts -->
    <script type="text/javascript" src="{{ asset('js/jquery-3.2.1.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>

    @yield('scripts')
</head>
<body  style="background-color:#e6e6ff;">
<div class="container-fluid">
        <nav class="navbar navbar-inverse ">
            <div class="container-fluid">
                <!-- LOGO -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#topNavBar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{ url('/')}}"> YashTechno</a>
                </div>

                <!-- Items -->
                <div class="collapse navbar-collapse" id="topNavBar">
                    <ul class="nav navbar-nav">
                        <li class="{{ Request::is('admin')?"active":""}}" ><a href="{{ url('admin')}}">Admin</a>
                        </li>
                        <li class="{{ Request::is('admin/residents')?"active":""}}" ><a href="{{ url('admin/residents')}}">Residents</a></li>
                        <li class="{{ Request::is('admin/products')?"active":""}}" ><a href="{{ url('admin/products')}}">Products</a></li>
                        <li class="{{ Request::is('admin/posts')?"active":""}}" ><a href="{{ url('admin/posts')}}">Posts</a></li>
                        <li class="{{ Request::is('admin/receptions')?"active":""}}" ><a href="{{ url('admin/receptions')}}">Receptions</a></li>
                        <li class="{{ Request::is('admin/posts/create')?"active":""}}" ><a href="{{ url('admin/posts/create')}}">Add New Post</a></li>
                        <li class="{{ Request::is('admin/employees')?"active":""}}" ><a href="{{ url('admin/employees')}}">Employees</a></li>
                        <li class="{{ Request::is('admin/offers')?"active":""}}" ><a href="{{ url('admin/offers')}}">Offers</a></li>
                        <li class="{{ Request::is('admin/popularity')?"active":""}}" ><a href="{{route('popularity.index')}}">Popularity</a></li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li class="#">
                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                Bыйти
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    @yield('content')

</div>
</body>
</html>
