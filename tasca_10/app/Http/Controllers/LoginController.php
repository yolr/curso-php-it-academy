<?php

namespace App\Http\Controllers;
use Facade\FlareClient\View;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(){

        return view ('login');
    }
  //
        
}
