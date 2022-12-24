@extends('layouts.plantilla')
{{-- ! Paso #2 --}}
@section('title', 'Curso ' . $curso->id)

@section('content')
    {{-- ! Paso #2 --}}
    <h1>Binvenido al curso de: {{$curso->nombre}}</h1>
    <button><a href="{{route('house')}}">Go Back</a></button>
@endsection