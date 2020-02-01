@extends('layouts.app')

@section('content')
    <div class="book_new">
        <h1>Edit your info</h1>
        <form method='POST' action='/mypage'>
            {{ csrf_field() }}
            <input type="hidden" name='id' value="{{ $user->id }}">
            <label for="name">Name</label>
            <br>
            <input type='text' name='name' class="book_title" value="{{ $user->name }}">
            <br>
            <label for="email">Email</label>
            <br>
            <input type='email' name='email' class="book_title" value="{{ $user->email }}">
            <br>
            <input type="submit" value="Edit">
        </form>
    </div>
@endsection