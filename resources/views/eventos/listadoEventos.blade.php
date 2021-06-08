@extends('plantilla')

@section('titulo', 'Listado de Eventos')

@section('contenido')


<table class="table table-bordered">
    @forelse ($eventos as $evento)
    <tr>
        <td>{{ $evento["titulo"] }}</td>
        <td>{{ $evento["cuerpo"] }}</td>
    </tr>
    @empty
    <tr colspan="3">{{ __("eventos.mensajes.no_hay") }}</tr>
    @endforelse
</table>
@endsection
