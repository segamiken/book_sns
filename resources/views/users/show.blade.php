@extends('layouts.app')

@section('content')
    Name: {{ $user->name }}
    <br>
    Email: {{ $user->email }}
    <br>
    Password: {{ $user->password }}
@endsection