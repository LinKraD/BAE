@extends('plantilla')

@section('titulo', 'Listado de Eventos')

@section('contenido')


<table class="table table-bordered">
    @forelse ($eventos as $evento)
    <tr>
        <td>{{ $evento["titulo"] }}</td>
        <td>{{ $evento["cuerpo"] }}</td>
        <td>

            <form action="{{ route('eventos.destroy', $evento['id']) }}" method="POST">
                <a class="btn btn-outline-primary" href="{{ route('eventos.edit', $evento['id']) }}">{{ __("botones.gestion.editar") }}</a>
                @method('DELETE')
                @csrf
                <button class="btn btn-outline-danger">{{ __("botones.gestion.borrar") }}</button>
            </form>
        </td>
    </tr>
    @empty
    <tr colspan="3">{{ __("eventos.mensajes.no_hay") }}</tr>
    @endforelse
</table>
@endsection
