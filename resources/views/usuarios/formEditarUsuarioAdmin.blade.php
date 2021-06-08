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
    <div class="form-group">
        <label for="tipoUsuario">{{__("usuarios.campos.tipo") }}</label>
        <select name="tipoUsuario" id="tipoUsuario">
            <option value="creador">Creador</option>
            <option value="administrador">Administrador</option>
            <option value="adminCreador">Administrador/Creador</option>
        </select>
    </div>
    <div class="form-group">
        @if(Auth::user()->activo==1)
        <input type="checkbox" name="activo" id="activo" checked>{{__("usuarios.campos.activo") }}
        @else
        <input type="checkbox" name="activo" id="activo">{{__("usuarios.campos.activado") }}
        @endif
    </div>
    <input type="submit" value="{{ __('botones.gestion.aceptar') }}" class="btn btn-dark btn-block">
</form>
@endsection


