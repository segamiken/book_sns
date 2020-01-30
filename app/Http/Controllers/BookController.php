<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

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

    public function post(Request $request)
    {
        $book = new Book;
        $form = $request->all();
        unset($form['_token']);
        $book->fill($form)->save();
        return redirect('/books/new');
    }

    public function show($id)
    {
        $book = Book::find($id);
        return view('book.show', ['book' => $book]);
    }
}
