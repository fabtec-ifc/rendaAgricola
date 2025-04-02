<fieldset>
    <div class="d-flex justify-content-center">
        <h2>@isset($municipio->id) Atualizar @else Cadastrar @endisset Município</h2>
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
                    value="@isset($municipio->descricao){{ $municipio->descricao }}@endisset"
                    id="descricao"
                >
            </div>

            <div class="mt-3">
                <label for="estado_id">Estado</label>
                <select
                    name="estado_id"
                    id="estado_id"
                    class="form-select"
                    required="required"
                >
                    @foreach($estados as $estado)
                        <option
                            value="{{ $estado->id }}"
                            @if(isset($municipio->estado_id) && $municipio->estado_id == $estado->id)
                                selected
                            @endif
                        >
                        <!-- Continuar -->

                            {{ $estado->descricao }}
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
