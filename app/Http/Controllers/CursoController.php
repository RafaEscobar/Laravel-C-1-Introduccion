<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\Curso;

class CursoController extends Controller
{

    public function store(Request $request){
        // return $request->all();
        $mi_curso = new Curso();

        $mi_curso->nombre=$request->nombre;
        $mi_curso->descripcion=$request->descripcion;
        $mi_curso->precio=$request->precio;

        $mi_curso->save();

        return redirect()->route('cursos.id', $mi_curso);
    }

    public function web(){
        $cursos = Curso::paginate();
        return view('cursos/web', compact('cursos'));
    }
    public function oneCourse($id){
        $curso = Curso::find($id);
        return view('cursos.oneCourse', ['curso' => $curso]);
    }
    public function oneCT(){
        return view('cursos.oneCT');
    }
}
