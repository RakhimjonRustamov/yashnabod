@extends('layouts.app-content')
@section('title', Lang::get('areas.title'))

@section('stylesheets')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/areas.css')}}">
@endsection
@section('content')
@section('page-title')
<h1>{!!__('areas.title-areas')!!}</h1>
@endsection
    <div class="container-fluid dotted">
        <div class="container" id="container-fluid-areas">
            <h1>{!!__('areas.title-areas')!!}</h1>
            <ol>
                <li class="interval-areas">{!!__('areas.text-areas1')!!}</li>
                <li class="interval-areas">{!!__('areas.text-areas2')!!}</li>
                <li class="interval-areas">{!!__('areas.text-areas3')!!}</li>
                <li class="interval-areas">{!!__('areas.text-areas4')!!}</li>
                <li class="interval-areas">{!!__('areas.text-areas5')!!}</li>
                <li class="interval-areas">{!!__('areas.text-areas6')!!}</li>
                <ul>
                    <li class="interval-areas">{!!__('areas.text-areas6.1')!!}</li>
                    <li class="interval-areas">{!!__('areas.text-areas6.2')!!}</li>
                    <li class="interval-areas">{!!__('areas.text-areas6.3')!!}</li>
                    <li class="interval-areas">{!!__('areas.text-areas6.4')!!}</li>
                    <li class="interval-areas">{!!__('areas.text-areas6.5')!!}</li>

                </ul>
                <li class="interval-areas">{!!__('areas.text-areas7')!!}</li>
                <li class="interval-areas">{!!__('areas.text-areas8')!!}</li>
                <li class="interval-areas">{!!__('areas.text-areas9')!!}</li>
                <li class="interval-areas">{!!__('areas.text-areas10')!!}</li>
                <li class="interval-areas">{!!__('areas.text-areas11')!!}</li>
                <li class="interval-areas">{!!__('areas.text-areas12')!!}</li>
                <li class="interval-areas">{!!__('areas.text-areas13')!!}</li>
                <li class="interval-areas">{!!__('areas.text-areas14')!!}</li>


            </ol>
        </div>
    </div>
    <!--//////////////////////////////////////////// end container-fluid7 /////////////////////////////////////////////////////////  -->

@endsection