<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" >
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Hospital São José') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
  <div id="app">
   <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <h1 class="ls-brand-name">
                    <div class="container-fluid">
                      <div class="form-group col-md-4">
                       <img src="{{asset('images/logo.png')}}" class="logo1"/>
                      </div>
                      <div class="form-group col-md-8 ">
                         <p class="margen1">HOSPITAL SÃO JOSÉ</p>
                          <p class="hospital1">CONTROLE DE VEICULOS</p>
                     </div>

                      </div>
                   </div>
                  </h1>
                    <!-- Left Side Of Navbar -->
          <ul class="navbar-nav mr-auto">

          </ul>
                    <!-- Right Side Of Navbar -->
          <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
              @guest
          <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}">{{ __('Entrar') }}</a>
          </li>
            @if (Route::has('register'))
          <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">{{ __('Cadastro') }}</a>
          </li>
            @endif
            @else
          <li class="nav-item dropdown">
           <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
              {{ Auth::user()->name }} <span class="caret"></span>
           </a>

          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
            </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
          </form>
          </div>
        </li>
        @endguest
      </ul>
      </div>
    </div>
   </nav>
    <main class="py-4">
      @yield('content')
    </main>
  </div>
</body>
</html>
