@extends('layouts.app')
@section('title'| 'Apply Now')@stop
@section('stylesheets')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/application.css') }}">
@endsection

@section('content')
    <div class="container-fluid dotted" id="application-container-fluid1">
        <h1>Подать заявку</h1>
        <div class="container" id="container">
            <div class="row">
                <form action="{{route('offer.request')}}" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="col-md-5 ">
                    <div class="bgwhite">
                        <div class="img-request">
                            <img src="https://muic.uz/uploads/pages/31a31e35a9347c92ec7cb35a83d01cf1.png" alt="">
                        </div>
                        <h4>Представьтесь</h4>
                        <div class="form-group">
                            <input required="required" class="form-control" placeholder="Имя " type="text" id="first_name" name="name">
                            <div class="bar"></div>
                        </div>
                        <div class="form-group">
                            <input required="required" class="form-control" placeholder="Фамилия " type="text" id="sur_name" name="surname">
                            <div class="bar"></div>
                        </div>
                        <div class="form-group">
                            <input required="required" class="form-control" placeholder="Название должности " type="text" id="position_name" name="position">
                            <div class="bar"></div>
                        </div>
                        <div class="form-group">
                            <input required="required" class="form-control" placeholder="Организация " type="text" id="organisation" name="organization">
                            <div class="bar"></div>
                        </div>
                        <div class="form-group">
                            <select name="region" id="ap_region" class="form-control" required="required">
                                <option value="">Регион</option>
                                <option value="6" id="6">Ташкент</option>
                                <option value="7" id="7">Ташкентская область </option>
                                <option value="9" id="9">Андижанская область</option>
                                <option value="10" id="10">Бухарская область</option>
                                <option value="11" id="11">Джизакская область</option>
                                <option value="12" id="12">Кашкадарьинская область</option>
                                <option value="14" id="14">Навоийская область</option>
                                <option value="15" id="15">Наманганская область</option>
                                <option value="16" id="16">Самаркандская область</option>
                                <option value="17" id="17">Сурхандарьинская область</option>
                                <option value="18" id="18">Сырдарьинская область</option>
                                <option value="19" id="19">Ферганская область</option>
                                <option value="20" id="20">Хорезмская область</option>
                                <option value="21" id="21">Республика Каракалпакстан</option>
                            </select>
                            <div class="bar"></div>
                        </div>
                    </div>
                    <div class="bgwhite">
                        <h4>Контакты</h4>
                        <div class="form-group">
                            <input required="required" class="form-control" type="email" id="email" placeholder="Э-почта" name="email">
                            <div class="bar"></div>
                        </div>
                        <div class="form-group phone_num">
                            <label class="label">Номер телефона</label>
                            <div class="numcode">+998</div>
                            <input class="form-control" type="tel" id="phone" name="phone"  required="required"/>
                            <div class="bar "></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 ">
                    <div class="info ">
                        <input type="file" name="documents" class="form-control" required="required" value="">
                    </div>
                    <div class="row ">
                        <div class="col-md-6 ">
                        </div>
                    </div>
                <button type="submit" class="button send_req"><i class="fa fa-paper-plane-o" aria-hidden="true"></i> Отправить заявку</button>
                </div>
                </form>
                @include('partials._message')
                    // Form dan tashqarida tursa yaxshiro Designni ozgartirasizda
                <a href="{{url('/download')}}">FILE ZIIIIIPPPPPP</a>
            </div>
        </div>
    </div>

@endsection