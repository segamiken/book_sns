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
        <h1>Edit Book's info</h1>
        <form method='POST' action='/books/{{ $book->id }}'>
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $book->id }}">
            <label for="title">Title</label>
            <br>
            <input type='text' name='title' class="book_title" value="{{ $book->title }}">
            <br>
            <label for="content">Content</label>
            <br>
            <textarea name="content" cols="30" class="book_content">{{ $book->content }}</textarea>
            <br>
            <input type="submit" value="Edit">
        </form>
    </div>
@endsection