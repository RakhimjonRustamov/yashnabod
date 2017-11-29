@extends('layouts.admin-layout')
@section('title', 'Creata New Post')

@section('content')
    @include('partials._message')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1 align="center">Create New Post</h1>
            <form action="{{ route('posts.store')}}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <label>Title:</label>
                <input type="text" name="title" class="form-control">
                <label>Slug:</label>
                <input type="text" name="slug" class="form-control" required="required">
                <label>Upload Featured Image:</label>
                <input type="file" name="featured_image" class="form-control">
                <label>Body Post:</label>
                <textarea name="body" class="form-control" placeholder="Enter Post Content"></textarea>
                <button type="submit" row="15" class="btn btn-success btn-block" >Create New Post</button>
            </form>
        </div>
    </div>
@endsection
