<fieldset>
    <div class="d-flex justify-content-center">
        <h2>@isset($usuario->id) Atualizar @else Cadastrar @endisset Usuário</h2>
    </div>

    <div class="row justify-content-center mt-3">
        < class="col-12 col-md-3 form-group">

            <div>
                <label for="nome">Nome</label>
                <input
                    type="text"
                    placeholder="Informe o nome"
                    class="form-control"
                    name="nome"
                    required="required"
                    maxlength="255"
                    value="@isset($usuario->nome){{ $usuario->nome }}@endisset"
                    id="nome"
                >
            </div>

            <div class="mt-3">
                <label for="email">Email</label>
                <input
                    type="text"
                    placeholder="Informe o email"
                    class="form-control"
                    name="email"
                    required="required"
                    maxlength="255"
                    value="@isset($usuario->email){{ $usuario->email }}@endisset"
                    id="email"
                >
            </div>

            <div class="mt-3">
                <label for="senha">Senha</label>
                <input
                    type="text"
                    placeholder="Informe a senha"
                    class="form-control"
                    name="senha"
                    required="required"
                    maxlength="255"
                    value="@isset($usuario->password){{ $usuario->password }}@endisset"
                    id="senha"
                >
            </div>

            <div class="mt-3">
                <label for="estado_id">Tipo de Usuário</label>
                <select
                    name="tipoUsuario_id"
                    id="tipo_usuario_id"
                    class="form-select"
                    required="required"
                >
                    @foreach($tipoUsuario as $tipoUsuarios)
                        <option
                            value="{{ $tipoUsuario->id }}"
                            @if(isset($usuario->tipoUsuario_id) && $usuario->tipo_usuario_id == $tipoUsuario->id)
                                selected
                            @endif
                        >
                            {{ $tipoUsuario->descricao }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="row justify-content-center mt-3">
                <div class="col-6 text-end">
                    <button
                        type="submit"
                        class="btn btn-light-blue text-blue border-blue"
                        name="acao"
                        value="salvar"
                        id="acao">@isset($usuario->id) Alterar @else Salvar @endisset
                    </button>
                </div>
                <div class="col-6 text-start">
                    <a href="/usuario" class="btn btn-light border-secondary">Consultar</a>
                </div>
            </div>

        </div>
    </div>

</fieldset>
</form>

@push('validation')
    @vite(['resources/js/validation/usuario.js'])
@endpush
