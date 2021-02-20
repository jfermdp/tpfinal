<?php

namespace App\Http\Controllers;
use App\Models\Pelicula;
use App\Http\Resources\Pelicula as PeliculaResource;



class ApiPeliculaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function get()
    {
        $peliculas = Pelicula::select('peliculas.*', 'generos.nombre as genero', 'd.nombre as director', 'a1.nombre as actor1', 'a2.nombre as actor2', 'a3.nombre as actor3', 'users.name as usuario','generos.nombre')
            ->join('generos', 'peliculas.Id_genero', '=', 'generos.id')
            ->join('artistas AS d', 'peliculas.Id_director', '=', 'd.id')
            ->join('artistas AS a1', 'peliculas.Id_artista1', '=', 'a1.id')
            ->leftjoin('artistas AS a2', 'peliculas.Id_artista2', '=', 'a2.id')
            ->leftjoin('artistas AS a3', 'peliculas.Id_artista3', '=', 'a3.id')
            ->join('users', 'peliculas.Id_user', '=', 'users.id')
            ->orderBy(Pelicula::raw('RAND()'))
            ->first();
            return new PeliculaResource($peliculas);
    }
}
