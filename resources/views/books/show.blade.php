@extends('layouts.app')

@section('content')
    <div class="user_show">
        <h1>Book Info</h1>
        <table>
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Edit</th>
                </tr>
            </thead>
            <tr>
                <td>{{ $book->title }}</td>
                <td>{{ $book->content }}</td>
                <td>
                    <a href="/books/{{ $book->id }}/edit">Edit Book</a>
                </td>
            </tr>
        </table>
    </div>
@endsection