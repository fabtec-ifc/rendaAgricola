<fieldset>
    <div class="d-flex justify-content-center">
        <h2>Cadastrar Tipo de Usuário</h2>
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
                    value="@if(isset($tipoUsuario->descricao)){{ $tipoUsuario->descricao }}@endif"
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
                        id="acao">@if(isset($tipoUsuario->id)) Alterar @else Salvar @endif
                    </button>
                </div>
                <div class="col-6 text-start">
                    <a href="/tipoUsuario" class="btn btn-light border-secondary">Consultar</a>
                </div>
            </div>

        </div>
    </div>

</fieldset>
</form>


