@extends('plantilla')

@section('titulo', 'Edición de imágenes')

@section('contenido')

<form action="{{ route('familia.update', $familia['cod'] ) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="cod">Código:</label>
        <input type="text" class="form-control" name="cod" id="cod" value="{{ $familia['cod'] }}">
    </div>
    <div class="form-group">
        <label for="nombre">Nombre:</label>
        <input type="text" class="form-control" name="nombre" id="nombre" value="{{ $familia['nombre'] }}">
    </div>
    <input type="submit" value="{{ __('botones.gestion.aceptar') }}" class="btn btn-dark btn-block">
</form>
@endsection


