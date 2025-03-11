<div class="d-flex justify-content-between px-3 py-2 bg-white shadow-sm">
    <a href="https://pt.wikipedia.org/wiki/Atlas_(mitologia)" target="_blank">
        <img src="{{ asset('imgs/logo_atlas.png') }}" alt="" width="75" class="rounded">
    </a>

    @auth

    <div class="d-flex justify-content-end align-items-center gap-1">
        <div class="mx-1">
            <a href="/profile" class="link-underline link-underline-opacity-0">
                <i class="ri-settings-4-fill ri-lg text-black"></i>
            </a>
        </div>
    </div>

    @else

    <div class="d-flex justify-content-end align-items-center gap-1">
        <div class="mx-1">
            <a href="{{ route('login') }}" class="btn btn-light-blue border-blue text-blue" role="button">
                Entrar
            </a>
        </div>
        {{-- <div class="mx-1">
            <a href="{{ route('register') }}" class="btn btn-light-blue border-blue text-blue" role="button">
                Cadastro
            </a>
        </div> --}}
    </div>

    @endauth

</div>
