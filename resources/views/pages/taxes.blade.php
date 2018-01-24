@extends('layouts.app-content')
@section('title', Lang::get('taxes.title'))

@section('stylesheets')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/taxes.css')}}">
@endsection
@section('content')
@section('page-title')
<h1>{!!__('taxes.title-taxes')!!}</h1>
@endsection

    <div class="container-fluid dotted">
        <div class="container" id="container-fluid-taxes">
            <h1 id="title">{!!__('taxes.title-taxes')!!}</h1>
            <ul>
                <li class="interval-taxes">{!!__('taxes.text-taxes1')!!}</li>
                <li class="interval-taxes">{!!__('taxes.text-taxes2')!!}</li>
                <li class="interval-taxes">{!!__('taxes.text-taxes3')!!}</li>
                <li class="interval-taxes">{!!__('taxes.text-taxes4')!!}</li>
                <li class="interval-taxes">{!!__('taxes.text-taxes5')!!}</li>
            </ul>
        </div>
    </div>
    <!--//////////////////////////////////////////// end container-fluid7 /////////////////////////////////////////////////////////  -->

@endsection