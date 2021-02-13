<?php

namespace App\Http\Controllers;

use App\Models\Artista;
use App\Models\Genero;
use App\Models\Pelicula;
use Illuminate\Http\Request;

class PeliculaController extends Controller
{
    public function index(){
        return view('peliculas.index');
    }


    public function create(){
        $generos=Genero::all();
        $artistas=Artista::all();
        return view('peliculas.create', compact('generos'), compact('artistas'));
    }

    public function store(Request $request){
       // return $request->all(); 
       $request->validate(['portada' => 'required|image|max:2048',]);
       $portada = $request->file('portada')->getClientOriginalName();
       $request->file('portada')->storeAs('public/portadas',$portada);
       
       $pelicula = new Pelicula();
       $pelicula->titulo = $request->titulo;
       $pelicula->estreno = $request->estreno;
       $pelicula->Id_genero = $request->Id_genero;
       $pelicula->Id_director = $request->Id_director;
       $pelicula->Id_artista1 = $request->Id_artista1;
       $pelicula->Id_artista2 = $request->Id_artista2;
       $pelicula->Id_artista3 = $request->Id_artista3;
       $pelicula->portada = $portada;
       $pelicula->resumen = $request->resumen;
       $pelicula->Id_user = auth()->id();


       $pelicula->save();

    }

    public function show($pelicula){
        return view('peliculas.show',compact('pelicula'));
    }
    
}
