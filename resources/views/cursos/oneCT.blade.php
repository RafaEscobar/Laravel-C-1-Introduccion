@extends('layouts.plantilla')

@section('title', 'Curso de ' . $curso)

@section('content')
    <h1>Curso: {{$curso}} de la categoria: {{$categoria}}</h1>
@endsection