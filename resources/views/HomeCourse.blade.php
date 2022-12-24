@extends('layouts.plantilla')

@section('title', 'Cursos')

@section('content')
    <h1>Bienvenido a la seccion de cursos!!!</h1>

    <button> <a href="{{route('cursos.web')}}">Vamonoooos... </a> </button>

    @foreach ($cursos as $fila)
    {{-- ! Paso #1 --}}
        <li><a href="{{route('cursos.id', $fila->id)}}">{{$fila->nombre}}</a></li>
    @endforeach

    {{ $cursos->links() }}
@endsection
