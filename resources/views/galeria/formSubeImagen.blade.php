@extends('plantilla')

@section('titulo', 'Subir imagen')

@section('contenido')

<form enctype="multipart/form-data" action="{{route('fotos.store')}}" method="POST">
    @csrf
    <div class="form-group">
        <label for="titulo">{{ __("galerias.campos.titulo") }}</label>
        <input type="text" class="form-control" name="titulo" id="titulo" required>
    </div>

    <input type="hidden" name="autor" id="autor" value="{{Auth::user()->id}}">
    <div class="form-group">
        <label for="descripcion">{{ __("galerias.campos.descripcion") }}</label>
        <input type="text" class="form-control" name="descripcion" id="descripcion">
    </div>
    <input type="hidden" name="ruta" id="ruta" value="storage/app/img/galeria">

    <input type="hidden" name="MAX_FILE_SIZE" value="10240">{{ __("galerias.campos.archivo") }} <input name="archivo" type="file"/>
    <br/>
    <input type="submit" name="btnSubir" value="{{ __('botones.gestion.subir') }}"/>
</form>
@endsection
