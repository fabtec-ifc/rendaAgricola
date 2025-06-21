<fieldset>
    <div class="d-flex justify-content-center">
        <h2>@isset($tipoUsoTerra->id) Atualizar @else Cadastrar @endisset Tipo de Uso da Terra</h2>
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
                    value="@isset($tipoUsoTerra->descricao){{ $tipoUsoTerra->descricao }}@endisset"
                    id="descricao"
                >
            </div>

            <div class="mt-3">
            <label for="areaUtil">Área Útil</label>
                <div>
                    <div class="form-check form-check-inline">
                        <input
                            type="radio"
                            class="form-check-input"
                            name="areaUtil"
                            id="areaUtil1"
                            value="1"
                            @if(isset($tipoUsoTerra->areaUtil) && $tipoUsoTerra->areaUtil == 1) checked @endif
                        >
                        <label class="form-check-label" for="areaUtil1">
                            Sim
                        </label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input
                            type="radio"
                            class="form-check-input"
                            name="areaUtil"
                            id="areaUtil0"
                            value="0"
                            @if(isset($tipoUsoTerra->areaUtil) && $tipoUsoTerra->areaUtil == 0) checked @endif
                        >
                        <label class="form-check-label" for="areaUtil0">
                            Não
                        </label>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center mt-3">
                <div class="col-6 text-end">
                    <button
                        type="submit"
                        class="btn btn-light-blue text-blue border-blue"
                        name="acao"
                        value="salvar"
                        id="acao">@isset($tipoUsoTerra->id) Alterar @else Salvar @endif
                    </button>
                </div>
                <div class="col-6 text-start">
                    <a href="/tipoUsoTerra" class="btn btn-light border-secondary">Consultar</a>
                </div>
            </div>

        </div>
    </div>

</fieldset>
</form>

@push('validation')
    @vite('resources/js/validation/tipoUsoTerra.js')
@endpush
