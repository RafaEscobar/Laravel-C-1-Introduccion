<?php

namespace Database\Seeders;

use App\Models\Curso;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // UNO
        $curso1 = new Curso;

        $curso1->nombre="React Native";
        $curso1->descripcion="Curso del mejor Framework para desarrollo movil";
        $curso1->precio=250;

        $curso1->save();
        ///////////////////////////////////////////////////////
        // DOS
        $curso2 = new Curso;

        $curso2->nombre="Laravel";
        $curso2->descripcion="Curso del Framework de PHP";
        $curso2->precio=250;

        $curso2->save();
        /////////////////////////////////////////////////////
        // TRES
        $curso3 = new Curso;

        $curso3->nombre="SQL";
        $curso3->descripcion="Curso de introduccion a BD";
        $curso3->precio=250;

        $curso3->save();
    }
}
