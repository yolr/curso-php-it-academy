<?php

namespace App\Http\Controllers;
use Facade\FlareClient\View;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke(){

        return view ('home');
    //
}
}