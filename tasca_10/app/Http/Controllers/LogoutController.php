<?php

namespace App\Http\Controllers;
use Facade\FlareClient\View;

use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function logout(){
        return view ('logout');
    }
    //
}
