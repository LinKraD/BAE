@extends('plantilla')

@section('titulo', 'Galería')

@section('contenido')

@include('partials.galerybar')
<div>
<table class="table table-bordered" id="tabla">
    @forelse ($imagenes as $imagen)
    <tr>
        <td>{{ $imagen["id"] }}</td>
        <td><img src="{{ asset($imagen['ruta'].'/'.$imagen['nombre']) }}"></td>
        <td>{{ $imagen["titulo"] }}</td>
        <td>

            <form action="{{ route('eventos.destroy', $imagen['id']) }}" method="POST">
                <a class="btn btn-outline-primary" href="{{ route('fotos.edit', $imagen['id']) }}">{{ __("botones.gestion.editar") }}</a>
                @method('DELETE')
                @csrf
                <button class="btn btn-outline-danger">{{ __("botones.gestion.borrar") }}</button>
            </form>
        </td>
    </tr>
    
    @empty
    <tr colspan="3">{{ __("galerias.mensajes.no_hay") }}</tr>
    @endforelse
</table>
</div>
@endsection
