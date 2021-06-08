

<nav class="navbar navbar-expand-lg navbar-light border">
  
</nav>

<nav>
  <div class="idiomas">
  <a href="{{ url('locale/es') }}">
    Español<img src=""/></a>
  <a href="{{ url('locale/en') }}">
    Inglés<img src=""/></a>
  </div>
  <div class="info">
  <a href="https://www.facebook.com/bellasarteselche/">
  Facebook
  </a>
  <a href="https://www.instagram.com/bellasarteselche/">
  Instagram
  </a>
  {{__("botones.info.correo") }}bellasarteselche@gmail.com
  {{__("botones.info.telefono") }}676326211
  </div>
  <div class="btn_perfil">
  @if(Auth::check())
    <input type ='button' class="btn btn-warning user-button"  value = '{{__("botones.navbar.perfil") }}' onclick="location.href = 'home'"/>
  @endif
  </div>
</nav>

<nav class="navbar navbar-expand-lg navbar-light border">
  <a class="navbar-brand" href="{{ url('/') }}">
    <h2>{{__("botones.navbar.inicio") }}</h2>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        {{__("botones.dropdown.noticias") }}
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          @if(Auth::check()&&Auth::user()->tipoUsuario=='administrador'||Auth::check()&&Auth::user()->tipoUsuario=='adminCreador')
          <a class="dropdown-item" href="{{ route('noticiasAdmin') }}">{{__("botones.desplegables.listar") }}</a>
          <a class="dropdown-item" href="{{ route('noticias.create') }}">{{__("botones.desplegables.crear") }}</a>
          @else
          <a class="dropdown-item" href="{{ route('noticias.index') }}">{{__("botones.desplegables.listar") }}</a>
          @endif
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        {{__("botones.dropdown.eventos") }}
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          @if(Auth::check()&&Auth::user()->tipoUsuario=='administrador'||Auth::check()&&Auth::user()->tipoUsuario=='adminCreador')
          <a class="dropdown-item" href="{{ route('eventosAdmin') }}">{{__("botones.desplegables.listar") }}</a>
          <a class="dropdown-item" href="{{ route('eventos.create') }}">{{__("botones.desplegables.crear") }}</a>
          @else
          <a class="dropdown-item" href="{{ route('eventos.index') }}">{{__("botones.desplegables.listar") }}</a>
          @endif
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        {{__("botones.dropdown.actividades") }}
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          @if(Auth::check()&&Auth::user()->tipoUsuario=='administrador'||Auth::check()&&Auth::user()->tipoUsuario=='adminCreador')
          <a class="dropdown-item" href="{{ route('actividadesAdmin') }}">{{__("botones.desplegables.listar") }}</a>
          <a class="dropdown-item" href="{{ route('actividades.create') }}">{{__("botones.desplegables.crear") }}</a>
          @else
          <a class="dropdown-item" href="{{ route('actividades.index') }}">{{__("botones.desplegables.listar") }}</a>
          @endif
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        {{__("botones.dropdown.galeria") }}
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="/galeria-de-usuarios">{{__("botones.desplegables.buscar_u") }}</a>
          @if(Auth::check()&&Auth::user()->tipoUsuario=='administrador'||Auth::check()&&Auth::user()->tipoUsuario=='adminCreador')
          <a class="dropdown-item" href="/galeria-de-imagenes">{{__("botones.desplegables.galeria") }}</a>
          @else
          <a class="dropdown-item" href="/galeria-de-imagenes">{{__("botones.desplegables.galeria") }}</a>
          @endif
          @if(Auth::check()&&Auth::user()->tipoUsuario=='creador'||Auth::check()&&Auth::user()->tipoUsuario=='adminCreador')
          <a class="dropdown-item" href="{{ route('fotos.create') }}">{{__("botones.desplegables.subir") }}</a>
          @endif
        </div>
      </li>
      @if(Auth::check()&&Auth::user()->tipoUsuario=='administrador'||Auth::check()&&Auth::user()->tipoUsuario=='adminCreador')
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        {{__("botones.dropdown.usuarios") }}
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="{{ route('usuariosAdmin') }}">{{__("botones.desplegables.gestionar") }}</a>
        </div>
        @endif
      </li>
    </ul>
  </div>
  @if(Auth::check())
  <input type ='button' class="btn btn-warning"  value = '{{ __("botones.navbar.c_sesion") }}' onclick="location.href = 'logout'"/>
  @else
  <input type ='button' class="btn btn-warning"  value = '{{ __("botones.navbar.i_sesion") }}' onclick="location.href = '/home'"/>
  @endif
</nav>