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
                <th>Project Info</th>
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
                            <td>{{ substr(strip_tags($offer->project_info), 0, 20)}}{{ strlen(strip_tags($offer->project_info)) >20 ? "...":""}}</td>
                            <td>
                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#{{ $offer->id}}" id="b2"><span class="glyphicon glyphicon-edit"></span>View</button>
                                <!-- Modal -->
                                <div class="modal fade" id="{{ $offer->id }}" role="dialog">
                                    <div class="modal-dialog">

                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <h3><span>{{$offer->name}}</span></h3>
                                                <p>{{$offer->project_info}}</p>
                                            </div>
                                            <div class="modal-footer">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <form action="{{url('admin/offers/'.$offer->id)}}" method='post'>
                                                            {{ method_field('DELETE') }}
                                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                            <button type="submit" class="btn btn-danger btn-block mybtn">Delete</button>
                                                        </form>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <button type="button" class="btn btn-primary btn-block" data-dismiss="modal">Cancel</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </div>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>




@endsection