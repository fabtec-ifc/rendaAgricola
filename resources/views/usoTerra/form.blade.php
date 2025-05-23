<fieldset>
    <div class="d-flex justify-content-center">
        <h2>@isset($usoTerra->id) Atualizar @else Cadastrar @endisset Uso da Terra</h2>
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
                    value="@isset($usoTerra->quantArea){{ $usoTerra->quantArea }}@endisset"
                    id="quantArea"
                >
            </div>

            <div class="mt-3">
                <label for="areaInaproveitavel">Área Inaproveitável (em m²)</label>
                <input
                    type="number"
                    step="0.01"
                    placeholder="Informe a área Inaproveitável"
                    class="form-control"
                    name="areaInaproveitavel"
                    required="required"
                    maxlength="255"
                    value="@isset($usoTerra->areaInaproveitavel){{ $usoTerra->areaInaproveitavel }}@endisset"
                    id="areaInaproveitavel"
                >
            </div>

            <div class="mt-3">
                <label for="tipo_uso_terra_id">Tipo de Uso da Terra</label>
                <select
                    class="form-select"
                    name="tipo_uso_terra_id"
                    id="tipo_uso_terra_id"
                >
                    <option value="">Escolha um tipo de uso</option>
                    @foreach($tiposUso as $tipo)
                        <option
                            value="{{ $tipo->id }}"
                            @isset($usoTerra)
                                @if($tipo->id == $usoTerra->tipo_uso_terra_id)
                                    selected
                                @endif
                            @endisset
                        >
                            {{ $tipo->descricao }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mt-3">
                <label for="ano_agricola_id">Ano Agrícola</label>
                <select
                    class="form-select"
                    name="ano_agricola_id"
                    id="ano_agricola_id"
                >
                    <option value="">Escolha um ano agrícola</option>
                    @foreach($anosAgricolas as $anoAgricola)
                        <option
                            value="{{ $anoAgricola->id }}"
                            @isset($usoTerra)
                                @if($anoAgricola->id == $usoTerra->ano_agricola_id)
                                    selected
                                @endif
                            @endisset
                        >
                            {{ date_format(date_create($anoAgricola->inicio), "d/m/Y") }} a {{ date_format(date_create($anoAgricola->fim), "d/m/Y") }}
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
                        id="acao">@isset($usoTerra->id) Alterar @else Salvar @endisset
                    </button>
                </div>
                <div class="col-6 text-start">
                    <a href="{{ route('usoTerra.index') }}" class="btn btn-light border-secondary">Consultar</a>
                </div>
            </div>

        </div>
    </div>
</fieldset>
</form>

@push('validation')
    @vite('resources/js/validation/usoTerra.js')
@endpush
