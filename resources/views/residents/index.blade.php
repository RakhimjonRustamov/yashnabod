@extends('layouts.admin-layout')
@section('title', '| All Residents')
@section('content')
    @include('partials._message')
    <div class="row">
        <div class="col-md-8">
            <table class="table">
                <thead>
                <th>#</th>
                <th>Resident name</th>
                <th>Created At </th>
                </thead>
                <tbody>
                @foreach($residents as $resident)
                    <tr>
                        <div class="col-md-8">
                            <td>{{ $resident->id}}</td>
                            <td>{{ strip_tags($resident->resident_name)}}</td>
                            <td>{{ date('M j, Y H:ia',strtotime($resident->created_at))}}</td>
                            <td>
                            <td>
                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#{{ $resident->id}}" id="b2"><span class="glyphicon glyphicon-edit"></span>View</button>
                                <!-- Modal -->
                                <div class="modal fade" id="{{ $resident->id }}" role="dialog">
                                    <div class="modal-dialog">

                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img src="{{ asset('images/'. $resident->resident_logo)}}" height="300px" width="555px"/>
                                                <h3><span>{{$resident->resident_name}}</span></h3>
                                            </div>
                                            <div class="modal-body">
                                                <p>{{$resident->resident_info}}</p>
                                            </div>
                                            <div class="modal-footer">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <form action="{{url('admin/residents/'.$resident->id)}}" method='post'>
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

        <!-- Begining of FORM -->
        <div class="col-md-4">
            <div>
                <h1 align="center">Create New Resident</h1>
                <form action="{{ route('residents.store')}}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <label>Resident Name:</label>
                    <input type="text" name="resident_name" class="form-control">
                    <label>Upload Resident Logo:</label>
                    <input type="file" name="featured_image" class="form-control">
                    <label>Resident Info</label>
                    <textarea name="resident_info" class="form-control" placeholder="Enter Resident Information"></textarea>
                    <button type="submit" row="10" class="btn btn-success btn-block">Save Resident</button>
                </form>
                <div class="text-center">
                    {!! $residents->links()!!}
                </div>
            </div>
        </div> <!-- End of the Create Product-->
    </div>
@endsection
