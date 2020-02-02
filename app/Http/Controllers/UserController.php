<?php

namespace App\Http\Controllers;
use App\User;
use  Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
      }
      
    public function show()
    {
        $user = Auth::user();
        return view('users.show', ['user' => $user]);
    }

    public function index() {
        $users = User::all();
        return view('users.index', ['users' => $users]);
    }

    public function edit() {
        $user = Auth::user();
        return view('users.edit', ['user' => $user]);
    }

    public function update(Request $request)
    {
        $user = User::find($request->id);

        if ($user == Auth::user()) {
            $form = $request->all();
            unset($form['_token']);
            $user->fill($form)->save();
            return redirect('mypage');
        } else {
            return redirect('mypage');
        }
    
    }
}
