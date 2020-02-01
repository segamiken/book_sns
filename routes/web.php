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

use App\Http\Controllers\BookController;

Auth::routes();


// トップページと説明ページ
Route::get('/', function () {
    return view('top');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/home', 'HomeController@index')->name('home');

// 投稿関連のページ
Route::get('/books', 'BookController@index' );
Route::get('/books/new', 'BookController@new' );
Route::post('/books', 'BookController@post' );
Route::get('/books/{id}', 'BookController@show');
Route::get('/books/{id}/edit', 'BookController@edit');
Route::post('/books/{id}', 'BookController@update');
Route::post('/books/{id}/delete', 'BookController@delete');

// ユーザー関連のページ
Route::get('/users', 'UserController@index');
Route::get('/mypage', 'UserController@show');
Route::get('/mypage/edit', 'UserController@edit');
Route::post('/mypage', 'UserController@update');
