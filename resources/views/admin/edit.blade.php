@extends('layouts.admin-layout')
@section('title','Admin Dashboard')
@section('content')
    @include('partials._message')
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-8">
            </div>
            <div class="col-md-4">
                <h1>Изменить номера</h1>
                <form action="{{route('counter.update', ['id'=>$counter->id])}}" method="POST">
                    {{ csrf_field() }}
                    <input name="_method" type="hidden" value="PUT">
                    <input type="text" name="counter1" class="form-control" required="required" value="{{$counter->counter1}}">
                    <input type="text" name="counter2" class="form-control" required="required" value="{{$counter->counter2}}">
                    <input type="text" name="counter3" class="form-control" required="required" value="{{$counter->counter3}}">
                    <input type="text" name="counter4" class="form-control" required="required" value="{{$counter->counter4}}">
                    <input type="text" name="counter5" class="form-control" required="required" value="{{$counter->counter5}}">
                    <button type="submit" class="btn btn-success btn-block">Сохранить номера</button>
                </form>
            </div>
        </div>
    </div>
@endsection


