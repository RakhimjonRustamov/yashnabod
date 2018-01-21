@extends('layouts.app-content')
@section('title'| 'Apply Now')@stop
@section('stylesheets')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/application.css') }}">
@endsection

@section('content')
@section('page-title')
<h1>@lang('request.Подать заявку')</h1>
@endsection
    <div class="container-fluid dotted" id="application-container-fluid1">
        <h1>@lang('request.Подать заявку')</h1>
        <div class="container" id="container">
            <div class="row">
                <form action="{{route('offer.request')}}" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="col-md-6 ">
                    <div class="bgwhite">
                        <div class="img-request">
                            <img src="https://muic.uz/uploads/pages/31a31e35a9347c92ec7cb35a83d01cf1.png" alt="">
                        </div>
                        <h4>@lang('request.Представьтесь')</h4>
                        <div class="form-group">
                            <input required="required" class="form-control" placeholder="@lang('request.Имя') " type="text" id="first_name" name="name">
                            <div class="bar"></div>
                        </div>
                        <div class="form-group">
                            <input required="required" class="form-control" placeholder="@lang('request.Фамилия') " type="text" id="sur_name" name="surname">
                            <div class="bar"></div>
                        </div>
                        <div class="form-group">
                            <input required="required" class="form-control" placeholder="@lang('request.Название должности') " type="text" id="position_name" name="position">
                            <div class="bar"></div>
                        </div>
                        <div class="form-group">
                            <input required="required" class="form-control" placeholder="@lang('request.Организация') " type="text" id="organisation" name="organization">
                            <div class="bar"></div>
                        </div>
                        <div class="form-group">
                            <select name="region" id="ap_region" class="form-control" required="required">
                                <option value="">@lang('request.Регион')</option>
                                <option value="6" id="6">@lang('request.Ташкент')</option>
                                <option value="7" id="7">@lang('request.Ташкентская область')</option>
                                <option value="9" id="9">@lang('request.Андижанская область')</option>
                                <option value="10" id="10">@lang('request.Бухарская область')</option>
                                <option value="11" id="11">@lang('request.Джизакская область')</option>
                                <option value="12" id="12">@lang('request.Кашкадарьинская область')</option>
                                <option value="14" id="14">@lang('request.Навоийская область')</option>
                                <option value="15" id="15">@lang('request.Наманганская область')</option>
                                <option value="16" id="16">@lang('request.Самаркандская область')</option>
                                <option value="17" id="17">@lang('request.Сурхандарьинская область')</option>
                                <option value="18" id="18">@lang('request.Сырдарьинская область')</option>
                                <option value="19" id="19">@lang('request.Ферганская область')</option>
                                <option value="20" id="20">@lang('request.Хорезмская область')</option>
                                <option value="21" id="21">@lang('request.Республика Каракалпакстан')</option>
                            </select>
                            <div class="bar"></div>
                        </div>
                    </div>
                    <div class="bgwhite">
                        <h4>@lang('request.Контакты')</h4>
                        <div class="form-group">
                            <input required="required" class="form-control" type="email" id="email" placeholder="@lang('request.Э-почта')" name="email">
                            <div class="bar"></div>
                        </div>
                        <div class="form-group phone_num">
                            <label class="label">@lang('request.Номер телефона')</label>
                            <div class="numcode">+998</div>
                            <input class="form-control" type="tel" id="phone" name="phone"  required="required"/>
                            <div class="bar "></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6" id="request-rule">
                    <p class="text-justify"><b>@lang('request.Для получения статуса резидента инновационного технопарка “Яшнабад”, инициаторами инновационных проектов представляюстя в Дирекцию инновационного технопарка “Яшнабад” следующие документы:')
                        </b></p>
                    <ul>
                        <li>@lang('request.Паспорт инновационного проекта')</li>
                        <li>@lang('request.Аннотация к инновационному проекту')</li>
                        <li>@lang('request.Презентация инновационного проекта')</li>
                        <li>@lang('request.Заявления на получение статуса резидента')</li>
                    </ul>
                    <div class="col-md-12">
                        <div class="link ">
                            <a class="form-control form-group btn-primary download " href="{{url('/download')}}">
                                <i class="fa fa-download " aria-hidden="true "></i> @lang('request.Скачать файлы (шаблоны) для отправки заявок')
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-12 col-sm-12 col-12">
                        <div class="input-group">
                            <label class="input-group-btn">
                                <span class="btn btn-primary"><i class="fa fa-folder-open" aria-hidden="true"></i>
                                    @lang('request.Browse')<input type="file" name="documents" style="display: none;" multiple>
                                </span>
                            </label>
                            <input type="text" class="form-control" readonly>
                        </div>
                    </div>
                    @include('partials._message')

                <button type="submit" class="button send_req"><i class="fa fa-paper-plane-o" aria-hidden="true"></i> @lang('request.Отправить заявку')</button>


                </div>
                </form>

            </div>
        </div>
    </div>

@endsection