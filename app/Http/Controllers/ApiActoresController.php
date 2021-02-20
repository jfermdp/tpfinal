<?php

namespace App\Http\Controllers;

use App\Http\Resources\Actores;
use Illuminate\Support\Facades\DB;

class ApiActoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function get()
    {
        $artistas = DB::select(DB::raw("SELECT nombre as artista,count(*) as cant_de_peliculas from (
                SELECT peliculas.Id_artista1 as Id_artista
                FROM peliculas
                UNION ALL
                SELECT peliculas.Id_artista2 as Id_artista
                FROM peliculas 
                UNION ALL
                SELECT peliculas.Id_artista3 as Id_artista
                FROM peliculas
                ) peliculas INNER JOIN artistas ON peliculas.Id_artista=artistas.id 
                GROUP BY artista ORDER BY cant_de_peliculas desc, artista"));

        return new Actores($artistas);
    }
}
