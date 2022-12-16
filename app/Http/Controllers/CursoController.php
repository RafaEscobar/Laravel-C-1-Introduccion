<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function web(){
        return view('cursos/web');
    }
    public function oneCourse($curso){
        return view('cursos/oneCourse', ['curso' => $curso]);
    }
    public function oneCT($curso, $categoria){
        return view('cursos/oneCT', ['curso' => $curso, 'categoria' => $categoria]);
    }
}
