@extends('layouts.plantilla')

@section('title', 'Curso ' . $curso)

@section('content')
    <h1>Binvenido al curso de: {{$curso}}</h1>
@endsection