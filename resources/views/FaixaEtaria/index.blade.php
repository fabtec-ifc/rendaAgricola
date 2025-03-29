@extends("app")

@section("body")

    <h3>Faixas Etárias</h3>

    {{-- Pesquisa e botão de cadastro de Faixas Etárias --}}
    <div class="d-flex justify-content-between mb-3">
        <a href="{{ route('faixaEtaria.create') }}" class="btn btn-light-green border-green text-green">
            <span class="d-flex align-items-center gap-1">
                <i class="ri-add-line"></i>
                Nova Faixa Etária
            </span>
        </a>
    </div>

    {{-- Tabela de Faixas Etárias --}}
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
                    @sortablelink('multiplicador', 'Multiplicador')
                </th>
                <th scope="col" colspan="3" class="col-3 text-center">Ações</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
        @foreach($faixasEtarias as $faixaEtaria)
            <tr>
                <th scope="row">{{ $faixaEtaria->id }}</th>
                <td> {{ $faixaEtaria->inicio }} </td>
                <td> {{ $faixaEtaria->fim }} </td>
                <td> {{ $faixaEtaria->multiplicador }} </td>
                <td class="text-center">
                    <a class="btn btn-light-blue btn-sm" href="{{ route('faixaEtaria.show', $faixaEtaria->id) }}" data-bs-toggle="tooltip" data-bs-title="Ver">
                        <i class="ri-expand-diagonal-line text-blue"></i>
                    </a>
                </td>
                <td class="text-center">
                    <a class="btn btn-light-orange btn-sm" href="{{ route('faixaEtaria.edit', $faixaEtaria->id) }}" data-bs-toggle="tooltip" data-bs-title="Editar">
                        <i class="ri-edit-box-line text-orange"></i>
                    </a>
                </td>
                <td class="text-center">
                    <form name="form_delete" action="{{ route('faixaEtaria.destroy', $faixaEtaria->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <span data-bs-toggle="modal" data-bs-target="#mostrarModalExclusao" onclick="botaoExcluir(this, '{{ $faixaEtaria->inicio }} a {{ $faixaEtaria->fim }} anos', 'Faixa Etária de')">
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
        {!! $faixasEtarias->appends(\Request::except('page'))->render() !!}
    </div>

    @push('modal')
        {{-- Modal de confirmação de exclusão --}}
        <x-modal-excluir />

        {{-- Script para confirmar a exclusão --}}
        @vite('resources/js/showModal.js')
    @endpush

@endsection
