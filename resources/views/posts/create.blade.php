@extends('layouts.admin-layout')
@section('title', 'Создать новую запись')

@section('content')
    @include('partials._message')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1 align="center">Создать новую запись</h1>
            <form action="{{ route('posts.store')}}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <label>Заглавие:</label>
                <input type="text" name="title_uz" class="form-control" placeholder="Узбек" required="required">
                <input type="text" name="title_ru" class="form-control" placeholder="Pусский" required="required">
                <label>Загрузить изображение:</label>
                <input type="file" name="featured_image" class="form-control">
                <label>Новости контента:</label>
                <textarea name="body_uz" class="form-control" rows="7" placeholder="Узбек" required="required"></textarea>
                <textarea name="body_ru" class="form-control" rows="7" placeholder="Pусский" required="required"></textarea>
                <button type="submit" row="15" class="btn btn-success btn-block" >Создать новую запись</button>
            </form>
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
