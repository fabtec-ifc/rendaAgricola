<nav class="navbar navbar-expand-lg navbar-dark bg-primary rounded">
    <a class="navbar-brand" href="/">Home</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            @if (auth()->check())
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('*estado*') ? 'active' : '' }}" href="/estado">Estados</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('*tipoUsuario*') ? 'active' : '' }}" href="/tipoUsuario">Tipos de Usuario</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('*redeEnsino*') ? 'active' : '' }}" href="/redeEnsino">Redes de Ensino</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('*usuario*') ? 'active' : '' }}" href="/usuario">Usuários</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('*tipoUnidade*') ? 'active' : '' }}" href="/tipoUnidade">Tipos de Unidade</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('*municipio*') ? 'active' : '' }}" href="/municipio">Municipios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('*unidadeEnsino*') ? 'active' : '' }}" href="/unidadeEnsino">Unidades de Ensino</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('*feira*') ? 'active' : '' }}" href="/feira">Feiras</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('*credenciamento*') ? 'active' : '' }}" href="/credenciamento">Credenciamento   </a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ auth()->user()->name }}
                    </a>
                <ul class="dropdown-menu dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li>
                        <a class="dropdown-item" href="/profile">Perfil</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="/dashboard">Dashboard</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                    </li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </ul>
                </li>
            @else
                <li class="nav-item">
                    <a  class="nav-link" href="{{ route('login') }}">Log in</a>
                </li>

                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Register</a>
                    </li>
                @endif
            @endif
        </ul>
    </div>
</nav>