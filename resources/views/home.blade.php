@extends('plantilla')

@section('contenido')
<div class="container">
<div>

Nombre:{{ auth()->user()->name }}<br>
Apellidos:{{ auth()->user()->surnames }} <br>

<a class="btn btn-outline-primary" href="{{ route('users.edit', Auth::user()->id) }}">Editar datos</a>
</div>
<a class="btn btn-outline-primary" href="{{ route('galeria', Auth::user()->id) }}">Mi galería</a>
</div>
@endsection
