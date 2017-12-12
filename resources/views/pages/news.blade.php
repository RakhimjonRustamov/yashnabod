@extends('layouts.app-content')
@section('title'| 'News')@stop
@section('stylesheets')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/news.css') }}">
@endsection
@section('content')
@section('page-title')
<h1>Новости</h1>
@endsection

<div class="container-fluid  dotted">
    <div class="container" id="news-container-fluid1">
        <h1>Новости</h1>
        <div class="row">
            <div class="col-md-8 " >
                <div class="news-column">
                    <div class="news thumbnail" style="background-image: url('{{ asset('images/photos/artel.jpg') }}')">
                    </div>
                </div>
                <div class="news-text">
                    <p>Технопарк — Это территориальная, научная, технологическая и техническая база для реализации инновационных проектов. Технопарк- имущественный комплекс, в котором объединены научно-исследовательские институты, объекты индустрии, деловые центры, выставочные площадки, учебные заведения, а также обслуживающие объекты: средства транспорта, подъездные пути, жилые поселки, охрана. Международная ассоциация технологических парков даёт своё определение объекту инновационной инфраструктуры. По мнению ассоциации, технопарк — это организация, управляемая специалистами, главной целью которых является увеличение благосостояния местного сообщества посредством продвижения инновационной культуры, а также состязательности инновационного бизнеса и научных организаций. Для достижения этих целей технопарк стимулирует и управляет потоками знаний и технологий между университетами, научно-исследовательскими институтами, компаниями и рынками. Он упрощает создание и рост инновационным компаниям с помощью инкубационных процессов и процессов выведения новых компаний из существующих (spin-off processes). Технопарк помимо высококачественных площадей обеспечивает другие услуги..</p>
                </div>
                <span class="blog-date">May 03, 2015</span>
            </div>
            <div class="col-md-4">
                <div class="widget-sidebar">
                    <h2 class="title-widget-sidebar">// Последние новости</h2>
                    <div class="content-widget-sidebar">
                        <ul>
                            <li class="recent-post">
                               <a href="">
                                <div class="news-column1">
                                    <div class="news1 thumbnail" style="background-image: url('{{ asset('images/photos/artel.jpg') }}')">
                                    </div>
                                </div>
                                <a href="#"><h5 class="text-center news1-text">Excepteur sint occaecat cupi non proident laborum.</h5></a>
                               </a>
                            </li>
                            <hr>
                            <li class="recent-post">
                                <a href="">
                                    <div class="news-column1">
                                        <div class="news1 thumbnail" style="background-image: url('{{ asset('images/photos/artel.jpg') }}')">
                                        </div>
                                    </div>
                                    <a href="#"><h5 class="text-center news1-text">Excepteur sint occaecat cupi non proident laborum.</h5></a>
                                </a>
                            </li>
                            <hr>
                            <li class="recent-post">
                                <a href="">
                                    <div class="news-column1">
                                        <div class="news1 thumbnail" style="background-image: url('{{ asset('images/photos/artel.jpg') }}')">
                                        </div>
                                    </div>
                                    <a href="#"><h5 class="text-center news1-text">Excepteur sint occaecat cupi non proident laborum.</h5></a>
                                </a>
                            </li>
                            <hr>
                            <li class="recent-post">
                                <a href="">
                                    <div class="news-column1">
                                        <div class="news1 thumbnail" style="background-image: url('{{ asset('images/photos/artel.jpg') }}')">
                                        </div>
                                    </div>
                                    <a href="#"><h5 class="text-center news1-text">Excepteur sint occaecat cupi non proident laborum.</h5></a>
                                </a>
                            </li>
                            <hr>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection