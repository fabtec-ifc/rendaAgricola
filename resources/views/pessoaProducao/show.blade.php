@extends("app")

@section("body")

    {{-- Detalhes de Pessoa-Produção --}}
    <div class="row justify-content-center">
        <div class="col-12 col-xl-6 d-flex flex-column align-items-center">
            <h2>
                Detalhes de Pessoa na Produção
            </h2>
            <h6>Código: {{ $pessoa->id }}</h6>
            <hr class="w-100">
            <div class="row w-100 text-center align-items-center justify-content-center my-2">
                <div class="col-5">
                    <p class="my-1">Nome: <span class="fw-bold">{{ $pessoa->nome }}</span></p>
                </div>
                <div class="col-5">
                    <p class="my-1">CPF: <span class="fw-bold">@if(isset($pessoa->cpf)) {{ $pessoa->cpf }} @else Não informado @endif</span></p>
                </div>
                <div class="col-5">
                    <p class="my-1">Data de Nascimento: <span class="fw-bold">{{ date_format(date_create($pessoa->dataNascimento), "d/m/Y") }}</span></p>
                </div>
                <div class="col-5">
                    <p class="my-1">Dias de Trabalho: <span class="fw-bold">{{ $pessoa->diasTrabalho }}</span></p>
                </div>
                <div class="col-12">
                    <p class="my-1">Tipo de Mão de Obra: <span class="fw-bold">{{ $pessoa->tipoMaoDeObra->descricao }}</span></p>
                </div>
                <div class="col-12">
                    <p class="my-1">Ano Agrícola: <span class="fw-bold">{{ date_format(date_create($pessoa->anoAgricola->inicio), "d/m/Y") }} a {{ date_format(date_create($pessoa->anoAgricola->fim), "d/m/Y") }}</span></p>
                </div>
            </div>
            <hr class="w-100">
            <div class="d-flex gap-4 mt-3">
                <a href="{{ route('pessoaProducao.edit', $pessoa->id) }}" class="btn btn-sm btn-light-orange text-orange" data-bs-toggle="tooltip" data-bs-title="Editar">
                    <i class="ri-edit-box-line text-orange"></i>
                </a>
                <form name="form_delete" action="{{ route('pessoaProducao.destroy', $pessoa->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <span class="w-100" data-bs-toggle="modal" data-bs-target="#mostrarModalExclusao" onclick="botaoExcluir(this, `{{ $pessoa->nome }}`, 'Pessoa na Produção')">
                        <button type="button" class="btn btn-sm btn-light-red text-red" data-bs-toggle="tooltip" data-bs-title="Excluir">
                            <i class="ri-delete-bin-line text-red"></i>
                        </button>
                    </span>
                </form>
                <a href="{{ route('pessoaProducao.index') }}" class="btn btn-sm btn-light" data-bs-toggle="tooltip" data-bs-title="Pesquisar">
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
