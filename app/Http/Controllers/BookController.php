<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(Request $request)
    {
        return view('book.index');
    }

    public function new(Request $request)
    {
        return view('book.new');
    }

    public function 
}
