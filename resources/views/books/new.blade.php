@extends('layouts.app')

@section('content')
    @if ($errors->any())
    <div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
    </div>
    @endif
    
    <div class="book_new">
        <h1>New Book</h1>
        <form method='POST' action='/books' enctype="multipart/form-data">
            {{ csrf_field() }}
            <label for="title">Title</label>
            <br>
            <input type='text' name='title' class="book_title">
            <br>
            <label for="content">Content</label>
            <br>
            <textarea name="content" cols="30" class="book_content"></textarea>
            <br>
            <input type="file" name="fileName">
            <br>
            <br>
            <input type="submit" value="Post">
        </form>
    </div>
@endsection