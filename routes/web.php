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

Route::get('cursos', HomeController::class);

Route::controller(CursoController::class)->group(function () {
    Route::get('cursos/web', 'web');
    Route::get('cursos/{curso}', 'oneCourse');
    Route::get('cursos/{curso}/{categoria}', 'oneCT');
});

// Route::get('cursos/{nomCurso}/{categoria?}', function ($nomCurso, $categoria=null) {
//     if ($categoria) {
//         return "-> Curso: $nomCurso de la categoria $categoria...";
//     }else{
//         return "-> Curso: $nomCurso....";
//     }
// });

