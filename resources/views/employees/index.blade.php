@extends('layouts.admin-layout')
@section('title', '| All Employees')
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
        <div class="col-md-8">
            <table class="table">
                <thead>
                <th>#</th>
                <th>Employee Name</th>
                <th>Employee Position</th>
                <th>Craeted At</th>
                <th></th>
                </thead>
                <tbody>
                @foreach($employees as $employee)
                    <tr>
                        <div class="col-md-8">
                            <td>{{ $employee->id}}</td>
                            <td>{{ $employee->full_name}}</td>
                            <td>{{ $employee->position }}</td>
                            <td>{{ date('M j, Y H:ia',strtotime($employee->created_at))}}</td>
                            <td>
                            <td>
                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#{{ $employee->id}}" id="b2"><span class="glyphicon glyphicon-edit"></span>View</button>
                                <!-- Modal -->
                                <div class="modal fade" id="{{ $employee->id }}" role="dialog">
                                    <div class="modal-dialog">

                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img src="{{ asset('images/'. $employee->image)}}" height="300px" width="555px"/>
                                                <h3><span>{{$employee->full_name}}</span></h3>
                                                <p>{{$employee->position}}</p>
                                            </div>
                                            <div class="modal-footer">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <form action="{{url('admin/employees/'.$employee->id)}}" method='post'>
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
                <h1 align="center">Create New Employee</h1>
                <form action="{{ route('employees.store')}}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <label>Employee Name:</label>
                    <input type="text" name="full_name" class="form-control">
                    <label>Upload Featured Image:</label>
                    <input type="file" name="featured_image" class="form-control">
                    <label>Employee Position</label>
                    <input name="position" class="form-control" placeholder="Enter Employee Position">
                    <button type="submit" row="10" class="btn btn-success btn-block">Save Employee</button>
                </form>
            </div>
            <div class="text-center">
                {!! $employees->links()!!}
            </div>
        </div> <!-- End of the Create Product-->
    </div>
@endsection
