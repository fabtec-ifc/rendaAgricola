<fieldset>
    <div class="d-flex justify-content-center">
        <h2>@if(isset($trabalho)) Atualizar @else Cadastrar @endif Trabalho</h2>
    </div>

    <div class="row justify-content-center mt-3">
        <div class="col-12 col-md-3 form-group">

            <div>
                <label for="titulo">Título</label>
                <input
                    type="text"
                    placeholder="Informe o título"
                    class="form-control"
                    name="titulo"
                    required="required"
                    maxlength="255"
                    value="@if(isset($trabalho->titulo)){{ $trabalho->titulo }}@endif"
                    id="titulo"
                >
            </div>

            <div class="mt-3">
                <label for="subtitulo">Subtítulo</label>
                <input
                    type="text"
                    placeholder="Informe o subtítulo"
                    class="form-control"
                    name="subtitulo"
                    required="required"
                    maxlength="255"
                    value="@if(isset($trabalho->subtitulo)){{ $trabalho->subtitulo }}@endif"
                    id="subtitulo"
                >
            </div>

            <div class="mt-3">
                <label for="descricao">Descrição</label>
                <textarea
                    placeholder="Informe a descrição"
                    class="form-control"
                    name="descricao"
                    required="required"
                    maxlength="100"
                    id="descricao"
                >@if(isset($trabalho->descricao)){{ $trabalho->descricao }}@endif</textarea>
            </div>

            <div class="mt-3">
                <label for="idioma">Idioma</label>
                <input
                    type="text"
                    placeholder="Informe o idioma"
                    class="form-control"
                    name="idioma"
                    required="required"
                    maxlength="60"
                    value="@if(isset($trabalho->idioma)){{ $trabalho->idioma }}@endif"
                    id="idioma"
                >
            </div>

            <div class="mt-3">
                <label for="dataPublicacao">Data de Publicação</label>
                <input
                    type="date"
                    class="form-control"
                    name="dataPublicacao"
                    required="required"
                    value="@if(isset($trabalho->dataPublicacao)){{ $trabalho->dataPublicacao }}@endif"
                    id="dataPublicacao"
                >
            </div>

            <div class="mt-3">
                <label for="tipo_trabalho_id">Tipo de Trabalho</label>
                <select
                    class="form-select"
                    name="tipo_trabalho_id"
                    id="tipo_trabalho_id"
                >
                    <option value="">Escolha um tipo de trabalho</option>
                    @foreach($tiposTrabalho as $tipoTrabalho)
                        <option
                            value="{{ $tipoTrabalho->id }}"
                            @isset($trabalho)
                                @if($tipoTrabalho->id == $trabalho->tipo_trabalho_id)
                                    selected
                                @endif
                            @endisset
                        >
                            {{ $tipoTrabalho->descricao }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mt-3">
                <label for="curso_id">Curso</label>
                <select
                    class="form-select"
                    name="curso_id"
                    id="curso_id"
                >
                    <option value="">Escolha um curso</option>
                    @foreach($cursos as $curso)
                        <option
                            value="{{ $curso->id }}"
                            @isset($trabalho)
                                @if($curso->id == $trabalho->curso_id)
                                    selected
                                @endif
                            @endisset
                        >
                            {{ $curso->descricao }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mt-3">
                <label for="resumo">Resumo</label>
                <textarea
                    placeholder="Informe o resumo"
                    class="form-control"
                    name="resumo"
                    required="required"
                    id="resumo"
                >@if(isset($trabalho->resumo)){{ $trabalho->resumo }}@endif</textarea>
            </div>

            <div class="row justify-content-center mt-3">
                <div class="col-6 text-end">
                    <button
                        type="submit"
                        class="btn btn-light-blue text-blue border-blue"
                        name="acao"
                        value="salvar"
                        id="acao">@if(isset($trabalho->id)) Alterar @else Salvar @endif
                    </button>
                </div>
                <div class="col-6 text-start">
                    <a href="/trabalho" class="btn btn-light border-secondary">Consultar</a>
                </div>
            </div>

        </div>
    </div>

</fieldset>
</form>

{{--
@push('validation')
    @vite('resources/js/validation/tipoTrabalho.js')
@endpush
--}}
