<?php

namespace App\Http\Controllers\admin\users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class indexController extends Controller
{
    public function index(){
      echo '<a href="'.route('index').'">Anasayfa</a>';
    }
}
