<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BookController extends Controller
{
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
        $book = new Book;
        $form = $request->all();
        unset($form['_token']);
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
        return view('books.edit', ['book' => $book]);
    }

    public function update(Request $request)
    {
        $book = Book::find($request->id);
        $form = $request->all();
        unset($form['token']);
        $book->fill($form)->save();
        return redirect()->action('BookController@show', ['id' => $book->id]);
    }
}
