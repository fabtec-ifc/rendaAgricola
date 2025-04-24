<fieldset>
    <div class="d-flex justify-content-center">
        <h2>@isset($area->id) Atualizar @else Cadastrar @endisset Área</h2>
    </div>

    <div class="row justify-content-center mt-3">
        <div class="col-12 col-md-3 form-group">

            <div>
                <label for="quantArea">Quantidade de área (em m²)</label>
                <input
                    type="number"
                    placeholder="Informe a quantidade de área"
                    class="form-control"
                    name="quantArea"
                    required="required"
                    maxlength="255"
                    value="@isset($area->quantArea){{ $area->quantArea }}@endisset"
                    id="quantArea"
                >
            </div>

            <div class="mt-3">
                <label for="valorHectare">Valor do Hectare (R$)</label>
                <input
                    type="number"
                    step="0.01"
                    placeholder="Informe o valor do hectare"
                    class="form-control"
                    name="valorHectare"
                    required="required"
                    maxlength="16"
                    value="@isset($area->valorHectare){{ $area->valorHectare }}@endisset"
                    id="valorHectare"
                >
            </div>

            <div class="mt-3">
                <label for="tipo_area_id">Tipo de Área</label>
                <select
                    class="form-select"
                    name="tipo_area_id"
                    id="tipo_area_id"
                >
                    <option value="">Escolha um tipo de área</option>
                    @foreach($tiposArea as $tipoArea)
                        <option
                            value="{{ $tipoArea->id }}"
                            @isset($area)
                                @if($tipoArea->id == $area->tipo_area_id)
                                    selected
                                @endif
                            @endisset
                        >
                            {{ $tipoArea->descricao }}
                        </option>
                    @endforeach
                </select>
            </div>

            {{--
                //Remover esta sessão comentada ao adicionar ano agrícola
            <div class="mt-3">
                <label for="ano_agricola_id">Ano Agrícola</label>
                <select
                    class="form-select"
                    name="ano_agricola_id"
                    id="ano_agricola_id"
                >
                    <option value="">Escolha um ano agrícola</option>
                    @foreach($anosAgricola as $anoAgricola)
                        <option
                            value="{{ $anoAgricola->id }}"
                            @isset($area)
                                @if($anoAgricola->id == $area->ano_agricola_id)
                                    selected
                                @endif
                            @endisset
                        >
                            {{ $anoAgricola->inicio }}
                        </option>
                    @endforeach
                </select>
            </div>
            --}}

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