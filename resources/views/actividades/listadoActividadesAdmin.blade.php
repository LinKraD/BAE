@extends('plantilla')

@section('titulo', 'Listado de Actividades')

@section('contenido')


<table class="table table-bordered">
    @forelse ($actividades as $actividad)
    <tr>
        <td>{{ $actividad["titulo"] }}</td>
        <td>{{ $actividad["cuerpo"] }}</td>
        <td>

            <form action="{{ route('actividades.destroy', $actividad['id']) }}" method="POST">
                <a class="btn btn-outline-primary" href="{{ route('actividades.edit', $actividad['id']) }}">{{ __("botones.gestion.editar") }}</a>
                @method('DELETE')
                @csrf
                <button class="btn btn-outline-danger">{{ __("botones.gestion.borrar") }}</button>
            </form>
        </td>
    </tr>
    @empty
    <tr colspan="3">{{ __("actividades.mensajes.no_hay") }}</tr>
    @endforelse
</table>
@endsection
