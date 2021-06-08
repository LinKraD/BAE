@extends('plantilla')

@section('titulo', '')

@section('contenido')

<div>

    <img src="{{ asset('storage/img/galeria/'.$imagen['nombre']) }}"/><br>
    <h2>{{__("galerias.imagen.titulo")}}{{ $imagen["titulo"] }}</h2><br>
    {{__("galerias.imagen.descripcion")}}{{ $imagen["descripcion"] }}<br>
    {{__("galerias.imagen.autor")}}{{ $usuario["name"] }} {{ $usuario["surnames"] }}<br>
</div>
@endsection
