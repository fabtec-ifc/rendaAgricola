@extends("app")

@section("body")

    {{-- Detalhes da Unidade de Produção --}}
    <div class="row justify-content-center">
        <div class="col-12 col-xl-6 d-flex flex-column align-items-center">
            <h2>
                Detalhes da Unidade de Produção
            </h2>
            <h6>Código: {{ $unidadeProducao->id }}</h6>
            <hr class="w-100">
            <div class="row w-100 text-center align-items-center justify-content-center my-2">
                <div class="col-12">
                    <p class="my-1">Nome: <span class="fw-bold">{{ $unidadeProducao->nome }}</span></p>
                </div>
                <div class="col-12">
                    <p class="my-1">Endereço: <span class="fw-bold">{{ $unidadeProducao->endereco }}</span></p>
                </div>
                <div class="col-12">
                    <p class="my-1">Município: <span class="fw-bold">{{ $unidadeProducao->municipio->descricao }} ({{ $unidadeProducao->municipio->estado->descricao }})</span></p>
                </div>
                <div class="col-6">
                    <p class="my-1">Telefone <span class="fw-bold">{{ $unidadeProducao->telefone }}</span></p>
                </div>
            </div>
            <hr class="w-100">
            <div class="d-flex gap-4 mt-3">
                <a href="{{ route('unidadeProducao.edit',$unidadeProducao->id) }}" class="btn btn-sm btn-light-orange text-orange" data-bs-toggle="tooltip" data-bs-title="Editar">
                    <i class="ri-edit-box-line text-orange"></i>
                </a>
                <form name="form_delete" action="{{ route('unidadeProducao.destroy', $unidadeProducao->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <span class="w-100" data-bs-toggle="modal" data-bs-target="#mostrarModalExclusao" onclick="botaoExcluir(this, `{{ $unidadeProducao->nome }}`, 'Unidade de Produção')">
                        <button type="button" class="btn btn-sm btn-light-red text-red" data-bs-toggle="tooltip" data-bs-title="Excluir">
                            <i class="ri-delete-bin-line text-red"></i>
                        </button>
                    </span>
                </form>
                <a href="{{ route('unidadeProducao.index') }}" class="btn btn-sm btn-light" data-bs-toggle="tooltip" data-bs-title="Pesquisar">
                    <i class="ri-search-line"></i>
                </a>
            </div>
        </div>
    </div>

    @push('modal')
        {{-- Modal de confirmação de exclusão --}}
        <x-modal-excluir />

        {{-- Script para confirmar a exclusão --}}
        @vite('resources/js/showModal.js')
    @endpush

@endsection
