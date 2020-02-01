@extends('layouts.app')

@section('content')
    <div class="user_show">
        <h1>Book Info</h1>
        <table>
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Content</th>
                    <th>User</th>
                    <th>Edit</th>
                </tr>
            </thead>
            <tr>
                <td>{{ $book->title }}</td>
                <td>{{ $book->content }}</td>
                <td>{{ $book->user->name }}</td>
                <td>
                    <a href="/books/{{ $book->id }}/edit">Edit Book</a>
                    <form action="/books/{{ $book->id }}/delete" method="post">
                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{$book->id}}">
                        <input type="submit" value="Delete" onclick='return confirm("Are you sure？");'/>
                     </form>
                 
                </td>
            </tr>
        </table>
    </div>
@endsection