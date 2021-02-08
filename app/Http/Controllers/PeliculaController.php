<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeliculaController extends Controller
{
    public function index(){
            return "Bienvenido a la pagina principal de Peliculas";
    }
    public function create(){
        return "Bienvenido a la creación de Peliculas";

    }
    public function show($curso){
        return "Bienvenido al curso $curso";
    }
    
}
