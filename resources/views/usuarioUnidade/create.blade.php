@extends("app")

@section("body")

<form id="form" action="{{ route('usuarioUnidade.store', $unidadeProducao->id) }}" method="POST">
    @csrf

    <fieldset>
        <div class="d-flex justify-content-center">
            <h2>Adicionar Usuário</h2>
        </div>

        <div class="row justify-content-center mt-3">
            <div class="col-12 col-md-3 form-group">

                <div>
                    <label for="user_id">Usuário</label>
                    <select
                        name="user_id"
                        id="user_id"
                        class="form-select"
                        required="required"
                    >
                        <option value="">Escolha um usuário</option>
                        @foreach($usuarios as $usuario)
                            <option value="{{ $usuario->id }}">
                                {{ $usuario->name }}
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
                            id="acao">@isset($municipio->id) Alterar @else Salvar @endisset
                        </button>
                    </div>
                    <div class="col-6 text-start">
                        <a href="/municipio" class="btn btn-light border-secondary">Consultar</a>
                    </div>
                </div>

            </div>
        </div>
    </fieldset>
</form>

@push('validation')
    @vite('resources/js/validation/municipio.js')
@endpush

@endsection
