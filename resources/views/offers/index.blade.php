@extends('layouts.admin-layout')
@section('title', '|Все запросы')
<style>
    .mybtn1 li{
        display:inline-block;
    }
    .mybtn{
        margin-left:10px;
    }
</style>
@section('content')
    @include('partials._message')
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                <th>#</th>
                <th>Имя</th>
                <th>Фамилия</th>
                <th>Должность</th>
                <th>Область</th>
                <th>Эл. адрес</th>
                <th>Создан в</th>
                <th></th>
                <th></th>
                </thead>
                <tbody>
                @foreach($offers as $offer)
                    <tr>
                            <td>{{ $offer->id}}</td>
                            <td>{{ $offer->name}}</td>
                            <td>{{ $offer->surname}}</td>
                            <td>{{ $offer->position}}</td>
                            <td>{{ $offer->region}}</td>
                            <td>{{ $offer->email}}</td>
                            <td>{{ date('M j, Y H:ia',strtotime($offer->created_at))}}</td>
                            <td><a href="{{url('admin/offers/download/'.$offer->id)}}" class="btn btn-primary">Download</a>
                            <td>
                                {{ Form::open(['method' => 'DELETE', 'route' => ['offers.destroy', $offer->id]]) }}
                                {{ Form::submit('Удалить', ['class' => 'btn btn-danger btn-block']) }}
                                {{ Form::close() }}
                                {{--<form action="{{url('admin/offers/'.$offer->id)}}" method='post'>
                                    {{ method_field('DELETE') }}
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <button type="submit" class="btn btn-danger btn-block mybtn">Delete</button>
                                </form>--}}
                            </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <div class="row">
            
            </div>
            <div class="row text-center">
                <a href="">IUTLab.All rights reserved.</a>
            </div>
        </div>            
    </footer>  
@endsection