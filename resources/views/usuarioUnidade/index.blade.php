@extends("app")

@section("body")

    <h4>Unidade de Produção {{ $unidadeProducao->nome }}</h4>
    <hr>
    <h3>Usuários adicionados</h3>

    {{-- Pesquisa e botão de adição de Usuários --}}
    <div class="d-flex justify-content-between mb-3">
        {{--
        <form action="{{ route('usuarioUnidade.index') }}" method="get">
            <div class="d-flex gap-2">
                <input placeholder="Pesquisar Usuário por nome" class="form-control" type="text" name="filtro" id="filtro" size="30" value="{{ $filtro }}">
                <button class="btn btn-light border-secondary" type="submit">
                    <span class="d-flex align-items-center gap-1 text-secondary">
                        <i class="ri-search-line"></i>
                        Pesquisar
                    </span>
                </button>
            </div>
        </form>
        --}}

        <a href="{{ route('usuarioUnidade.create', $unidadeProducao->id) }}" class="btn btn-light-green border-green text-green">
            <span class="d-flex align-items-center gap-1">
                <i class="ri-add-line"></i>
                Adicionar usuário
            </span>
        </a>
    </div>

    {{-- Tabela de Usuário --}}
    @if(!$usuarios->isEmpty())
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">
                        @sortablelink('id', 'Código')
                    </th>
                    <th scope="col">
                        @sortablelink('name', 'Nome')
                    </th>
                    <th scope="col">
                        @sortablelink('email', 'E-mail')
                    </th>
                    <th scope="col">
                        @sortablelink('tipo_usuario_id', 'Tipo de Usuário')
                    </th>
                    <th scope="col" colspan="2" class="col-2 text-center">Ações</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach($usuarios as $usuario)
                    <tr>
                        <th scope="row">{{ $usuario->id }}</th>
                        <td> {{ $usuario->name }} </td>
                        <td> {{ $usuario->email }} </td>
                        <td> {{ $usuario->tipoUsuario->descricao }} </td>
                        <td class="text-center">
                            <a class="btn btn-light-blue btn-sm" href="{{ route('usuarioUnidade.show', [$unidadeProducao->id, $usuario->id]) }}" data-bs-toggle="tooltip" data-bs-title="Ver">
                                <i class="ri-expand-diagonal-line text-blue"></i>
                            </a>
                        </td>
                        <td class="text-center">
                            <form name="form_delete" action="{{ route('usuarioUnidade.destroy', [$unidadeProducao->id, $usuario->id]) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <span data-bs-toggle="modal" data-bs-target="#mostrarModalExclusao" onclick="botaoExcluir(this, `{{ $usuario->name }}`, 'Usuário')">
                                    <button type="button" class="btn btn-light-red btn-sm" data-bs-toggle="tooltip" data-bs-title="Remover">
                                        <i class="ri-delete-bin-line text-red"></i>
                                    </button>
                                </span>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p class="text-center"> Nenhum usuário foi adicionado à unidade. </p>
    @endif

    <div class="card-footer">
        {!! $usuarios->appends(\Request::except('page'))->render() !!}
    </div>

    @push('modal')
        {{-- Modal de confirmação de exclusão --}}
        <x-modal-excluir />

        {{-- Script para confirmar a exclusão --}}
        @vite('resources/js/showModal.js')
    @endpush


@endsection
