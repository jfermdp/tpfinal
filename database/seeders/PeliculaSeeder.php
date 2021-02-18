<?php

namespace Database\Seeders;
use App\Models\Pelicula;
use Illuminate\Database\Seeder;

class PeliculaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pelicula= new Pelicula();
        $pelicula->titulo='Atrapame si puedes';
        $pelicula->estreno='2002';
        $pelicula->Id_genero='3';
        $pelicula->Id_director='78';
        $pelicula->Id_artista1='56';    
        $pelicula->Id_artista2='81';  
        $pelicula->Id_artista3='20';  
        $pelicula->portada='1.jpg';
        $pelicula->resumen='Un veterano agente del FBI le sigue la pista a Frank Abagnale Jr., quien antes de cumplir 19 años ha forjado millones de dólares en cheques haciéndose pasar por piloto, doctor y abogado.';
        $pelicula->Id_user='1';      
        $pelicula->save();

        $pelicula= new Pelicula();
        $pelicula->titulo='Blade Runner';
        $pelicula->estreno='1982';
        $pelicula->Id_genero='4';
        $pelicula->Id_director='69';
        $pelicula->Id_artista1='33';    
        $pelicula->Id_artista2='75';  
        $pelicula->Id_artista3='77';  
        $pelicula->portada='2.jpg';
        $pelicula->resumen='Un blade runner debe encontrar y retirar a cuatro replicantes que robaron una nave en el espacio y han regresado a la Tierra para encontrar a su creador.';
        $pelicula->Id_user='1';      
        $pelicula->save();

        $pelicula= new Pelicula();
        $pelicula->titulo='Diamantes de Sangre';
        $pelicula->estreno='2006';
        $pelicula->Id_genero='4';
        $pelicula->Id_director='26';
        $pelicula->Id_artista1='56';    
        $pelicula->Id_artista2='24';  
        $pelicula->Id_artista3='40';  
        $pelicula->portada='3.jpg';
        $pelicula->resumen='Un pescador, un traficante y un hombre de negocios se enfrentar por tomar posesión del diamante más preciado.';
        $pelicula->Id_user='1';      
        $pelicula->save();

        $pelicula= new Pelicula();
        $pelicula->titulo='Duro de Matar';
        $pelicula->estreno='1988';
        $pelicula->Id_genero='1';
        $pelicula->Id_director='45';
        $pelicula->Id_artista1='12';    
        $pelicula->Id_artista2='1';  
        $pelicula->Id_artista3='11';  
        $pelicula->portada='4.jpg';
        $pelicula->resumen='John McClane, agente del departamento de policía de Nueva York, intenta salvar a su mujer, Holly Gennaro, y a otras personas a las que el terrorista alemán, Hans Gruber, ha tomado como rehenes durante la fiesta navideña en el Nakatomi Plaza en Los Ángeles.';
        $pelicula->Id_user='1';      
        $pelicula->save();

        $pelicula= new Pelicula();
        $pelicula->titulo='Gladiador';
        $pelicula->estreno='2000';
        $pelicula->Id_genero='6';
        $pelicula->Id_director='69';
        $pelicula->Id_artista1='74';    
        $pelicula->Id_artista2='42';  
        $pelicula->Id_artista3='21';  
        $pelicula->portada='5.jpg';
        $pelicula->resumen='Un general romano se propone vengarse del corrupto emperador que asesinó a su familia y lo convirtió en esclavo.';
        $pelicula->Id_user='1';      
        $pelicula->save();

        $pelicula= new Pelicula();
        $pelicula->titulo='El Grinch';
        $pelicula->estreno='2000';
        $pelicula->Id_genero='4';
        $pelicula->Id_director='73';
        $pelicula->Id_artista1='41';    
        $pelicula->Id_artista2='79';  
        $pelicula->Id_artista3='51';  
        $pelicula->portada='6.jpg';
        $pelicula->resumen='A las afueras de Whoville vive un Grinch verde sediento de venganza que planea arruinar las Navidades para todos los habitantes de la ciudad.';
        $pelicula->Id_user='1';      
        $pelicula->save();

        $pelicula= new Pelicula();
        $pelicula->titulo='El lobo de Wall Street';
        $pelicula->estreno='2013';
        $pelicula->Id_genero='2';
        $pelicula->Id_director='60';
        $pelicula->Id_artista1='56';    
        $pelicula->Id_artista2='47';  
        $pelicula->Id_artista3='59';  
        $pelicula->portada='7.jpg';
        $pelicula->resumen='Basado en la historia real de Jordan Belfort, desde su ascenso a convertirse en un adinerado agente de bolsa viviendo la gran vida hasta su caída, que involucra el crimen, la corrupción y el gobierno federal.';
        $pelicula->Id_user='1';      
        $pelicula->save();

        $pelicula= new Pelicula();
        $pelicula->titulo='El Renacido';
        $pelicula->estreno='2015';
        $pelicula->Id_genero='6';
        $pelicula->Id_director='2';
        $pelicula->Id_artista1='56';    
        $pelicula->Id_artista2='82';  
        $pelicula->Id_artista3='83';  
        $pelicula->portada='8.jpg';
        $pelicula->resumen='En 1820, un hombre parte de una expedición de comerciantes de pieles lucha por sobrevivir cuando sus compañeros le abandonan y dan por muerto tras ser mutilado por un oso.';
        $pelicula->Id_user='1';      
        $pelicula->save();

        $pelicula= new Pelicula();
        $pelicula->titulo='Gambito de Dama';
        $pelicula->estreno='2020';
        $pelicula->Id_genero='6';
        $pelicula->Id_director='76';
        $pelicula->Id_artista1='6';    
        $pelicula->Id_artista2='16';  
        $pelicula->Id_artista3='9';  
        $pelicula->portada='9.jpg';
        $pelicula->resumen='Ambientada en la Guerra Fría; una huérfana llamada Beth Harmon con un don para el ajedrez lucha contra las adicciones mientras intenta ser la mejor jugadora del mundo.';
        $pelicula->Id_user='1';      
        $pelicula->save();

        $pelicula= new Pelicula();
        $pelicula->titulo='Joker';
        $pelicula->estreno='2019';
        $pelicula->Id_genero='6';
        $pelicula->Id_director='80';
        $pelicula->Id_artista1='42';    
        $pelicula->Id_artista2='70';  
        $pelicula->Id_artista3='85';  
        $pelicula->portada='10.jpg';
        $pelicula->resumen='En Gotham, Arthur Fleck, un comediante con problemas de salud mental, es marginado y maltratado por la sociedad. Se adentra en una espiral de crimen que resulta revolucionaria. Pronto conoce a su alter-ego, el Joker.';
        $pelicula->Id_user='1';      
        $pelicula->save();

        $pelicula= new Pelicula();
        $pelicula->titulo='John Wick';
        $pelicula->estreno='2014';
        $pelicula->Id_genero='1';
        $pelicula->Id_director='14';
        $pelicula->Id_artista1='50';    
        $pelicula->Id_artista2='62';  
        $pelicula->Id_artista3='3';  
        $pelicula->portada='11.jpg';
        $pelicula->resumen='Un ex asesino a sueldo suspende su jubilación para localizar a los mafiosos que mataron a su perro y le quitaron todo.';
        $pelicula->Id_user='1';      
        $pelicula->save();

    }
}
