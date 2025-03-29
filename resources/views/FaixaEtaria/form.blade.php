<fieldset>
    <div class="d-flex justify-content-center">
        <h2>@isset($faixaEtaria->id) Atualizar @else Cadastrar @endisset Faixa Etária</h2>
    </div>

    <div class="row justify-content-center mt-3">
        <div class="col-12 col-md-3 form-group">

            <div>
                <label for="inicio">Início</label>
                <input
                    type="text"
                    placeholder="Informe o início do intervalo"
                    class="form-control"
                    name="inicio"
                    required="required"
                    maxlength="255"
                    value="@isset($faixaEtaria->inicio){{ $faixaEtaria->inicio }}@endisset"
                    id="inicio"
                >
            </div>

            <div class="mt-3">
                <label for="fim">Fim</label>
                <input
                    type="text"
                    placeholder="Informe o fim do intervalo"
                    class="form-control"
                    name="fim"
                    required="required"
                    maxlength="255"
                    value="@isset($faixaEtaria->fim){{ $faixaEtaria->fim }}@endisset"
                    id="fim"
                >
            </div>

            <div class="mt-3">
                <label for="multiplicador">Multiplicador</label>
                <input
                    type="text"
                    placeholder="Informe o multiplicador"
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
