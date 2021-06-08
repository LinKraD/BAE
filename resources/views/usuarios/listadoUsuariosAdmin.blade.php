@extends('plantilla')

@section('titulo', 'Listado de usuarios')

@section('contenido')


<table class="table table-bordered">
    @forelse ($usuarios as $usuario)
    <tr>
        <td>{{ $usuario["name"] }}</td>
        <td>{{ $usuario["surnames"] }}</td>
        <td>{{ $usuario["email"] }}</td>
        <td>{{ $usuario["tipoUsuario"] }}</td>
        <td>

        <a class="btn btn-outline-primary" href="{{ route('editAdmin', $usuario['id']) }}">{{ __("botones.gestion.editar") }}</a>
                
        </td>
    </tr>
    @empty
    <tr colspan="3">{{ __("usuarios.mensajes.no_hay") }}</tr>
    @endforelse
</table>
@endsection
