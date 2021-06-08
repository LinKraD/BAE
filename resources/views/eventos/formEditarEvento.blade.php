@extends('plantilla')

@section('titulo', 'Edición de Eventos')

@section('contenido')

<form action="{{ route('eventos.update', $evento['id'] ) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="hidden" name="id" id="id" value="{{ $evento['id'] }}">
    <div class="form-group">
        <label for="titulo">{{ __("eventos.campos.titulo") }}</label>
        <input type="text" class="form-control" name="titulo" id="titulo" value="{{ $evento['titulo'] }}">
    </div>
    <div class="form-group">
        <label for="cuerpo">{{ __("eventos.campos.cuerpo") }}</label>
        <input type="text" class="form-control" name="cuerpo" id="cuerpo" value="{{ $evento['cuerpo'] }}">
    </div>
    <div class="form-group">
        <label for="fecha_publicacion">{{ __("eventos.campos.fecha") }}</label>
        <input type="date" class="form-control" name="fecha_publicacion" id="fecha_publicacion" value="{{ $evento['fecha_publicacion'] }}">
    </div>
    <input type="submit" value="{{ __('botones.gestion.aceptar') }}" class="btn btn-dark btn-block">
</form>
@endsection


