@extends("app")

@section("body")

    <h3>Áreas</h3>

    {{-- Pesquisa e botão de cadastro de Área --}}
    <div class="d-flex justify-content-between mb-3">
        <form action="{{ route('area.index') }}" method="get">
            <div class="d-flex gap-2">
                <input placeholder="Pesquisar Área" class="form-control" type="text" name="filtro" id="filtro" value="{{ $filtro }}">
                <button class="btn btn-light border-secondary" type="submit">
                    <span class="d-flex align-items-center gap-1 text-secondary">
                        <i class="ri-search-line"></i>
                        Pesquisar
                    </span>
                </button>
            </div>
        </form>

        <a href="{{ route('area.create') }}" class="btn btn-light-green border-green text-green">
            <span class="d-flex align-items-center gap-1">
                <i class="ri-add-line"></i>
                Nova Área
            </span>
        </a>
    </div>

    {{-- Tabela de Área --}}
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">
                    @sortablelink('id', 'Código')
                </th>
                <th scope="col">
                    @sortablelink('quantArea', 'Área total')
                </th>
                <th scope="col">
                    @sortablelink('descricao', 'Descrição')
                </th>
                <th scope="col">
                    @sortablelink('valorHectare', 'Valor/Ha')
                </th>
                <th scope="col">
                    @sortablelink('tipo_area_id', 'Tipo')
                </th>
                <th scope="col">
                    @sortablelink('tipo_uso_terras_id', 'Uso')
                </th>
                <th scope="col" colspan="3" class="col-3 text-center">Ações</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
        @foreach($areas as $area)
            <tr>
                <th scope="row">{{ $area->id }}</th>
                <td> {{ $area->quantArea }} m²</td>
                <td> {{ $area->descricao }} </td>
                <td>R$ {{ number_format($area->valorHectare, 2, ',', '.') }} </td>
                <td> {{ $area->tipoArea->descricao}} </td>
                <td> {{ $area->tipoUsoTerra->descricao}} </td>

                <td class="text-center">
                    <a class="btn btn-light-blue btn-sm" href="{{ route('area.show', $area->id) }}" data-bs-toggle="tooltip" data-bs-title="Ver">
                        <i class="ri-expand-diagonal-line text-blue"></i>
                    </a>
                </td>
                <td class="text-center">
                    <a class="btn btn-light-orange btn-sm" href="{{ route('area.edit', $area->id) }}" data-bs-toggle="tooltip" data-bs-title="Editar">
                        <i class="ri-edit-box-line text-orange"></i>
                    </a>
                </td>
                <td class="text-center">
                    <form name="form_delete" action="{{ route('area.destroy', $area->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <span data-bs-toggle="modal" data-bs-target="#mostrarModalExclusao" onclick="botaoExcluir(this, `{{ $area->id }}`, 'Área')">
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
        {!! $areas->appends(\Request::except('page'))->render() !!}
    </div>

    @push('modal')
        {{-- Modal de confirmação de exclusão --}}
        <x-modal-excluir />

        {{-- Script para confirmar a exclusão --}}
        @vite('resources/js/showModal.js')
    @endpush

@endsection
