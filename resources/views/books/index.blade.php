@extends('layouts.app')

@section('content')
    <div class="book_index">
        <h1>Books</h1>
        <table>
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Show</th>
                </tr>
            </thead>
        @foreach ($books as $book)
            <tr>
                <td>{{ $book->title }}</td>
                <td>{{ $book->content }}</td>
                <td><a href="/books/{{ $book->id }}">Show</a></td>
            </tr>
        @endforeach
        </table>
    </div>
@endsection