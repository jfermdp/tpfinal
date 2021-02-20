<?php

namespace App\Http\Controllers;

use App\Models\Artista;
use App\Models\Genero;
use App\Models\Pelicula;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class PeliculaController extends Controller
{
    public function index()
    {
        return view('peliculas.index');
    }


    public function create()
    {
        $generos = Genero::all();
        $artistas = Artista::all();
        return view('peliculas.create', compact('generos'), compact('artistas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'portada' => 'required|image|max:2048',
            'titulo' => 'required', 'estreno' => 'required', 'resumen' => 'required', 'Id_genero' => 'required|not_in:0', 'Id_director' => 'required', 'Id_artista1' => 'required'
        ]);
        $portada = $request->file('portada')->getClientOriginalName();
        $request->file('portada')->storeAs('public/portadas', $portada);

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
        return redirect()->route('home');
    }

    public function show($pelicula)
    {
        return view('peliculas.show', compact('pelicula'));
    }

    public function destroy(Pelicula $pelicula)
    {
        $pelicula->delete();
        return redirect()->route('home');
    }

    public function edit(Pelicula $pelicula)
    {
        $generos = Genero::all();
        $artistas = Artista::all();
        return view('peliculas.edit', compact('artistas', 'pelicula', 'generos'));
    }

    public function update(Request $request, Pelicula $pelicula)
    {
        $request->validate([
            'portada' => 'image|max:2048',
            'titulo' => 'required', 'estreno' => 'required', 'resumen' => 'required', 'Id_genero' => 'required'
        ]);
        if ($request->portada <> '') {
            $portada = $request->file('portada')->getClientOriginalName();
            $request->file('portada')->storeAs('public/portadas', $portada);
            $pelicula->portada = $portada;
        }

        $pelicula->titulo = $request->titulo;
        $pelicula->estreno = $request->estreno;
        $pelicula->Id_genero = $request->Id_genero;
        $pelicula->Id_director = $request->Id_director;
        $pelicula->Id_artista1 = $request->Id_artista1;
        $pelicula->Id_artista2 = $request->Id_artista2;
        $pelicula->Id_artista3 = $request->Id_artista3;
        $pelicula->resumen = $request->resumen;

        $pelicula->save();
        return redirect()->route('home');

        $pelicula->save();
        return redirect()->route('home');
    }


    public function find($Id_artista)
    {
        $artista = Artista::where('id', $Id_artista)->first()->nombre;

        $peliculas = Pelicula::select('peliculas.*', 'generos.nombre as genero', 'd.nombre as director', 'a1.nombre as actor1', 'a2.nombre as actor2', 'a3.nombre as actor3', 'users.name as usuario')
            ->join('generos', 'peliculas.Id_genero', '=', 'generos.id')
            ->join('artistas AS d', 'peliculas.Id_director', '=', 'd.id')
            ->join('artistas AS a1', 'peliculas.Id_artista1', '=', 'a1.id')
            ->leftjoin('artistas AS a2', 'peliculas.Id_artista2', '=', 'a2.id')
            ->leftjoin('artistas AS a3', 'peliculas.Id_artista3', '=', 'a3.id')
            ->join('users', 'peliculas.Id_user', '=', 'users.id')
            ->where('Id_director', $Id_artista)
            ->orwhere('Id_artista1', $Id_artista)
            ->orwhere('Id_artista2', $Id_artista)
            ->orwhere('Id_artista3', $Id_artista)
            ->orderBy('id', 'desc')
            ->paginate(4);
        return view('welcome', compact('peliculas', 'artista'));
    }


    public function findd($Id_artista)
    {
        $artista = Artista::where('id', $Id_artista)->first()->nombre;

        $peliculas = Pelicula::select('peliculas.*', 'generos.nombre as genero', 'd.nombre as director', 'a1.nombre as actor1', 'a2.nombre as actor2', 'a3.nombre as actor3', 'users.name as usuario')
            ->join('generos', 'peliculas.Id_genero', '=', 'generos.id')
            ->join('artistas AS d', 'peliculas.Id_director', '=', 'd.id')
            ->join('artistas AS a1', 'peliculas.Id_artista1', '=', 'a1.id')
            ->leftjoin('artistas AS a2', 'peliculas.Id_artista2', '=', 'a2.id')
            ->leftjoin('artistas AS a3', 'peliculas.Id_artista3', '=', 'a3.id')
            ->join('users', 'peliculas.Id_user', '=', 'users.id')
            ->where('Id_director', $Id_artista)
            ->orderBy('id', 'desc')
            ->paginate(4);
        return view('welcome', compact('peliculas', 'artista'));
    }


    public function finda($Id_artista)
    {
        $artista = Artista::where('id', $Id_artista)->first()->nombre;

        $peliculas = Pelicula::select('peliculas.*', 'generos.nombre as genero', 'd.nombre as director', 'a1.nombre as actor1', 'a2.nombre as actor2', 'a3.nombre as actor3', 'users.name as usuario')
            ->join('generos', 'peliculas.Id_genero', '=', 'generos.id')
            ->join('artistas AS d', 'peliculas.Id_director', '=', 'd.id')
            ->join('artistas AS a1', 'peliculas.Id_artista1', '=', 'a1.id')
            ->leftjoin('artistas AS a2', 'peliculas.Id_artista2', '=', 'a2.id')
            ->leftjoin('artistas AS a3', 'peliculas.Id_artista3', '=', 'a3.id')
            ->join('users', 'peliculas.Id_user', '=', 'users.id')
            ->where('Id_artista1', $Id_artista)
            ->orwhere('Id_artista2', $Id_artista)
            ->orwhere('Id_artista3', $Id_artista)
            ->orderBy('id', 'desc')
            ->paginate(4);

        return view('welcome', compact('peliculas', 'artista'));
    }

    public function findp($Id_pelicula)
    {

        $peliculas = Pelicula::select('peliculas.*','generos.nombre as genero', 'd.nombre as director', 'a1.nombre as actor1', 'a2.nombre as actor2', 'a3.nombre as actor3', 'users.name as usuario')
            ->join('generos', 'peliculas.Id_genero', '=', 'generos.id')
            ->join('artistas AS d', 'peliculas.Id_director', '=', 'd.id')
            ->join('artistas AS a1', 'peliculas.Id_artista1', '=', 'a1.id')
            ->leftjoin('artistas AS a2', 'peliculas.Id_artista2', '=', 'a2.id')
            ->leftjoin('artistas AS a3', 'peliculas.Id_artista3', '=', 'a3.id')
            ->join('users', 'peliculas.Id_user', '=', 'users.id')
            ->where('peliculas.id', $Id_pelicula)
            ->paginate(4);

        return view('welcome', compact('peliculas'));
    }

    public function busca()
    {
      //  $peliculas = Artista::where('nombre', 'LIKE', 'brad' . '%')->get(); 
      //  return view('peliculas.buscador', compact('peliculas'));
      return view('peliculas.buscador');
    }

    public function buscador(Request $request)
    {
        $busca=trim($request->busca);
        $tipobus=$request->tipobus;

        if ($tipobus==1) {
            $sql = Pelicula::where('titulo', 'LIKE', '%'.$busca.'%')->get(); 
        }else{
            $sql = Artista::where('nombre', 'LIKE', '%'.$busca.'%')->get(); 
        }
           
        $cant = $sql->count();
        
      return view('peliculas.buscador',compact('sql','tipobus','cant'));
    }

}