@extends('plantilla')

@section('titulo', 'Crear actividad')

@section('contenido')

<form action="{{ route('actividades.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="titulo">{{ __("actividades.campos.titulo") }}</label>
        <input type="text" class="form-control" name="titulo" id="titulo" required>
    </div>
    <input type="hidden" name="usuario" id="usuario" value="{{Auth::user()->id}}">
    <div class="form-group">
        <label for="cuerpo">{{ __("actividades.campos.cuerpo_comp") }}</label>
        <input type="text" class="form-control" name="cuerpo" id="cuerpo" required>
    </div>
    <div class="form-group">
        <label for="fecha_publicacion">{{ __("actividades.campos.fecha") }}</label>
        <input type="date" class="form-control" name="fecha_publicacion" id="fecha_publicacion" required>
    </div>
    <input type="submit" name="enviar" value="Crear" class="btn btn-dark btn-block">
</form>
@endsection
