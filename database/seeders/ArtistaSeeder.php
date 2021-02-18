<?php

namespace Database\Seeders;
use App\Models\Artista;
use Illuminate\Database\Seeder;

class ArtistaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $artistas = array('Alan Rickman','Alejandro G. Iñárritu','Alfie Allen','Amy Adams','Anthony Hopkins','Anya Taylor-Joy','Arnold Schwarzenegger','Ben Affleck','Bill Camp','Billy Zane','Bonnie Bedelia','Bruce Willis','Carrie-Anne Moss','Chad Stahelski','Charlize Theron','Chloe Pirrie','Chris Hemsworth','Chris Pine','Christopher Nolan','Christopher Walken','Connie Nielsen','Dafne Keen','Daniel Stern','Djimon Hounsou','Edward Furlong','Edward Zwick','Elliot Page','Gal Gadot','Gary Sinise','George Miller','Giancarlo Esposito','Gina Carano','Harrison Ford','Helen Hunt','Henry Cavill','Hugh Jackman','James Cameron','James Mangold','Jason Momoa','Jennifer Connelly','Jim Carrey','Joaquin Phoenix','Joe Pesci','John Hughes','John McTiernan','Jon Favreau','Jonah Hill','Joseph Gordon-Levitt','Kate Winslet','Keanu Reeves','Kelley','Kenneth Branagh','Kristen Wiig','Lana Wachowski','Laurence Fishburne','Leonardo DiCaprio','Linda Hamilton','Macaulay Culkin','Margot Robbie','Martin Scorsese','Michael Biehn ','Michael Nyqvist','Natalie Portman','Nicholas Hoult','Patrick Stewart','Patty Jenkins','Paul Sanchez','Pedro Pascal','Ridley Scott','Robert De Niro','Robert Zemeckis','Robin Wright','Ron Howard','Russell Crowe','Rutger Hauer','Scott Frank, Allan Scott','Sean Young','Steven Spielberg','Taylor Momsen','Todd Phillips','Tom Hanks','Tom Hardy','Will Poulter','Zack Snyder','Zazie Beetz');
        foreach ($artistas as $nomArtista) {
            $artista = new Artista();
            $artista->nombre = $nomArtista;
            $artista->save();
        }
    }
}
