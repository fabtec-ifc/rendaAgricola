@extends("app")

@section("body")

<h3>Consulta de Trabalhos</h3>

{{-- Pesquisar e adicionar trabalho
<div class="d-flex justify-content-between mb-3">
    <form action="{{ route('trabalho.index') }}" method="get">
        <div class="d-flex gap-2">
            <input placeholder="Pesquisar Trabalho" class="form-control" type="text" name="filtro" id="filtro" value="{{ $filtro }}">
            <button class="btn btn-light border-secondary" type="submit">
                <span class="d-flex align-items-center gap-1 text-secondary">
                    <i class="ri-search-line"></i>
                    Pesquisar
                </span>
            </button>
        </div>
    </form>
--}}

    <a href="{{ route('trabalho.create') }}" class="btn btn-light-green border-green text-green">
        <span class="d-flex align-items-center gap-1">
            <i class="ri-add-line"></i>
            Novo Trabalho
        </span>
    </a>
</div>

{{-- Apresentar tabela de trabalho --}}
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th scope="col" class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
                @sortablelink('id', 'Código')
            </th>
            <th scope="col" class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                @sortablelink('titulo', 'Título')
            </th>
            <th scope="col" class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                @sortablelink('subtitulo', 'Subtítulo')
            </th>
            <th scope="col" class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                @sortablelink('dataPublicacao', 'Data de Publicação')
            </th>
            <th scope="col" class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
                @sortablelink('numeroDeDownloads', 'Downloads')
            </th>
            <th scope="col" colspan="3" class="col-3 text-center">Ações</th>
        </tr>
    </thead>
    <tbody class="table-group-divider">
        @foreach($trabalhos as $trabalho)
        <tr>
            <th scope="row">{{ $trabalho->id }}</th>
            <td> {{ $trabalho->titulo }} </td>
            <td> {{ $trabalho->subtitulo }} </td>
            <td> {{ date_format(date_create($trabalho->dataPublicacao), "d/m/Y") }} </td>
            <td> {{ $trabalho->numeroDeDownloads }} </td>
            <td class="text-center">
                <a class="btn btn-light-blue btn-sm" href="{{ route('trabalho.show', $trabalho->id) }}" data-bs-toggle="tooltip" data-bs-title="Ver">
                    <i class="ri-expand-diagonal-line text-blue"></i>
                </a>
            </td>
            <td class="text-center">
                <a class="btn btn-light-orange btn-sm" href="{{ route('trabalho.edit', $trabalho->id) }}" data-bs-toggle="tooltip" data-bs-title="Editar">
                    <i class="ri-edit-box-line text-orange"></i>
                </a>
            </td>
            <td class="text-center">
                <form name="form_delete" action="{{ route('trabalho.destroy', $trabalho->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <span data-bs-toggle="modal" data-bs-target="#mostrarModalExlusao" onclick="botaoExcluir(this, '{{ $trabalho->titulo }}', 'Trabalho')">
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

{{--
<div class="card-footer">
    {!! $trabalhos->appends(\Request::except('page'))->render() !!}
</div>
--}}

@push('modal')
{{-- Modal de confirmação de exclusão --}}
<x-modal-excluir />

{{-- Script para confirmar a exclusão --}}
@vite('resources/js/showModal.js')
@endpush

@endsection
