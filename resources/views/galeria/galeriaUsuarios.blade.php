@extends('plantilla')

@section('titulo', 'Lista de usuarios')

@section('contenido')
<div class="galerybar">
<form method="GET" action="{{ route('buscar') }}">
<label>{{ __("galerias.busqueda.buscar") }}</label>
<div class="form-group row">
    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __("galerias.busqueda.nombre") }}</label>

    <div class="col-md-6">
        <input id="name" type="text" name="name" value="{{ old('name') }}">
    </div>
</div>
<button type="submit" class="btn btn-primary">
{{ __("botones.gestion.buscar") }}
</button>
</form>
</div>
<div>
    @forelse ($usuarios as $usuario)
    <div class="usuario">
    <a href="{{ route('galeria', $usuario['id']) }}">
            {{ $usuario["name"] }} {{ $usuario["surnames"] }}
        </a>
    </div>
    @empty
    <tr colspan="3">{{ __("usuarios.mensajes.no_hay") }}</tr>
    @endforelse
</div>
@endsection
