<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('top');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/books', 'BookController@index' );
Route::get('/books/new', 'BookController@new' );
Route::post('/books', 'BookController@post' );

Route::get('/books/{id}', 'BookController@show');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
