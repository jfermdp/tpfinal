<?php

namespace Database\Seeders;

use App\Models\Genero;
use Illuminate\Database\Seeder;

class GeneroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $generos = array('Acción',"Biografía","Ciencia Ficción","Comedia","Documental", "Drama", "Fantasía");
        foreach ($generos as $nomGenero) {
            $genero = new Genero();
            $genero->nombre = $nomGenero;
            $genero->save();
        }
    }
}
