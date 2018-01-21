@extends('layouts.app-content')
@section('title', Lang::get('questions.title'))
@section('stylesheets')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/questionsanswers.css') }}">
@endsection
@section('content')
@section('page-title')
<h1>@lang('questions.Вопросы и ответы')</h1>
@endsection
    <div class="container-fluid dotted">
        <div class="container" id="container-fluid-questionsanswer1">
            <h1>@lang('questions.Вопросы и ответы')</h1>
            <div class="last-post">
                <button class="accordion">@lang('questions.Как стать резидентом?')</button>
                <div class="panel">
                    <div class="recent-post">
                      <!--   <p>Компании, осуществляющие одно из следующих видов деятельности согласно Общегосударственному классификатору видов экономической деятельности Республики Узбекистан (ОКЭД), утвержденному постановлением Кабинета Министров от 24 августа 2016 года № 275:</p> -->
                        <ol class="answer-bold">
                            <li>@lang('questions.Претендентом на получение статуса резидента технопарка может стать юридическое или физическое лицо (резидент Республики Узбекистан).')</li>
                            <li>@lang('questions.В случае положительного заключения Координационного совета по присвоению физическому лицу статуса резидента технопарка, данное физическое лицо создает юридическое лицо в установленном порядке в Яшнабадском районе г.Ташкента.')</li>
                            <li>@lang('questions.Отбор претендентов на получение статуса резидента технопарка «Яшнабад» осуществляется по схеме согласно приложению к настоящему Положению.')</li>
                            <li>@lang('questions.Количество резидентов технопарка не ограничено.')</li>
                            <li>@lang('questions.Присвоение статуса резидента технопарка осуществляется решением Координационного совета сроком до 10 лет по результатам отбора претендентов на получение статуса резидента технопарка «Яшнабад».')</li>
                            <li>@lang('questions.Дирекцией технопарка «Яшнабад» на основании решения Координационного совета осуществляется регистрация резидента технопарка с включением в Реестр резидентов и выдачей Свидетельства.')</li>
                            <li>@lang('questions.Статистический учет резидентов технопарка осуществляется в Яшнабадском районе г.Ташкента, в том числе в случаях получения статуса резидента технопарка с учетом принципа экстерриториальности.')</li>
                            <li>@lang('questions.На резидента технопарка в установленном порядке возлагаются обязательства, закрепленные в договоре с резидентами технопарка «Яшнабад» о реализации инновационных проектов, заключенном с Дирекцией технопарка «Яшнабад».')</li>
                            <li>@lang('questions.Резидент технопарка не вправе передавать свои права и обязанности другому лицу.')</li>
                            <li>@lang('questions.Лишение статуса резидента технопарка допускается по решению Координационного совета, в том числе по заключению Дирекции технопарка «Яшнабад», в случае несоблюдения резидентом технопарка условий и требований, определенных в договоре о реализации инновационного проекта, а также в добровольном или установленном законодательством порядке.')</li>
                        </ol>
                    </div>
                </div>
            </div>
            <hr>
            <div class="last-post">
                <button class="accordion">@lang('questions.Какие льготы и преференции существуют для резидентов технопарка?')</button>
                <div class="panel">
                    <div class="recent-post">
                        <p>Возможности инновационного технопарка «Яшнабад»</p>
                        <ol class="answer-bold">
                            <li>@lang('questions.«Налоговые каникулы» для резидентов технопарка')</li>
                            <li>@lang('questions.Льготное кредитование')</li>
                            <li>@lang('questions.Доступные производственные площади')</li>
                            <li>@lang('questions.Содействие в прохождении разрешительных процедур')</li>
                            <li>@lang('questions.Привлечение спонсоров и инвесторов для реализации проектов')</li>
                            <li>@lang('questions.Защита авторских прав на объекты интеллектуальной собственности')</li>
                        </ol>
                    </div>
                </div>
            </div>
            <hr>
            <div class="last-post">
                <button class="accordion">@lang('questions.На каких условиях представляются производственные площади для резидентов технопарка?')</button>
                <div class="panel">
                    <div class="recent-post">
                      <!--   <p>Дирекция MUIC рассмотрев заявление и документы, предоставленные юридическим лицом, с соответствующим заключением вносит в Координационный совет для рассмотрения вопроса о предоставлении статуса резидента Инновационного центра. Координационный совет, рассмотрев представленные документы, принимает решения о регистрации юридического лица в качестве резидента Инновационного центра или об отказе в регистрации.</p> -->
                      <ol class="answer-bold">
                          <li>@lang('questions.Земельные участки на территории Яшнабадского района г.Ташкента предоставляются резидентам технопарка для организации инновационного производства и «стартапов» в постоянное пользование.')</li>
                          <li>@lang('questions.Хокимиятом Яшнабадского района г. Ташкента совместно с Главным управлением архитектуры и строительства г. Ташкента формируется и размещается на официальном веб-сайте хокимията Яшнабадского района г.Ташкента и Дирекции технопарка «Яшнабад» перечень земельных участков, расположенных в Яшнабадском районе г.Ташкента и предлагаемых для предоставления в постоянное пользование резидентам технопарка, с обеспечением периодического его обновления.')</li>
                          <li>@lang('questions.Резиденты технопарка представляют заявление в Дирекцию технопарка «Яшнабад» о предоставлении земельного участка для строительства объекта в целях организации инновационного производства и «стартапов» в порядке, утверждаемым Дирекцией технопарка «Яшнабад».')</li>
                          <li>@lang('questions.Дирекция технопарка «Яшнабад» в течение двух рабочих дней со дня получения заявления от резидента технопарка направляет его с приложением копии решения (или выписки из решения) Координационного совета о присвоении заявителю статуса резидента технопарка, в хокимият Яшнабадского района г.Ташкента.')</li>
                          <li>@lang('questions.Хокимият Яшнабадского района г.Ташкента в течение двух рабочих дней направляет в хокимият г.Ташкента и Главное управление архитектуры и строительства г.Ташкента в установленном порядке документы с ходатайством хокима Яшнабадского района г.Ташкента о предоставлении земельного участка резиденту технопарка «Яшнабад».')</li>
                          <li>@lang('questions.Работы по подготовке материалов предоставления земельных участков выполняются на договорной основе Главным управлением архитектуры и строительства г.Ташкента за счет средств резидентов технопарка, которым предоставляются земельные участки, по утвержденным расценкам.')</li>
                          <li>@lang('questions.Согласование материалов по предоставлению земельных участков осуществляется в порядке, установленном пунктами 19 — 22 Положения о порядке предоставления юридическим и физическим лицам земельных участков в постоянное пользование на основе конкурса для осуществления предпринимательской деятельности, утвержденном постановлением Кабинета Министров Республики Узбекистан от 7 октября 2015 г. № 285.')</li>
                          <li>@lang('questions.Главное управление архитектуры и строительства г.Ташкента, по итогам согласования вносит материалы по отводу земельного участка в хокимият г.Ташкента для рассмотрения и принятия решения об отводе земельного участка резиденту технопарка.')</li>
                          <li>@lang('questions.Рассмотрение и принятие решения хокима г.Ташкента осуществляется в течение одного рабочего дня.')</li>
                          <li>@lang('questions.В течение одного рабочего дня после принятия решения об отводе земельного участка Главное управление по архитектуре и строительству г.Ташкента совместно с Управлением по земельным ресурсам и государственному кадастру г.Ташкента производит перенос в натуру границ земельного участка с оформлением акта, который подписывается исполнителями работ и резидентом технопарка, которому предоставляется земельный участок.')</li>
                          <li>@lang('questions.На основании решения хокима г.Ташкента о предоставлении земельного участка Управлением по земельным ресурсам и государственному кадастру г.Ташкента в течение одного рабочего дня производится государственная регистрация права резидента технопарка на земельный участок и ему выдается свидетельство о государственной регистрации права на земельный участок.')</li>
                      </ol>
                    </div>
                </div>
            </div>
            <hr>
            <div class="last-post">
                <button class="accordion">@lang('questions.Какие обязательства берут на себя резиденты технопарка?')</button>
                <div class="panel">
                    <div class="recent-post">
                        <p>@lang('questions.Резидент технопарка — юридическое лицо, осуществляющее проведение научных разработок, исследований, реализацию пилотных проектов, опытно-промышленное внедрение и коммерциализацию инновационных разработок на территории технопарка, являющееся пользователем имущества, преференций, нематериальных активов и услуг, предоставляемых на территории технопарка и включенное в установленном порядке в реестр резидентов технопарка «Яшнабад».')</p>
                    </div>
                </div>
            </div>
            <hr>
            <div class="last-post">
                <button class="accordion">@lang('questions.Каков размер отчислений резидентов Дирекции?')</button>
                <div class="panel">
                    <div class="recent-post">
                        <p>@lang('questions.Определено, что содержание Дирекции технопарка «Яшнабад» осуществляется за счет:')</p>
                        <ol class="answer-bold">
                            <li>@lang('questions.ежеквартальных отчислений в размере процента установленной ставки от чистой выручки резидентов технопарка «Яшнабад», осуществляющих коммерческую деятельность на территории технопарка «Яшнабад», с предоставлением права пересмотра установленной ставки по решению Координационного совета;')</li>
                            <li>@lang('questions.доходов от оказания услуг резидентам и участникам технопарка «Яшнабад»;')</li>
                            <li>@lang('questions.части поступлений от предоставления в аренду зданий и сооружений, являющихся государственной собственностью, и переданных в оперативное управление Дирекции технопарка «Яшнабад» в установленном порядке;')</li>
                            <li>@lang('questions.собственных средств Дирекции технопарка «Яшнабад»;')</li>
                            <li>@lang('questions.других источников, не запрещенных законодательством.')</li>
                        </ol>
                    </div>
                </div>
            </div>
            <hr>
            <div class="last-post">
                <button class="accordion">@lang('questions.На сколько лет присваивается статус резидента технопарка?')</button>
                <div class="panel">
                    <div class="recent-post">
                        <p>@lang('questions.Присвоение статуса резидента технопарка осуществляется решением Координационного совета сроком до 10 лет по результатам отбора претендентов на получение статуса резидента технопарка «Яшнабад».')</p>
                        <p>@lang('questions.Дирекцией технопарка «Яшнабад» на основании решения Координационного совета осуществляется регистрация резидента технопарка с включением в Реестр резидентов и выдачей Свидетельства.')</p>
                        <p>@lang('questions.Статистический учет резидентов технопарка осуществляется в Яшнабадском районе г.Ташкента, в том числе в случаях получения статуса резидента технопарка с учетом принципа экстерриториальности.')</p>
                    </div>
                </div>
            </div>
            <hr>

            <div class="last-post">
                <button class="accordion">@lang('questions.Кто может стать резидентом технопарка?')</button>
                <div class="panel">
                    <div class="recent-post">
                        <p>@lang('questions.Претендентом на получение статуса резидента технопарка может стать юридическое или физическое лицо (резидент Республики Узбекистан).')</p>
                        <p>@lang('questions.В случае положительного заключения Координационного совета по присвоению физическому лицу статуса резидента технопарка, данное физическое лицо создает юридическое лицо в установленном порядке в Яшнабадском районе г.Ташкента.')</p>
                    </div>
                </div>
            </div>
            <hr>

            <div class="last-post">
                <button class="accordion">@lang('questions.В чем отличие инновационного технопарка от малых промышленных зон?')</button>
                <div class="panel">
                    <div class="recent-post">
                        <p>@lang('questions.Технопарк — территориальная, научная, технологическая и техническая база для реализации инновационных проектов. Технопарк - имущественный комплекс, в котором объединены научно-исследовательские институты, объекты индустрии, деловые центры, выставочные площадки, учебные заведения, а также обслуживающие объекты: средства транспорта, подъездные пути, жилые поселки, охрана. Международная ассоциация технологических парков даёт своё определение объекту инновационной инфраструктуры. По мнению ассоциации, технопарк — это организация, управляемая специалистами, главной целью которых является увеличение благосостояния местного сообщества посредством продвижения инновационной культуры, а также состязательности инновационного бизнеса и научных организаций. Для достижения этих целей технопарк стимулирует и управляет потоками знаний и технологий между университетами, научно-исследовательскими институтами, компаниями и рынками. Он упрощает создание и рост инновационным компаниям с помощью инкубационных процессов и процессов выведения новых компаний из существующих. Технопарк помимо высококачественных площадей обеспечивает другие услуги.')</p>
                    </div>
                </div>
            </div>
            <hr>


        </div>
    </div>

@stop