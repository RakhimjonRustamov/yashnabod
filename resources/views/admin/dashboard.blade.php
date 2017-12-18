@extends('layouts.admin-layout')
@section('title','Admin Dashboard')
@section('content')
    @include('partials._message')
    <form action="{{route('counter.store')}}" method="POST">
        {{ csrf_field() }}
        <input type="text" name="counter1" class="form-control" required="required" placeholder="Counter 1">
        <input type="text" name="counter2" class="form-control" required="required" placeholder="Counter 2">
        <input type="text" name="counter3" class="form-control" required="required" placeholder="Counter 3">
        <input type="text" name="counter4" class="form-control" required="required" placeholder="Counter 4">
        <button type="submit" class="btn btn-success btn-block">Save Counters</button>
    </form>
@endsection