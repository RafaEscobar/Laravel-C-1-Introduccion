<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('cursos', HomeController::class)->name('house');

Route::controller(CursoController::class)->group(function () {
    Route::get('cursos/web', 'web')->name('cursos.web');
    Route::get('cursos/{id}', 'oneCourse')->name('cursos.id');
    Route::get('cursos/{curso}/{categoria}', 'oneCT')->name('cursos.curso.categoria');  
});

// Route::get('cursos/{nomCurso}/{categoria?}', function ($nomCurso, $categoria=null) {
//     if ($categoria) {
//         return "-> Curso: $nomCurso de la categoria $categoria...";
//     }else{
//         return "-> Curso: $nomCurso....";
//     }
// });

