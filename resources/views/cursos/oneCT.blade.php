@extends('layouts.plantilla')

@section('title', 'Curso de ')

@section('content')
    <h1>Formulario:</h1>
    <form action="{{route('curso.store')}}" method="POST">

        @csrf

        <label>
            Nombre:<br>
            <input type="text" name="nombre" id="">
        </label><br>
        <label>
            Descripción:<br>
            <textarea name="descripcion" id="" cols="30" rows="10"></textarea>
        </label><br>
        <label>
            Precio:<br>
            <input type="number" name="precio" id="">
        </label><br><br>
        <button type="submit">Enviar</button>
    </form>
@endsection