@extends('plantilla')

@section('titulo', 'Galería')

@section('contenido')

<div>
    @forelse ($imagenes as $imagen)
    <div class="imagen">
        <a href="{{ route('imagen', $imagen['nombre']) }}">
            <img src="{{ asset('storage/img/galeria/'.$imagen['nombre']) }}" style="max-width: 100%; max-height: 100%;"/><br>
            {{ $imagen["titulo"] }}
        </a>
    </div>
    @empty
    <tr colspan="3">{{ __("galerias.mensajes.no_hay") }}</tr>
    @endforelse
</div>
@endsection
