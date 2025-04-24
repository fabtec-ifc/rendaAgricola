@extends("app")

@section("body")

    <h3>Pessoa</h3>

    {{-- Pesquisa e botão de cadastro de Pessoa-Produção --}}
    <div class="d-flex justify-content-between mb-3">
        <form action="{{ route('pessoaProducao.index') }}" method="get">
            <div class="d-flex gap-2">
                <input placeholder="Pesquisar Pessoa" class="form-control" type="text" name="filtro" id="filtro" value="{{ $filtro }}">
                <button class="btn btn-light border-secondary" type="submit">
                    <span class="d-flex align-items-center gap-1 text-secondary">
                        <i class="ri-search-line"></i>
                        Pesquisar
                    </span>
                </button>
            </div>
        </form>

        <a href="{{ route('pessoaProducao.create') }}" class="btn btn-light-green border-green text-green">
            <span class="d-flex align-items-center gap-1">
                <i class="ri-add-line"></i>
                Nova Pessoa
            </span>
        </a>
    </div>

    {{-- Tabela de Pessoa-Producao --}}
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">@sortablelink('id', 'Código')</th>
                <th scope="col">@sortablelink('nome', 'Nome')</th>
                <th scope="col">@sortablelink('cpf', 'CPF')</th>
                <th scope="col">@sortablelink('dataNascimento', 'Data de Nascimento')</th>
                <th scope="col">@sortablelink('diasTrabalho', 'Dias de Trabalho')</th>
                <th scope="col" colspan="3" class="text-center">Ações</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            @foreach($pessoasProducao as $pessoaProducao)
                <tr>
                    <th scope="row">{{ $pessoaProducao->id }}</th>
                    <td>{{ $pessoaProducao->nome }}</td>
                    <td>{{ $pessoaProducao->cpf }}</td>
                    <td>{{ $pessoaProducao->dataNascimento }}</td>
                    <td>{{ $pessoaProducao->diasTrabalho }}</td>
                    <td class="text-center">
                        <a class="btn btn-light-blue btn-sm" href="{{ route('pessoaProducao.show', $pessoaProducao->id) }}" data-bs-toggle="tooltip" data-bs-title="Ver">
                            <i class="ri-expand-diagonal-line text-blue"></i>
                        </a>
                    </td>
                    <td class="text-center">
                        <a class="btn btn-light-orange btn-sm" href="{{ route('pessoaProducao.edit', $pessoaProducao->id) }}" data-bs-toggle="tooltip" data-bs-title="Editar">
                            <i class="ri-edit-box-line text-orange"></i>
                        </a>
                    </td>
                    <td class="text-center">
                        <form name="form_delete" action="{{ route('pessoaProducao.destroy', $pessoaProducao->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <span data-bs-toggle="modal" data-bs-target="#mostrarModalExclusao" onclick="botaoExcluir(this, `{{ $pessoaProducao->descricao }}`, 'Tipo de Mão de Obra')">
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
        {!! $pessoasProducao->appends(\Request::except('page'))->render() !!}
    </div>

    @push('modal')
        {{-- Modal de confirmação de exclusão --}}
        <x-modal-excluir />

        {{-- Script para confirmar a exclusão --}}
        @vite('resources/js/showModal.js')
    @endpush

@endsection
