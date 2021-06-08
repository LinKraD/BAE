@extends('plantilla')

@section('titulo', 'Mi perfil')

@section('contenido')

<div>
Nombre:{{ $usuario["name"] }} <br>
Apellidos:{{ $usuario["surname"] }} <br>

<a class="btn btn-outline-primary" href="{{ route('usuarios.edit', $usuario['id']) }}">Editar datos</a>
</div>
<a class="btn btn-outline-primary" href="{{ route('imagenes.galeria', $usuario['id']) }}">Mi galería</a>

@endsection


