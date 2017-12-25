@extends('layouts.app-content')
@section('title', 'Error')

@section('stylesheets')
<link rel="stylesheet" type="text/css" href="{{ asset('css/error.css')}}">
@endsection

@section('content')
@section('page-title')
<h1>Ошибка 404</h1>
@endsection

<div class="container-fluid dotted">
    <div class="row">
        <div class="col-md-12">
            <div class="error">
                <h1>
                    Упс!
                </h1>
                <h2>
                    Страница 404 не найдено
                </h2>
                <div class="error-details">
                    Просим прощение. Мы не смогли найти страницу!
                </div>
                <div class="error-actions">
                    <a href="{{url('/')}}" class="btn btn-primary btn-lg"><span class="fa fa-home"></span>
                        Домой</a>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection