<fieldset>
    <div class="d-flex justify-content-center">
        <h2>@isset($tipoArea->id) Atualizar @else Cadastrar @endisset Tipo de Área</h2>
    </div>

    <div class="row justify-content-center mt-3">
        <div class="col-12 col-md-3 form-group">

            <div>
                <label for="descricao">Descrição</label>
                <input
                    type="text"
                    placeholder="Informe a descrição"
                    class="form-control"
                    name="descricao"
                    required="required"
                    maxlength="255"
                    value="@isset($tipoArea->descricao){{ $tipoArea->descricao }}@endisset"
                    id="descricao"
                >
            </div>

            <div class="mt-3">
                <label for="areaPropria">Área Própria</label>
                <input
                    type="radio"
                    class="form-control"
                    name="areaPropria"
                    id="areaPropria"
                >
            </div>

            <div class="row justify-content-center mt-3">
                <div class="col-6 text-end">
                    <button
                        type="submit"
                        class="btn btn-light-blue text-blue border-blue"
                        name="acao"
                        value="salvar"
                        id="acao">@isset($tipoArea->id) Alterar @else Salvar @endisset
                    </button>
                </div>
                <div class="col-6 text-start">
                    <a href="/tipoArea" class="btn btn-light border-secondary">Consultar</a>
                </div>
            </div>

        </div>
    </div>

</fieldset>
</form>

@push('validation')
    @vite('resources/js/validation/tipoArea.js')
@endpush