@extends('plantilla')

@section('titulo', 'Edición de Actividades')

@section('contenido')

<form action="{{ route('actividades.update', $actividad['id'] ) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="hidden" name="id" id="id" value="{{ $actividad['id'] }}">
    <div class="form-group">
        <label for="titulo">{{ __("actividades.campos.titulo") }}</label>
        <input type="text" class="form-control" name="titulo" id="titulo" value="{{ $actividad['titulo'] }}">
    </div>
    <div class="form-group">
        <label for="cuerpo">{{ __("actividades.campos.cuerpo") }}</label>
        <input type="text" class="form-control" name="cuerpo" id="cuerpo" value="{{ $actividad['cuerpo'] }}">
    </div>
    <div class="form-group">
        <label for="fecha_publicacion">{{ __("actividades.campos.fecha") }}</label>
        <input type="date" class="form-control" name="fecha_publicacion" id="fecha_publicacion" value="{{ $actividad['fecha_publicacion'] }}">
    </div>
    <input type="submit" value="{{ __('botones.gestion.aceptar') }}" class="btn btn-dark btn-block">
</form>
@endsection


