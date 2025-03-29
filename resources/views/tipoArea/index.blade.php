@extends("app")

@section("body")

    <h3>Tipos de Área</h3>

    {{-- Pesquisa e botão de cadastro de Tipo de Área --}}
    <div class="d-flex justify-content-between mb-3">
        <form action="{{ route('tipoArea.index') }}" method="get">
            <div class="d-flex gap-2">
                <input placeholder="Pesquisar Tipo de Área" class="form-control" type="text" name="filtro" id="filtro" value="{{ $filtro }}">
                <button class="btn btn-light border-secondary" type="submit">
                    <span class="d-flex align-items-center gap-1 text-secondary">
                        <i class="ri-search-line"></i>
                        Pesquisar
                    </span>
                </button>
            </div>
        </form>

        <a href="{{ route('tipoArea.create') }}" class="btn btn-light-green border-green text-green">
            <span class="d-flex align-items-center gap-1">
                <i class="ri-add-line"></i>
                Novo Tipo de Área
            </span>
        </a>
    </div>

    {{-- Tabela de Tipos de Área --}}
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col" class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
                    @sortablelink('id', 'Código')
                </th>
                <th scope="col" class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    @sortablelink('descricao', 'Descrição')
                </th>
                <th scope="col" class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    @sortablelink('areaPropria', 'Área Própria')
                </th>
                <th scope="col" colspan="3" class="col-3 text-center">Ações</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
        @foreach($tiposArea as $tipoArea)
            <tr>
                <th scope="row">{{ $tipoArea->id }}</th>
                <td> {{ $tipoArea->descricao }} </td>
                <td> @if($tipoArea->areaPropria) Sim @else Não @endif </td>
                <td class="text-center">
                    <a class="btn btn-light-blue btn-sm" href="{{ route('tipoArea.show', $tipoArea->id) }}" data-bs-toggle="tooltip" data-bs-title="Ver">
                        <i class="ri-expand-diagonal-line text-blue"></i>
                    </a>
                </td>
                <td class="text-center">
                    <a class="btn btn-light-orange btn-sm" href="{{ route('tipoArea.edit', $tipoArea->id) }}" data-bs-toggle="tooltip" data-bs-title="Editar">
                        <i class="ri-edit-box-line text-orange"></i>
                    </a>
                </td>
                <td class="text-center">
                    <form name="form_delete" action="{{ route('tipoArea.destroy', $tipoArea->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <span data-bs-toggle="modal" data-bs-target="#mostrarModalExclusao" onclick="botaoExcluir(this, '{{ $tipoArea->descricao }}', 'Tipo de Área')">
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
        {!! $tiposArea->appends(\Request::except('page'))->render() !!}
    </div>

    @push('modal')
        {{-- Modal de confirmação de exclusão --}}
        <x-modal-excluir />

        {{-- Script para confirmar a exclusão --}}
        @vite('resources/js/showModal.js')
    @endpush

@endsection