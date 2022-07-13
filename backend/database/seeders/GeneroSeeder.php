<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Genero;
class GeneroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ObjGenero=new Genero();
        $ObjGenero->nombre='Cumbia';
        $ObjGenero->origen_nacimiento='Colombia';
        $ObjGenero->descripcion='The standard chunkose m "d are also reproducempanied4 translation by H. Rackham.';
        $ObjGenero->save();

        $ObjGenero=new Genero();
        $ObjGenero->nombre='Reggeton';
        $ObjGenero->origen_nacimiento='Puerto Rico';
        $ObjGenero->descripcion='The standard chunkose m "d are also reproducempanied4 translation by H. Rackham.';
        $ObjGenero->save();

        $ObjGenero=new Genero();
        $ObjGenero->nombre='Merengue';
        $ObjGenero->origen_nacimiento='Cuba';
        $ObjGenero->descripcion='The standard chunkose m "d are also reproducempanied4 translation by H. Rackham.';
        $ObjGenero->save();

        $ObjGenero=new Genero();
        $ObjGenero->nombre='Pop';
        $ObjGenero->origen_nacimiento='EEUU';
        $ObjGenero->descripcion='The standard chunkose m "d are also reproducempanied4 translation by H. Rackham.';
        $ObjGenero->save();
    }
}
