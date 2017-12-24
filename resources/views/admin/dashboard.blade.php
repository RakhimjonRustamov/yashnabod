@extends('layouts.admin-layout')
@section('title','Admin Dashboard')
@section('content')
    @include('partials._message')
    <div class="col-md-12">
            <div class="row">
                <div class="col-md-10">
                </div>
                <div class="col-md-2">
                    <a href="{{route('counter.edit', ['counter'=>$counter[0]->id])}}" class="btn btn-primary btn-block">Изменить номера</a>
                </div>
            </div>
    </div>
@endsection