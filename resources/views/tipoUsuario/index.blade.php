@extends("app")

@section("body")

    <h3>Tipos de Usuário</h3>

    {{-- Pesquisa e botão de cadastro de Tipo de Usuário --}}
    <div class="d-flex justify-content-between mb-3">
        <form action="{{ route('tipoUsuario.index') }}" method="get">
            <div class="d-flex gap-2">
                <input placeholder="Pesquisar Tipo de Usuário" class="form-control" type="text" name="filtro" id="filtro" value="{{ $filtro }}">
                <button class="btn btn-light border-secondary" type="submit">
                    <span class="d-flex align-items-center gap-1 text-secondary">
                        <i class="ri-search-line"></i>
                        Pesquisar
                    </span>
                </button>
            </div>
        </form>

        <a href="{{ route('tipoUsuario.create') }}" class="btn btn-light-green border-green text-green">
            <span class="d-flex align-items-center gap-1">
                <i class="ri-add-line"></i>
                Novo Tipo de Usuário
            </span>
        </a>
    </div>

    {{-- Tabela de Tipos de Usuário --}}
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col" class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
                    @sortablelink('id', 'Código')
                </th>
                <th scope="col" class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                    @sortablelink('descricao', 'Descrição')
                </th>
                <th scope="col" colspan="3" class="col-3 text-center">Ações</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
        @foreach($tiposUsuario as $tipoUsuario)
            <tr>
                <th scope="row">{{ $tipoUsuario->id }}</th>
                <td> {{ $tipoUsuario->descricao }} </td>
                <td class="text-center">
                    <a class="btn btn-light-blue btn-sm" href="{{ route('tipoUsuario.show', $tipoUsuario->id) }}" data-bs-toggle="tooltip" data-bs-title="Ver">
                        <i class="ri-expand-diagonal-line text-blue"></i>
                    </a>
                </td>
                <td class="text-center">
                    <a class="btn btn-light-orange btn-sm" href="{{ route('tipoUsuario.edit', $tipoUsuario->id) }}" data-bs-toggle="tooltip" data-bs-title="Editar">
                        <i class="ri-edit-box-line text-orange"></i>
                    </a>
                </td>
                <td class="text-center">
                    <form name="form_delete" action="{{ route('tipoUsuario.destroy', $tipoUsuario->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <span data-bs-toggle="modal" data-bs-target="#mostrarModalExclusao" onclick="botaoExcluir(this, '{{ $tipoUsuario->descricao }}', 'Tipo de Usuário')">
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
        {!! $tiposUsuario->appends(\Request::except('page'))->render() !!}
    </div>

    @push('modal')
        {{-- Modal de confirmação de exclusão --}}
        <x-modal-excluir />

        {{-- Script para confirmar a exclusão --}}
        @vite('resources/js/showModal.js')
    @endpush

@endsection
