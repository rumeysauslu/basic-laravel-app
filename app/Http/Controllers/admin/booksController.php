<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class booksController extends Controller
{
    public function index(){
      return view('admin.books.index');
    }

    public function new(){
      return view('admin.books.new');
    }

    public function create(Request $request){
      $request->validate([
        'name'=>'required'
      ]);
      $uri = $request->path();
      dd($uri);
      $name = $request['name'];
      dd($name);
      dd($request->except('_token'));
    }
}
