<fieldset>
    <div class="d-flex justify-content-center">
        <h2>@isset($anoAgricola->id) Atualizar @else Cadastrar @endisset Ano agrícola</h2>
    </div>

    <div class="row justify-content-center mt-3">
        <div class="col-12 col-md-3 form-group">

            <div>
                <label for="inicio">Início</label>
                <input
                    type="date"
                    class="form-control"
                    name="inicio"
                    required="required"
                    value="@isset($anoAgricola->inicio){{ $anoAgricola->inicio }}@endisset"
                    id="inicio"
                >
            </div>

            <div class="mt-3">
                <label for="fim">Fim</label>
                <input
                    type="date"
                    class="form-control"
                    name="fim"
                    required="required"
                    value="@isset($anoAgricola->fim){{ $anoAgricola->fim }}@endisset"
                    id="fim"
                >
            </div>
            
            <div class="mt-3">
                <label for="ativo">Ativo</label> 
                <select
                    name="ativo"
                    id="ativo"
                    class="form-select"
                    required="required"
                >
                    <option value="1" @if(isset($anoAgricola->ativo) && $anoAgricola->ativo) selected @endif>Sim</option>
                    <option value="0" @if(isset($anoAgricola->ativo) && !$anoAgricola->ativo) selected @endif>Não</option>
                </select>
            </div>

            <div class="mt-3">
                <label for="unidade_producao_id">Unidade de produção</label>
                <select
                    name="unidade_producao_id"
                    id="unidade_producao_id"
                    class="form-select"
                    required="required"
                >
                    @foreach($unidadesProducao as $unidadeProducao)
                        <option
                            value="{{ $unidadeProducao->id }}"
                            @if(isset($anoAgricola->unidade_producao_id) && $anoAgricola->unidade_producao_id == $unidadeProducao->id)
                                selected
                            @endif
                        >
                            {{ $unidadeProducao->nome }}
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
                        id="acao">@isset($anoAgricola->id) Alterar @else Salvar @endisset
                    </button>
                </div>
                <div class="col-6 text-start">
                    <a href="/anoAgricola" class="btn btn-light border-secondary">Consultar</a>
                </div>
            </div>

        </div>
    </div>

</fieldset>
</form>

@push('validation')
    @vite('resources/js/validation/anoAgricola.js')
@endpush
