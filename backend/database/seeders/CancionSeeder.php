<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cancion;
use App\Models\Genero;
class CancionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ObjCancion=new Cancion();
        $ObjCancion->titulo='Mar_Adentro';
        $ObjCancion->artista='Armando_Hernandez';
        $ObjCancion->bpm=112.00;
        //cumbia
        $ObjCancion->genero_id=1;
        $ObjCancion->save();



        $ObjCancion=new Cancion();
        $ObjCancion->titulo='Sandunguera';
        $ObjCancion->artista='Kino Rankins';
        $ObjCancion->bpm=90.00;
        //cumbia
        $ObjCancion->genero_id=2;
        $ObjCancion->save();



        $ObjCancion=new Cancion();
        $ObjCancion->titulo='Ven Bailalo';
        $ObjCancion->artista='kriz & Angel';
        $ObjCancion->bpm=95.00;
        //cumbia
        $ObjCancion->genero_id=2;
        $ObjCancion->save();
    }
}
