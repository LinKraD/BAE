@extends('plantilla')

@section('titulo', 'Listado de noticias')

@section('contenido')


<table class="table table-bordered">
    @forelse ($noticias as $noticia)
    <tr>
        <td>{{ $noticia["titulo"] }}</td>
        <td>{{ $noticia["cuerpo"] }}</td>
        <td>

            <form action="{{ route('noticias.destroy', $noticia['id']) }}" method="POST">
                <a class="btn btn-outline-primary" href="{{ route('noticias.edit', $noticia['id']) }}">{{ __("botones.gestion.editar") }}</a>
                @method('DELETE')
                @csrf
                <button class="btn btn-outline-danger">{{ __("botones.gestion.borrar") }}</button>
            </form>
        </td>
    </tr>
    @empty
    <tr colspan="3">{{ __("noticias.mensajes.no_hay") }}</tr>
    @endforelse
</table>
@endsection
