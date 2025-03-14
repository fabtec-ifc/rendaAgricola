<fieldset>
    <div class="d-flex justify-content-center">
        <h2>@isset($estado->id) Atualizar @else Cadastrar @endisset Estado</h2>
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
                    value="@isset($estado->descricao){{ $estado->descricao }}@endisset"
                    id="descricao"
                >
            </div>

            <div class="mt-3">
                <label for="sigla">Sigla</label>
                <input
                    type="text"
                    placeholder="Informe a sigla"
                    class="form-control"
                    name="sigla"
                    required="required"
                    maxlength="2"
                    value="@isset($estado->sigla){{ $estado->sigla }}@endisset"
                    id="sigla"
                >
            </div>

            <div class="row justify-content-center mt-3">
                <div class="col-6 text-end">
                    <button
                        type="submit"
                        class="btn btn-light-blue text-blue border-blue"
                        name="acao"
                        value="salvar"
                        id="acao">@isset($estado->id) Alterar @else Salvar @endif
                    </button>
                </div>
                <div class="col-6 text-start">
                    <a href="/estado" class="btn btn-light border-secondary">Consultar</a>
                </div>
            </div>

        </div>
    </div>

</fieldset>
</form>

@push('validation')
    @vite('resources/js/validation/estado.js')
@endpush
