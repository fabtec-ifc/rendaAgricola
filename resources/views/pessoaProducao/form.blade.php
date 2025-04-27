<fieldset>
    <div class="d-flex justify-content-center">
        <h2>@isset($pessoaProducao->id) Atualizar @else Cadastrar @endisset Pessoa na Produção</h2>
    </div>

    <div class="row justify-content-center mt-3">
        <div class="col-12 col-md-3 form-group">

            <div>
                <label for="nome">Nome</label>
                <input
                    type="text"
                    placeholder="Informe o nome"
                    class="form-control"
                    name="nome"
                    required="required"
                    maxlength="255"
                    value="{{ old('nome', $pessoaProducao->nome ?? '') }}"
                    id="nome"
                >
            </div>

            <div class="mt-3">
                <label for="cpf">CPF</label>
                <input
                    type="number"
                    placeholder="Informe o CPF"
                    class="form-control"
                    name="cpf"
                    maxlength="16"
                    value="{{ old('cpf', $pessoaProducao->cpf ?? '') }}"
                    id="cpf"
                >
            </div>

            <div class="mt-3">
                <label for="dataNascimento">Data de Nascimento</label>
                <input
                    type="date"
                    class="form-control"
                    name="dataNascimento"
                    required="required"
                    value="{{ old('dataNascimento', $pessoaProducao->dataNascimento ?? '') }}"
                    id="dataNascimento"
                >
            </div>

            <div class="mt-3">
                <label for="diasTrabalho">Dias de Trabalho</label>
                <input
                    type="number"
                    placeholder="Informe os dias de trabalho"
                    class="form-control"
                    name="diasTrabalho"
                    required="required"
                    value="{{ old('diasTrabalho', $pessoaProducao->diasTrabalho ?? '') }}"
                    id="diasTrabalho"
                >
            </div>

            <div class="mt-3">
                <label for="tipo_mao_de_obra_id">Tipo de Mão de Obra</label>
                <select
                    class="form-select"
                    name="tipo_mao_de_obra_id"
                    id="tipo_mao_de_obra_id"
                >
                    <option value="">Escolha um tipo de mão de obra</option>
                    @foreach($tiposMaoDeObra as $tipoMaoDeObra)
                        <option
                            value="{{ $tipoMaoDeObra->id }}"
                            {{ old('tipo_mao_de_obra_id', $pessoaProducao->tipo_mao_de_obra_id ?? '') == $tipoMaoDeObra->id ? 'selected' : '' }}
                        >
                            {{ $tipoMaoDeObra->descricao }}
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
                            {{ old('ano_agricola_id', $pessoaProducao->ano_agricola_id ?? '') == $anoAgricola->id ? 'selected' : '' }}
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
                        id="acao">@isset($pessoaProducao->id) Alterar @else Salvar @endisset
                    </button>
                </div>
                <div class="col-6 text-start">
                    <a href="/pessoaProducao" class="btn btn-light border-secondary">Consultar</a>
                </div>
            </div>

        </div>
    </div>
</fieldset>

@push('validation')
    @vite('resources/js/validation/pessoaProducao.js')
@endpush
