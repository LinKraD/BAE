@extends('plantilla')

@section('titulo', 'Listado de Actividades')

@section('contenido')


<table class="table table-bordered">
    @forelse ($actividades as $actividad)
    <tr>
        <td>{{ $actividad["titulo"] }}</td>
        <td>{{ $actividad["cuerpo"] }}</td>
    </tr>
    @empty
    <tr colspan="3">{{ __("actividades.mensajes.no_hay") }}</tr>
    @endforelse
</table>
@endsection
