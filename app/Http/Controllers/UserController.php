<?php

namespace App\Http\Controllers;
use App\User;
use  Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show()
    {
        $user = Auth::user();
        return view('users.show', ['user' => $user]);
    }
}
