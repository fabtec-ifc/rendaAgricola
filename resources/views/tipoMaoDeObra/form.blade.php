<fieldset>
    <div class="d-flex justify-content-center">
        <h2>@isset($tipoMaoDeObra->id) Atualizar @else Cadastrar @endisset Tipo de Mão de Obra</h2>
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
                    value="@isset($tipoMaoDeObra->descricao){{ $tipoMaoDeObra->descricao }}@endisset"
                    id="descricao"
                >
            </div>

            <div class="row justify-content-center mt-3">
                <div class="col-6 text-end">
                    <button
                        type="submit"
                        class="btn btn-light-blue text-blue border-blue"
                        name="acao"
                        value="salvar"
                        id="acao">@isset($tipoMaoDeObra->id) Alterar @else Salvar @endisset
                    </button>
                </div>
                <div class="col-6 text-start">
                    <a href="/tipoMaoDeObra" class="btn btn-light border-secondary">Consultar</a>
                </div>
            </div>

        </div>
    </div>

</fieldset>
</form>

@push('validation')
    @vite('resources/js/validation/tipoMaoDeObra.js')
@endpush
