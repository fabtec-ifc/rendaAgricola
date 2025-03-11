<section>
    <header class="d-flex flex-column align-items-center">
        <h2>
            {{ __('Informações do Perfil') }}
        </h2>

        <p class="mt-1">
            {{ __("Atualize os dados do seu perfil") }}
        </p>
    </header>

    <form id="profile" method="post" action="{{ route('profile.update') }}">
        @csrf
        @method('patch')
        <fieldset>
            <div class="row justify-content-center mt-3">
                <div class="col-md-5 form-group">
    
                    {{-- Nome --}}
                    <div class="">
                        <label for="name">Nome</label>
                        <input
                            placeholder="Informe seu nome"
                            type="text"
                            id="name"
                            name="name"
                            class="form-control"
                            required
                            autocomplete="name"
                            value="{{ old('name', $user->name) }}"
                        >
                    </div>
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                
                    {{-- RG --}}
                    <div class="mt-2">
                        <label for="rg">Registro Geral (RG)</label>
                        <input
                            placeholder="Informe seu Registro Geral (RG)"
                            type="text"
                            id="rg"
                            name="rg"
                            class="form-control"
                            autocomplete="rg"
                            value="{{ old('rg', $user->rg) }}"
                        >
                    </div>
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                
                    {{-- Naturalidade --}}
                    <div class="mt-2">
                        <label for="naturalidade">Naturalidade</label>
                        <input
                            placeholder="Informe sua Naturalidade"
                            type="text"
                            id="naturalidade"
                            name="naturalidade"
                            class="form-control"
                            autocomplete="naturalidade"
                            value="{{ old('naturalidade', $user->naturalidade) }}"
                        >
                    </div>
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                
                    {{-- CPF --}}
                    <div class="mt-2">
                        <label for="cpf">CPF</label>
                        <input
                            placeholder="Informe seu CPF"
                            type="text"
                            id="cpf"
                            name="cpf"
                            class="form-control"
                            autocomplete="cpf"
                            value="{{ old('cpf', $user->cpf) }}"
                        >
                    </div>
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                
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
                            autocomplete="email"
                            value="{{ old('email', $user->email) }}"
                        >
                    </div>
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
    
                    {{-- Registro --}}
                    <div class="my-3 d-flex justify-content-center">
                        <button type="submit" class="btn btn-light-green text-green border-green">Salvar</button>
                    </div>
    
                </div>
            </div>
        </fieldset>
    </form>
</section>
