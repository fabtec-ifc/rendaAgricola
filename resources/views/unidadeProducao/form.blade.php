<fieldset>
    <div class="d-flex justify-content-center">
        <h2>@isset($unidadeProducao->id) Atualizar @else Cadastrar @endisset Unidade de Produção</h2>
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
                    value="@isset($unidadeProducao->nome){{ $unidadeProducao->nome }}@endisset"
                    id="nome"
                >
            </div>

            <div class="mt-3">
                <label for="endereco">Endereço</label>
                <input
                    type="text"
                    placeholder="Informe o endereço"
                    class="form-control"
                    name="endereco"
                    required="required"
                    maxlength="255"
                    value="@isset($unidadeProducao->endereco){{ $unidadeProducao->endereco }}@endisset"
                    id="endereco"
                >
            </div>

            <div class="mt-3">
                <label for="estado_id">Estado</label>
                <select
                    name="estado_id"
                    id="estado_id"
                    class="form-select"
                    required="required"
                    onchange='changeEstado(this, "{{ route("selectEstado") }}")'
                >
                    @foreach($estados as $estado)
                        <option
                            value="{{ $estado->id }}"
                            @isset($unidadeProducao)
                                @if($unidadeProducao->municipio->estado_id == $estado->id)
                                    selected
                                @endif
                            @else
                                @if($estado->descricao == "Santa Catarina")
                                    selected
                                @endif
                            @endisset
                        >
                            {{ $estado->descricao }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mt-3">
                <label for="municipio_id">Município</label>
                <select
                    name="municipio_id"
                    id="municipio_id"
                    class="form-select"
                    required="required"
                >
                    @foreach($municipios as $municipio)
                        <option
                            value="{{ $municipio->id }}"
                            @isset($unidadeProducao->municipio_id)
                                @if($unidadeProducao->municipio_id == $municipio->id)
                                    selected
                                @endif
                            @else
                                @if($municipio->descricao == "Rio do Sul")
                                    selected
                                @endif
                            @endisset
                        >
                            {{ $municipio->descricao }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mt-3">
                <label for="telefone">Telefone</label>
                <input
                    type="text"
                    placeholder="Informe o telefone"
                    class="form-control"
                    name="telefone"
                    required="required"
                    maxlength="45"
                    value="@isset($unidadeProducao->telefone){{ $unidadeProducao->telefone }}@endisset"
                    id="telefone"
                >
            </div>
            

            <div class="row justify-content-center mt-3">
                <div class="col-6 text-end">
                    <button
                        type="submit"
                        class="btn btn-light-blue text-blue border-blue"
                        name="acao"
                        value="salvar"
                        id="acao">@isset($unidadeProducao->id) Alterar @else Salvar @endisset
                    </button>
                </div>
                <div class="col-6 text-start">
                    <a href="/unidadeProducao" class="btn btn-light border-secondary">Consultar</a>
                </div>
            </div>

        </div>
    </div>

</fieldset>
</form>

@push('validation')
    @vite(['resources/js/validation/unidadeProducao.js', 'resources/js/validation/changeEstado.js'])
@endpush
