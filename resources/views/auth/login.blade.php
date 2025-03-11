@extends('app')

@section('register')

    <form id="form" action="{{ route('login') }}" method="POST">
        @csrf
        <fieldset>
            <div class="row justify-content-center mt-4">
                <div class="col-md-5 form-group">
                
                    {{-- Email --}}
                    <div class="mt-2">
                        <label for="email">Email</label>
                        <input
                            placeholder="Informe seu email"
                            type="email"
                            id="email"
                            name="email"
                            class="form-control"
                            required
                            autofocus
                            autocomplete="email"
                            :value="old('email')"
                        >
                    </div>
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                
                    {{-- Senha --}}
                    <div class="mt-2">
                        <label for="password">Senha</label>
                        <input
                            placeholder="Informe sua senha"
                            type="password"
                            id="password"
                            name="password"
                            class="form-control"
                            required
                            autofocus
                            autocomplete="current-password"
                        >
                    </div>
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                
                    {{-- Termos --}}
                    <div class="mt-2">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="remember_me" name="remember"    >
                            <label class="form-check-label" for="remember_me">Lembrar de mim</label>
                        </div>
                    </div>
                    
                    {{-- Registro --}}
                    <div class="my-3">
                        <button type="submit" class="btn btn-light-blue border-blue text-blue me-2">Entrar</button>
                        @if (Route::has('password.request'))
                            <span>ou</span>
                            <a class="ms-2" href="{{ route('login') }}">
                                Esqueceu sua senha?
                            </a>
                        @endif
                    </div>

                </div>
            </div>
        </fieldset>
    </form>

@endsection

@push('validation')
    @vite('resources/js/validation/login.js')
@endpush