@extends('layouts.app')

@section('content')
    <div class="user_show">
        <h1>Your Info</h1>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
            </tr>
        </table>
    </div>
@endsection