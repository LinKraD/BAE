@extends('plantilla')

@section('titulo', 'Edición de noticias')

@section('contenido')

<form action="{{ route('noticias.update', $noticia['id'] ) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="hidden" name="id" id="id" value="{{ $noticia['id'] }}">
    <div class="form-group">
        <label for="titulo">{{ __("noticias.campos.titulo") }}</label>
        <input type="text" class="form-control" name="titulo" id="titulo" value="{{ $noticia['titulo'] }}">
    </div>
    <div class="form-group">
        <label for="cuerpo">{{ __("noticias.campos.cuerpo") }}</label>
        <input type="text" class="form-control" name="cuerpo" id="cuerpo" value="{{ $noticia['cuerpo'] }}">
    </div>
    <div class="form-group">
        <label for="fecha_publicacion">{{ __("noticias.campos.fecha") }}</label>
        <input type="date" class="form-control" name="fecha_publicacion" id="fecha_publicacion" value="{{ $noticia['fecha_publicacion'] }}">
    </div>
    <input type="submit" value="{{ __('botones.gestion.aceptar') }}" class="btn btn-dark btn-block">
</form>
@endsection


