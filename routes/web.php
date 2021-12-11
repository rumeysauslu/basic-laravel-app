<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function (){
  return view('welcome');
});

Route::group(['namespace'=>'admin', 'prefix'=>'admin', 'as'=>'admin.'], function (){
  Route::get('/', 'homeController@index')->name('index');
  Route::get('/books', 'booksController@index')->name('books.index');
  Route::get('/books/new', 'booksController@new')->name('book.new');
  Route::post('/books/create', 'booksController@create')->name('book.create');
  Route::group(['namespace'=>'users', 'prefix'=>'users', 'as'=>'users.'], function(){
    Route::get('/', 'indexController@index')->name('index');
  });
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
