@extends('layouts.admin-layout')
@section('title','Receptions')
@section('content')

    @include('partials._message')
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                <th>#</th>
                <th>Full Name:</th>
                <th>Date Appointment</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Project Info</th>
                </thead>
                <tbody>
                @foreach($receptions as $reception)
                    <tr>
                        <div class="col-md-12">
                            <td>{{ $reception->id}}</td>
                            <td>{{ strip_tags($reception->full_name)}}</td>
                            <td>{{ date('M j, Y H:ia',strtotime($reception->date_appointment))}}</td>
                            <td>{{$reception->phone}}</td>
                            <td>{{$reception->email}}</td>
                            <td>{{ substr(strip_tags($reception->project_info), 0, 50)}}{{ strlen(strip_tags($reception->project_info)) >20 ? "...":""}}</td>
                            <td>
                            <td>
                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#{{ $reception->id}}" id="b2"><span class="glyphicon glyphicon-edit"></span>View</button>
                                <!-- Modal -->
                                <div class="modal fade" id="{{ $reception->id }}" role="dialog">
                                    <div class="modal-dialog">

                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <h3><span>{{$reception->full_name}}</span></h3>
                                                <p>{{$reception->project_info}}</p>
                                            </div>
                                            <div class="modal-footer">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <form action="{{url('admin/receptions/'.$reception->id)}}" method='post'>
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