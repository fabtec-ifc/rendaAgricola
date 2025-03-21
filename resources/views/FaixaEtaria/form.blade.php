<fieldset>
    <div class="d-flex justify-content-center">
        <h2>@isset($faixaEtaria->id) Atualizar @else Cadastrar @endisset Tipo de Usuário</h2>
    </div>

    <div class="row justify-content-center mt-3">
        <div class="col-12 col-md-3 form-group">

            <div>
                <label for="inicio">Inicio</label>
                <input
                    type="text"
                    placeholder="Informe a Inicio"
                    class="form-control"
                    name="inicio"
                    required="required"
                    maxlength="255"
                    value="@isset($faixaEtaria->inicio){{ $faixaEtaria->inicio }}@endisset"
                    id="inicio"
                >
                <label for="fim">Fim</label>
                <input
                    type="text"
                    placeholder="Informe a fim"
                    class="form-control"
                    name="fim"
                    required="required"
                    maxlength="255"
                    value="@isset($faixaEtaria->fim){{ $faixaEtaria->fim }}@endisset"
                    id="fim"
                >
                <label for="multiplicador">multiplicador</label>
                <input
                    type="text"
                    placeholder="Informe a multiplicador"
                    class="form-control"
                    name="multiplicador"
                    required="required"
                    maxlength="255"
                    value="@isset($faixaEtaria->multiplicador){{ $faixaEtaria->multiplicador }}@endisset"
                    id="multiplicador"
                >
            </div>

            <div class="row justify-content-center mt-3">
                <div class="col-6 text-end">
                    <button
                        type="submit"
                        class="btn btn-light-blue text-blue border-blue"
                        name="acao"
                        value="salvar"
                        id="acao">@isset($faixaEtaria->id) Alterar @else Salvar @endisset
                    </button>
                </div>
                <div class="col-6 text-start">
                    <a href="/faixaEtaria" class="btn btn-light border-secondary">Consultar</a>
                </div>
            </div>

        </div>
    </div>

</fieldset>
</form>

@push('validation')
    @vite('resources/js/validation/faixaEtaria.js')
@endpush
