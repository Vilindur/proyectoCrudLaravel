<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cancion;

class CancionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //**FORMA CON FACTORY**
        //Cancion::factory(10)->create();


        //**FORMA CON SEEDER**
        
        // $cancion = new Cancion();

        // $cancion->nombre = "Futurisma";
        // $cancion->artista = "Flashworx";
        // $cancion->discografia = "Neo Tokyo";
        // $cancion->genero = "Synthwave";
        // $cancion->fecha_lanzamiento = "2017-10-09";
        // $cancion->precio = "1.33";
        // $cancion->puntuacion = "4.98";

        // $cancion->save();

        // $cancion = new Cancion();

        // $cancion->nombre = "Power Slam";
        // $cancion->artista = "Paradelous";
        // $cancion->discografia = "Redline";
        // $cancion->genero = "Synthwave";
        // $cancion->fecha_lanzamiento = "2018-07-12";
        // $cancion->precio = "2.54";
        // $cancion->puntuacion = "4.7";

        // $cancion->save();

        // $cancion = new Cancion();

        // $cancion->nombre = "Maverick Hunter";
        // $cancion->artista = "Paradelous";
        // $cancion->discografia = "Redline";
        // $cancion->genero = "Synthwave";
        // $cancion->fecha_lanzamiento = "2019-02-23";
        // $cancion->precio = "3.18";
        // $cancion->puntuacion = "4.46";

        // $cancion->save();
    }
}
