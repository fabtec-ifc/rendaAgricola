{{-- @extends('app')

@section('register')

    <form id="form" action="{{ route('register') }}" method="POST">
        @csrf
        <fieldset>
            <div class="row justify-content-center mt-4">
                <div class="col-md-5 form-group">

                    <div class="">
                        <label for="name">Nome</label>
                        <input
                            placeholder="Informe seu nome"
                            type="text"
                            id="name"
                            name="name"
                            class="form-control"
                            required
                            autofocus
                            autocomplete="name"
                            :value="old('name')"
                        >
                    </div>
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                
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
                            autocomplete="new-password"
                        >
                    </div>
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                
                    <div class="mt-2">
                        <label for="password_confirmation">Confirmar senha</label>
                        <input
                            placeholder="Confirme sua senha"
                            type="password"
                            id="password_confirmation"
                            name="password_confirmation"
                            class="form-control"
                            required
                            autofocus
                            autocomplete="new-password"
                        >
                    </div>
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                
                    <div class="mt-2">
                        <span class="text-secondary">Leu e concorda com nossas 
                            <a href="{{ route('politicas') }}" target="_blank" class="text-info">Políticas de Privacidade</a> 
                            e
                            <a href="{{ route('termos') }}" target="_blank" class="text-info">Termos de Uso</a>?
                        </span>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="politicas" name="politicas" required>
                            <label class="form-check-label" for="politicas">Li e Concordo</label>
                            <label id="politicas-error" class="error" for="politicas"></label>
                        </div>
                    </div>
                    
                    <div class="my-3">
                        <button type="submit" class="btn btn-light-blue border-blue text-blue me-2">Registrar-se</button>
                        <span>ou</span>
                        <a class="ms-2" href="{{ route('login') }}">
                            Já possui registro?
                        </a>
                    </div>

                </div>
            </div>
        </fieldset>
    </form>

@endsection

@push('validation')
    @vite('resources/js/validation/register.js')
@endpush --}}
