<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace'=>'app'], function(){
  Route::get('/', 'homeController@index')->name('index');
});

Route::group(['namespace'=>'admin', 'prefix'=>'admin', 'as'=>'admin.'], function (){
  Route::get('/', 'homeController@index')->name('index');
  Route::get('/books', 'booksController@index')->name('books.index');
  Route::group(['namespace'=>'users', 'prefix'=>'users', 'as'=>'users.'], function(){
    Route::get('/', 'indexController@index')->name('index');
  });
});

