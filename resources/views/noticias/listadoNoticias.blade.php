@extends('plantilla')

@section('titulo', 'Listado de noticias')

@section('contenido')


<table class="table table-bordered">
    @forelse ($noticias as $noticia)
    
    <tr>
        <td>{{ $noticia["titulo"] }}</td>
        <td>{{ $noticia["cuerpo"] }}</td>
    </tr>
    @empty
    <tr colspan="3">{{ __("noticias.mensajes.no_hay") }}</tr>
    @endforelse
</table>
@endsection
