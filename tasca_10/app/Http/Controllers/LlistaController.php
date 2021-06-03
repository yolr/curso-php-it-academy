<?php

namespace App\Http\Controllers;
use Facade\FlareClient\View;

use Illuminate\Http\Request;

class LlistaController extends Controller
{
    public function index(){

        return view('index');


    }

    public function show($id){
        
        return view ('show')->with('id', $id);

    }
    public function edit($id){
        
        return view ('edit')->with('id', $id);
    }

    public function create(){

        return view ('create');
    }
    //
}
