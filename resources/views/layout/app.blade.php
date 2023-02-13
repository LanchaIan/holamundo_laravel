<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href={{ asset('css/app.css') }}>
    <title>@yield('titulo',"Tienda online")</title>
  <link rel="stylesheet" type="text/css" href="https://www3.gobiernodecanarias.org/educacion/cau_ce/cookies/cookieconsent.min.css"/><script  type="text/javascript" src="https://www3.gobiernodecanarias.org/educacion/cau_ce/cookies/cookieconsent.min.js"></script><script type="text/javascript" src="https://www3.gobiernodecanarias.org/educacion/cau_ce/cookies/cauce_cookie.js"></script><script type="text/javascript" src="https://www3.gobiernodecanarias.org/educacion/cau_ce/estadisticasweb/scripts/piwik-base.js"></script><script type="text/javascript" src="https://www3.gobiernodecanarias.org/educacion/cau_ce/estadisticasweb/scripts/piwik-eforma.js"></script></head>
  <body>
    
    <!-- header -->
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary py-4">
      <div class="container" style="background-color: {{}}">
        <a class="navbar-brand" href={{ route('home.index')}}>Online Store</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ms-auto">
            <a class="nav-link active" href={{ route('home.index')}}>Home</a>
            <a class="nav-link active" href={{ route('home.about')}}>About</a>
            <a class="nav-link active" href={{ route('products.index')}}>Productos</a>
          </div>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto">

            </ul>
            <ul class="navbar-nav ms-auto">
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
        </div>
      </div>
    </nav>
    
    <header class="masthead bg-primary text-white text-center py-4">
      <div class="container d-flex align-items-center flex-column">
        <h2>@yield('subtitulo',"Una tienda online de laravel")</h2>
      </div>
    </header>
    
    <!-- header -->
    
    <div class="container my-4">@yield('contenido')</div>

      <!-- footer -->
      <div class="copyright py-4 text-center text-white">
        <div class="container">
          <small>
          {{now()}}
          </small>
        </div>
      </div>
      <!-- footer -->
    
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
