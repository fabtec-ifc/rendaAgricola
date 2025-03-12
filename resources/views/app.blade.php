<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @stack('style')
    <title>Renda Agrícola</title>
</head>

<body @stack('bodyOnLoad')>

    <div class="container-fluid bg-light p-0">

        @component('header')
        @endcomponent

        {{-- @auth --}}

        <div class="d-flex">
            @component('side')
            @endcomponent
            <main role="main" class="p-3 w-100">
                <div class="bg-white shadow-sm rounded p-3">
                    @hasSection('body')
                        @yield('body')
                    @endif
                </div>
            </main>
        </div>

        {{-- @endauth --}}

        <main role="main" class="p-3 w-100">
            @hasSection ('register')
                @yield('register')
            @endif
        </main>

        <footer class="footer mt-auto py-3 bg-light">
            <div class="entrar__sobre-container text-center">
                <!-- stuff -->
                Renda Agrícola versão 1.0.0 - Desenvolvido por
                    <a class="entrar__sobre-container--link" href="http://fabricadetecnologias.ifc-riodosul.edu.br/" style="right: 8rem;"><img href src="{{ asset('imgs/logo.png') }}" style="width: 100px;" alt=""></a>
            </div>
            <div class="container text-center">
                <span class="text-muted">
                    © 2025 |
                    <a href="{{ route('termos') }}" class="text-dark">Termos de Serviço</a> |
                    <a href="{{ route('politicas') }}" class="text-dark">Política de Privacidade</a>
                </span>
            </div>
        </footer>

    </div>

    @stack('script')
    @stack('validation')
    @stack('modal')

    {{-- Mostrar Toast --}}
    @if (request()->session()->has('toast'))
        <x-toast :type="session('toast')['type']" :message="session('toast')['message']"/>
    @endif

</body>
</html>
