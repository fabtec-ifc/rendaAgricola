<section>
    <header class="d-flex flex-column align-items-center">
        <h2>
            {{ __('Atualização de Senha') }}
        </h2>

        <p class="mt-1">
            {{ __('Garanta que a sua conta esteja utilizando uma senha segura') }}
        </p>
    </header>

    <form id="form_profile_password" method="post" action="{{ route('password.update') }}">
        @csrf
        @method('put')
        <fieldset>
            <div class="row justify-content-center mt-4">
                <div class="col-md-5 form-group">
    
                    {{-- Senha Atual --}}
                    <div class="">
                        <label for="current_password">Senha Atual</label>
                        <input
                            placeholder="Informe sua senha atual"
                            type="text"
                            id="current_password"
                            name="current_password"
                            class="form-control"
                            required
                            autocomplete="current-password"
                        >
                    </div>
                    <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
                
                    {{-- Nova Senha --}}
                    <div class="mt-2">
                        <label for="password">Nova Senha</label>
                        <input
                            placeholder="Informe sua senha nova"
                            type="text"
                            id="password"
                            name="password"
                            class="form-control"
                            required
                            autocomplete="new-password"
                        >
                    </div>
                    <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
                
                    {{-- Naturalidade --}}
                    <div class="mt-2">
                        <label for="password_confirmation">Confirme a Senha</label>
                        <input
                            placeholder="Confirme sua senha"
                            type="text"
                            id="password_confirmation"
                            name="password_confirmation"
                            class="form-control"
                            required
                            autocomplete="new-password"
                        >
                    </div>
                    <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
                
                    {{-- Registro --}}
                    <div class="my-3">
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-light-green text-green border-green">Alterar</button>
                        </div>
                    </div>
    
                </div>
            </div>
        </fieldset>
    </form>
</section>

<section>
    <header class="d-flex flex-column align-items-center">
        <h2>
            {{ __('Reset de senha por Email') }}
        </h2>

        <p class="mt-1">
            {{ __('Garanta que a sua conta esteja utilizando uma senha segura') }}
        </p>

        <form id="formEmail" action="{{ route('enviar-email-senha') }}" method="GET">
            @csrf
            <button id="btnSubmit" type="submit" class="btn btn-light-green text-green border-green">Enviar E-mail</button>
            <span id="countdown" class="ml-2"></span>
        </form>

    </header>
</section>

<script>
document.getElementById('btnSubmit').addEventListener('click', function() {
    event.preventDefault();

    var form = document.getElementById('formEmail');
    var formData = new FormData(form);

    fetch(form.action + '?' + new URLSearchParams(formData), {
        method: 'GET',
        headers: {
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        }
    })
    .then(response => {
        if (!response.ok) {
            throw new Error('Erro ao enviar e-mail');
        }
        alert('E-mail enviado com sucesso!');
    })
    .catch(error => {
        alert('Erro ao enviar e-mail: ' + error.message);
    });
});
</script>

