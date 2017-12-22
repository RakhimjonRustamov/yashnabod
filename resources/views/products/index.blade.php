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
                    <th></th>
                    </thead>
                 <tbody>
                 @foreach($products as $product)
                    <tr>
                            <td>{{ $product->id}}</td>
                            <td>{{ strip_tags($product->product_name_ru)}}</td>
                            <td>{{ substr(strip_tags($product->product_info_ru), 0, 20)}}{{ strlen(strip_tags($product->product_info_ru)) >20 ? "...":""}}</td>
                            <td>{{ date('M j, Y H:ia',strtotime($product->created_at))}}</td>
                            <td>
                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#delete-{{ $product->id}}" id="b2">View</button>
                                <!-- Modal -->
                                <div class="modal fade" id="delete-{{ $product->id }}" role="dialog">
                                    <div class="modal-dialog">

                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img src="{{ asset('images/products/'. $product->product_image)}}" height="300px" width="555px"/>
                                                <h3><span>{{$product->product_name_ru}}</span></h3>
                                                <p>{{$product->product_info_ru}}</p>
                                            </div>
                                            <div class="modal-footer">
                                               <div class="row">
                                                   <div class="col-md-6">
                                                       {{ Form::open(['method' => 'DELETE', 'route' => ['products.destroy', $product->id]]) }}
                                                       {{ Form::submit('Delete', ['class' => 'btn btn-danger btn-block']) }}
                                                       {{ Form::close() }}

                                               {{-- <form action="{{url('admin/products/'.$product->id)}}" method='post'>
                                                    {{ method_field('DELETE') }}
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <button type="submit" class="btn btn-danger btn-block mybtn">Delete</button>
                                                </form>--}}
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
                            <td>
                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#edit-{{ $product->id}}" id="b2">&nbsp;Edit&nbsp;</button>
                                <!-- Modal -->
                                <div class="modal fade" id="edit-{{ $product->id }}" role="dialog">
                                    <div class="modal-dialog">

                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                {!! Form::model($product, ['route'=> ['products.update', $product->id], 'method'=>'PUT', 'files'=>true])!!}
                                                {{ Form::label('product_name_uz', 'Mahsulot:')}}
                                                {{ Form::text('product_name_uz', null, ['class'=>'form-control'])}}
                                                {{ Form::label('product_name_ru', 'Продукт:') }}
                                                {{ Form::text('product_name_ru', null, array('class'=>'form-control', 'required'=>'')) }}
                                                <label name="featured_image" style="margin-top:10px">Загрузить новое изображение</label>
                                                <input type="file" name="featured_image">
                                                <img src="{{ asset('images/products/'. $product->product_image)}}" height="60" width="80"/>
                                                <p>{{ Form::label('product_info_uz', 'Mahsulot Malumoti:')}}</p>
                                                {{ Form::textarea('product_info_uz', null, ['class'=>'form-control'])}}
                                                <p>{{ Form::label('product_info_ru', 'Информация о продукте:')}}</p>
                                                {{ Form::textarea('product_info_ru', null, ['class'=>'form-control'])}}
                                            </div>
                                            <div class="modal-footer">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        {{ Form::submit('Сохранить изменения', ['class'=>'btn btn-success btn-block'])}}
                                                        {!! Form::close()!!}
                                                    </div>
                                                    <div class="col-md-6">
                                                        <button type="button" class="btn btn-primary btn-block" data-dismiss="modal">Отмена</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                    </tr>
                 @endforeach
                 </tbody>
                </table>
            {!! $products->links()!!}
        </div>



        <!-- Begining of FORM -->
        <div class="col-md-4">
            <div>
                <h3 align="center"> Создать новый продукт</h3>
                <form action="{{ route('products.store')}}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <label>Product Name:</label>
                    <input type="text" name="product_name_uz" class="form-control" placeholder="Узбек" required="required">
                    <input type="text" name="product_name_ru" class="form-control"  placeholder="Pусский" required="required">
                    <label>Upload Featured Image:</label>
                    <input type="file" name="featured_image" class="form-control">
                    <label>Product Info</label>
                    <textarea name="product_info_uz" class="form-control" rows="7" placeholder="Узбек" required="required"></textarea>
                    <textarea name="product_info_ru" class="form-control" rows="7" placeholder="Pусский" required="required"></textarea>
                    <button type="submit" class="btn btn-success btn-block">Сохранить продукт</button>
                </form>
            </div>
            <div class="text-center">

            </div>
        </div> <!-- End of the Create Product-->
    </div>
@endsection
