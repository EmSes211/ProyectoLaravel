<nav class="navbar navbar-light navbar-expand-md bg-white shadow-sm min-vw-100">
    <div class="container">
        <a class="navbar-brand" href="{{route('home')}}">
            {{config('app.name')}}
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav nav-pills">
                <!-- la siguiente manera es mas segura, ante un ataque, no ejecuta el ataque solo lo escribre, lo recomendable es usar la siguiente manera. Esto brinda seguridad. Esto tiene que ver con BLADE lo que hay en HREF-->
                <!-- lo que hay en CLASS es una TERNARIA, es una condicional: condición ? "acción" : "accción 2" -->
                <li class="nav-item"><a class="nav-link {{request()->routeIs('home')?'active':''}}" href="{{route('home')}}">@lang('Home')</a></li>
                <li class="nav-item"><a class="nav-link {{request()->routeIs('about')?'active':''}}" href="{{route('about')}}">@lang('About')</a></li>
                <li class="nav-item"><a class="nav-link {{request()->routeIs('contact')?'active':''}}" href="{{route('contact')}}">@lang('Contact')</a></li>
                <li class="nav-item"><a class="nav-link {{request()->routeIs('portfolio.*')?'active':''}}" href="{{route('portfolio.index')}}">@lang('Portfolio')</a></li>

                @auth
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                </li>
                @endauth

                @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @endguest

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </ul>
        </div>
    </div> 
</nav>