<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Curso;

class CursoController extends Controller
{

    public function web(){
        $cursos = Curso::paginate();
        return view('cursos/web', compact('cursos'));
    }
    public function oneCourse($id){
        $curso = Curso::find($id);
        return view('cursos.oneCourse', ['curso' => $curso]);
    }
    public function oneCT($curso, $categoria){
        return view('cursos.oneCT', ['curso' => $curso, 'categoria' => $categoria]);
    }
}
