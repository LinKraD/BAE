
@extends('plantilla')

@section('titulo', 'Bellas Artes Elche')

@section('contenido')

<h2>Últimas noticias</h2>
<div>
@forelse ($noticias as $noticia)
    <div id="noticias">
        <h3>{{ $noticia["titulo"] }}</td>
        <div>{{ substr($noticia["cuerpo"], 0, 30) }}@if(strlen($noticia["cuerpo"])>30)...@endif</div>
    </div>
    @empty
    <tr colspan="3">No se han encontrado noticias</tr>
    @endforelse
</div>

<h2>Últimos eventos</h2>
<div>
    @forelse ($eventos as $evento)
    <div id="eventos">
        <h3>{{ $evento["titulo"] }}</td>
        <div>{{ substr($evento["cuerpo"], 0, 30) }}@if(strlen($evento["cuerpo"])>30)...@endif</div>
    </div>
    @empty
    <tr colspan="3">No se han encontrado eventos</tr>
    @endforelse
</div>
@endsection
