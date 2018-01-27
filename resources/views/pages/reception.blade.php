@extends('layouts.app-content')
@section('title',Lang::get('reception.title'))
@section('stylesheets')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/reception.css') }}">
@endsection

@section('content')
@section('page-title')
<h1>@lang('reception.Записаться на прием в Дирекцию')</h1>
@endsection
    <div class="container-fluid dotted">
        <div class="container" id="container-fluid-reception">
            <h1>@lang('reception.Записаться на прием в Дирекцию')</h1>
            <div class="row">
                <form action="{{route('reception')}}" method="POST">
                    {{csrf_field()}}
                <div class="col-md-12">
                    <div class="col-md-6">
                        <p>@lang('reception.Ф.И.О') <i class="fa fa-user icon-reception" aria-hidden="true"></i></p>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="" required name="full_name">
                        </div>
                        <p>@lang('reception.Телефон')<i class="fa fa-phone icon-reception" aria-hidden="true"></i></p>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><b>+998</b></span>
                                <input type="number" class="form-control" placeholder="" required name="phone">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <p>@lang('reception.Дата')<i class="fa fa-calendar icon-reception" aria-hidden="true"></i></p>
                        <div class="form-group">
                            <input type="date" class="form-control" placeholder="" name="date_appointment" required="required">
                        </div>
                        <p>@lang('reception.E-mail')<i class="fa fa-envelope icon-reception" aria-hidden="true"></i></p>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="" required name="email">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <p>@lang('reception.Краткая информация об инновационном проекте')</p>
                        <div class="form-group">
                            <textarea class="form-control" name="project_info" placeholder="" rows="5" cols="60"></textarea>
                        </div>
                        <p>@lang('reception.Каким способом Вам сообщить о дате приема?')</p>
                        <div class="form-group">
                            <input type="radio" name="inform" value="telephone" checked="checked"> @lang('reception.по телефону')
                            <br>
                            <input type="radio" name="inform" value="email"> @lang('reception.по почте')
                            <br>
                        </div>
                    </div>
                </div>
                    <div class="row row-contacts">
                        <div class="col-md-4" class="contacts-form">
                            <button type="submit" class="btn btn-success" id="contact-us-button">@lang('reception.Отправить')</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <!--//////////////////////////////////////////// end container-fluid7 /////////////////////////////////////////////////////////  -->
@endsection