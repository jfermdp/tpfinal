<?php

namespace App\Http\Controllers;

use App\Models\Pelicula;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $peliculas = Pelicula::select('peliculas.*', 'generos.nombre as genero', 'd.nombre as director', 'a1.nombre as actor1', 'a2.nombre as actor2', 'a3.nombre as actor3', 'users.name as usuario')
            ->join('generos', 'peliculas.Id_genero', '=', 'generos.id')
            ->join('artistas AS d', 'peliculas.Id_director', '=', 'd.id')
            ->join('artistas AS a1', 'peliculas.Id_artista1', '=', 'a1.id')
            ->leftjoin('artistas AS a2', 'peliculas.Id_artista2', '=', 'a2.id')
            ->leftjoin('artistas AS a3', 'peliculas.Id_artista3', '=', 'a3.id')
            ->join('users', 'peliculas.Id_user', '=', 'users.id')
            ->where('peliculas.Id_user', '=', auth()->id())
            ->orderBy('id', 'desc')
            ->paginate(4);


        return view('home', compact('peliculas'));
    }
}
