@extends("app")

@section("body")

    <h3>Ano agrícola</h3>

    {{-- Pesquisa e botão de cadastro de Ano Agrícola --}}
    <div class="d-flex justify-content-between mb-3">
        {{-- <form action="{{ route('anoAgricola.index') }}" method="get">
            <div class="d-flex gap-2">
                <input placeholder="Pesquisar Ano Agrícola" class="form-control" type="text" name="filtro" id="filtro" value="{{ $filtro }}">
                <button class="btn btn-light border-secondary" type="submit">
                    <span class="d-flex align-items-center gap-1 text-secondary">
                        <i class="ri-search-line"></i>
                        Pesquisar
                    </span>
                </button>
            </div>
        </form> --}}

        <a href="{{ route('anoAgricola.create') }}" class="btn btn-light-green border-green text-green">
            <span class="d-flex align-items-center gap-1">
                <i class="ri-add-line"></i>
                Novo Ano Agrícola
            </span>
        </a>
    </div>

    {{-- Tabela de Ano Agrícola --}}
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col" class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
                    @sortablelink('id', 'Código')
                </th>
                <th scope="col" class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                    @sortablelink('inicio', 'Início')
                </th>
                <th scope="col" class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                    @sortablelink('fim', 'Fim')
                </th>
                <th scope="col" class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                    @sortablelink('ativo', 'Ativo')
                </th>
                <th scope="col" class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                    @sortablelink('unidade_producao_id', 'Unidade de Produção')
                </th>
                <th scope="col" colspan="3" class="col-3 text-center">Ações</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
        @foreach($anosAgricolas as $anoAgricola)
            <tr>
                <th scope="row">{{ $anoAgricola->id }}</th>
                <td> {{ $anoAgricola->inicio }} </td>
                <td> {{ $anoAgricola->fim }} </td>
                <td> {{ $anoAgricola->ativo ? 'Sim' : 'Não'}} </td>
                <td> {{ $anoAgricola->unidadeProducao->nome }} </td>
                <td class="text-center">
                    <a class="btn btn-light-blue btn-sm" href="{{ route('anoAgricola.show', $anoAgricola->id) }}" data-bs-toggle="tooltip" data-bs-title="Ver">
                        <i class="ri-expand-diagonal-line text-blue"></i>
                    </a>
                </td>
                <td class="text-center">
                    <a class="btn btn-light-orange btn-sm" href="{{ route('anoAgricola.edit', $anoAgricola->id) }}" data-bs-toggle="tooltip" data-bs-title="Editar">
                        <i class="ri-edit-box-line text-orange"></i>
                    </a>
                </td>
                <td class="text-center">
                    <form name="form_delete" action="{{ route('anoAgricola.destroy', $anoAgricola->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <span class="w-100" data-bs-toggle="modal" data-bs-target="#mostrarModalExclusao" onclick="botaoExcluir(this, `{{ date_format(date_create($anoAgricola->inicio), 'd/m/Y') }} a {{ date_format(date_create($anoAgricola->fim), 'd/m/Y') }}`, 'Ano Agrícola de')">
                            <button type="button" class="btn btn-light-red btn-sm" data-bs-toggle="tooltip" data-bs-title="Excluir">
                                <i class="ri-delete-bin-line text-red"></i>
                            </button>
                        </span>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <div class="card-footer">
        {!! $anosAgricolas->appends(\Request::except('page'))->render() !!}
    </div>

    @push('modal')
        {{-- Modal de confirmação de exclusão --}}
        <x-modal-excluir />

        {{-- Script para confirmar a exclusão --}}
        @vite('resources/js/showModal.js')
    @endpush

@endsection
