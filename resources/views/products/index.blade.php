@extends('layouts.admin-layout')
@section('title', '| All Products')
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
                    <th>Product name</th>
                    <th>Product Info</th>
                    <th>Craeted At</th>
                    <th></th>
                    </thead>
                 <tbody>
                 @foreach($products as $product)
                    <tr>
                        <div class="col-md-8">
                            <td>{{ $product->id}}</td>
                            <td>{{ strip_tags($product->product_name)}}</td>
                            <td>{{ substr(strip_tags($product->product_info), 0, 50)}}{{ strlen(strip_tags($product->product_info)) >20 ? "...":""}}</td>
                            <td>{{ date('M j, Y H:ia',strtotime($product->created_at))}}</td>
                            <td>
                            <td>
                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#{{ $product->id}}" id="b2"><span class="glyphicon glyphicon-edit"></span>View</button>
                                <!-- Modal -->
                                <div class="modal fade" id="{{ $product->id }}" role="dialog">
                                    <div class="modal-dialog">

                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img src="{{ asset('images/'. $product->product_image)}}" height="300px" width="555px"/>
                                                <h3><span>{{$product->product_name}}</span></h3>
                                                <p>{{$product->product_info}}</p>
                                            </div>
                                            <div class="modal-footer">
                                               <div class="row">
                                                   <div class="col-md-6">
                                                <form action="{{url('admin/products/'.$product->id)}}" method='post'>
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
                <h1 align="center">Create New Product</h1>
                <form action="{{ route('products.store')}}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <label>Product Name:</label>
                    <input type="text" name="product_name" class="form-control">
                    <label>Upload Featured Image:</label>
                    <input type="file" name="featured_image" class="form-control">
                    <label>Product Info</label>
                    <textarea name="product_info" class="form-control" placeholder="Enter Product Information"></textarea>
                    <button type="submit" row="10" class="btn btn-success btn-block">Save Product</button>
                </form>
            </div>
            <div class="text-center">
                {!! $products->links()!!}
            </div>
        </div> <!-- End of the Create Product-->
    </div>
@endsection
