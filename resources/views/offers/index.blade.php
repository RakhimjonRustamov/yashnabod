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
                <th>First Name</th>
                <th>Last Name</th>
                <th>Position</th>
                <th>Region</th>
                <th>Email</th>
                <th>Created At</th>
                <th></th>
                <th></th>
                </thead>
                <tbody>
                @foreach($offers as $offer)
                    <tr>
                        <div class="col-md-12">
                            <td>{{ $offer->id}}</td>
                            <td>{{ $offer->name}}</td>
                            <td>{{ $offer->surname}}</td>
                            <td>{{ $offer->position}}</td>
                            <td>{{ $offer->region}}</td>
                            <td>{{ $offer->email}}</td>
                            <td>{{ date('M j, Y H:ia',strtotime($offer->created_at))}}</td>
                            <td><button></button></td>
                            <td>
                                <form action="{{url('admin/offers/'.$offer->id)}}" method='post'>
                                    {{ method_field('DELETE') }}
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <button type="submit" class="btn btn-danger btn-block mybtn">Delete</button>
                                </form>
                            </td>
                        </div>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection