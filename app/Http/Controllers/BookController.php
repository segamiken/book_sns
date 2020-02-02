<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\User;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
      }

    public function index()
    {
        $books = Book::all();
        return view('books.index', ['books' => $books]);
    }

    public function new(Request $request)
    {
        return view('books.new');
    }

    public function post(Request $request)
    {
        $this->validate($request, Book::$rules);
        $book = new Book;
        $form = $request->all();
        unset($form['_token']);
        $book->user_id = Auth::user()->id;
        $book->fill($form)->save();
        return redirect()->action('BookController@show', ['id' => $book->id]);
    }

    public function show($id)
    {
        $book = Book::find($id);
        return view('books.show', ['book' => $book]);
    }
    
    public function edit($id)
    {
        $book = Book::find($id);
        if ($book->user_id == Auth::user()->id) {
            return view('books.edit', ['book' => $book]);
        }
        else {
            return redirect('/books');
        }
    }

    public function update(Request $request)
    {
        $this->validate($request, Book::$rules);
        $book = Book::find($request->id);
        $form = $request->all();
        unset($form['token']);
        $book->fill($form)->save();
        return redirect()->action('BookController@show', ['id' => $book->id]);
    }

    public function delete(Request $request)
    {
        Book::find($request->id)->delete();
        return redirect('/books');
    }
}
