@extends('plantilla')

@section('titulo', 'Edición de usuarios')

@section('contenido')

<form action="{{ route('usuarios.update', $usuario['id'] ) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="name">{{__("usuarios.campos.nombre") }}</label>
        <input type="text" class="form-control" name="name" id="name" value="{{ $usuario['name'] }}">
    </div>
    <div class="form-group">
        <label for="surnames">{{__("usuarios.campos.apellidos") }}</label>
        <input type="text" class="form-control" name="surnames" id="surnames" value="{{ $usuario['surnames'] }}">
    </div>
    <div class="form-group">
        <label for="email">{{__("usuarios.campos.correo") }}</label>
        <input type="email" class="form-control" name="email" id="email" value="{{ $usuario['email'] }}">
    </div>
    <input type="submit" value="enviar" class="btn btn-dark btn-block">
</form>
@endsection


