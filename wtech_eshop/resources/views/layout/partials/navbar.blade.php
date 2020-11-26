<nav class="navbar navbar-expand-md navbar-dark bg-primary">
        <a class="navbar-brand" href="{{route('home')}}">Domov</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Kategórie
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
<<<<<<< HEAD
                        <a class="dropdown-item" href="{{route('shop', 1)}}">Počítače</a>
                        <a class="dropdown-item" href="{{route('shop', 2)}}">Notebooky</a>
                        <a class="dropdown-item" href="{{route('shop', 3)}}">Príslušenstvo</a>
=======
                        <a class="dropdown-item" href="{{route('shop-pc')}}">Počítače</a>
                        <a class="dropdown-item" href="#">Notebooky</a>
                        <a class="dropdown-item" href="#">Príslušenstvo</a>
>>>>>>> 561c475c3fff89721213e20f18eb3ea17a750ddf
                    </div>
                </li>
            </ul>
            <a class="navbar-brand" href="#">Informácie</a>
            <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     @if(Auth::check())
                     {{ Auth::user()->name }}
                     @else
                        Konto
                     @endif
                    <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-person-square text-white" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                                    <path fill-rule="evenodd" d="M2 15v-1c0-1 1-4 6-4s6 3 6 4v1H2zm6-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                    </svg>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                    @if(Auth::check())
                        <a class="dropdown-item" href="">Objednávky</a>

                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">{{ __('Odhlásenie') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    @csrf
                                                </form>
                    @else
                        <a class="dropdown-item" href="{{ route('login') }}">Prihlásenie</a>
                        <a class="dropdown-item" href="{{ route('register') }}">Registrácia</a>
                    @endif
                </div>
            </li>
            </ul>
        </div>
</nav>
