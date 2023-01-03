<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title','Home')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss','resources/css/app.css', 'resources/js/app.js',
           'resources/css/home.css','resources/css/preguntas.css','resources/js/preguntas.js',
           'resources/css/contact.css','resources/css/requisitosAfiliacion.css',
           'resources/css/requisitosAfiliacionCompensacion.css','resources/css/tarifas.css',
            'resources/css/solicitaAqui.css','resources/css/appPasajero.css',
            'resources/css/planillaindex.css'
           ])
</head>
<body>
    
    
       <header>
          <a href="{{'/'}}" class="logo">TaxPoblado</a>
          <nav>
            <ul>
                <li><a href="">Pasajeros</a></li>
                <li><a href="">Conductores</a></li>
                <li><a href="">Sobrenosotros</a></li>
                <li><a href="">Contactanos</a></li>
            </ul>

            <ul class="  despegable">
                <!-- Authentication Links -->
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
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>
                
                    <div class="" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                </form>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
                
                
                
            
                @endguest
            </ul>



          </nav>
          




       </header>
    
        <div class="" style="margin-top:150px">
            @yield('content')
        </div>
    
    
</body>
</html>








