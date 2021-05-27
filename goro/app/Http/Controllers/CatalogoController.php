<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatalogoController extends Controller
{
    public function index(){
        return"CATALOGO DE GORO";
}
    public function create(){
        return" HAGA SU COMPRA";
    }
    public function show($linea){
        return "Linea de Cosmetico $linea";

}
}