<!DOCTYPE html>
<html lang="es">
<head>
    <title>@yield('titulo')</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{!! asset('css/menu.css') !!}">
</head>
<body>
@if(Auth::check()&&Auth::user()->activo==0)
<div class="container">
    Esta cuenta a sido desactivada por algún motivo, si cree que ha sido un error por favor contacte con la asociación.
    <footer>
        @include('partials.footer')
    </footer>
</div>
@else
<div class="container">

    @include('partials.navbar')

    <div class="row" style="margin-top: 2rem;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>@yield('titulo')</h2>
            </div>
        </div>
    </div>

    @if ($mensaje = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $mensaje }}</p>
    </div>
    @endif

    @if ($mensaje = Session::get('error'))
    <div class="alert alert-warning">
        <p>{{ $mensaje }}</p>
    </div>
    @endif

    @yield('contenido')

    <footer>
        @include('partials.footer')
    </footer>
    </div>
@endif
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
