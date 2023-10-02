@extends('layouts.app')

@section('content')
    <h2>Listado de Elecciones</h2>

    <ul>
        @foreach($elecciones as $eleccion)
            <li>
                <strong>Nombre:</strong> {{ $eleccion->nombre }}<br>
                <strong>Tipo de elección:</strong> {{ $eleccion->tipodeeleccion }}<br>
                <strong>Tipo de votantes:</strong> {{ $eleccion->tipodevotantes }}<br>
                <strong>Fecha:</strong> {{ $eleccion->fecha }}<br>
                <strong>Boton:</strong> {{ $eleccion->id }}<br>
                <strong>Boton:</strong> {{ $eleccion->id }}<br>
                <strong>Alguito mas:</strong> {{ $eleccion->id }}<br>

            </li>
            <br>
        @endforeach
    </ul>
@endsection
