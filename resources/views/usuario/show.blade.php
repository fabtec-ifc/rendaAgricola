@extends('app')

@section('body')

    {{-- Mostrar detalhes do usuário --}}
    <div class="row justify-content-center">
        <div class="col-12 col-xl-6 d-flex flex-column align-items-center">
            <h2>
                Detalhes Usuário
            </h2>
            <h6>Código: {{ $usuario->id }}</h6>
            <hr class="w-100">
            <div class="row w-100 align-items-center justify-content-center my-2">
                <div class="col-6 ps-5">
                    <div>   
                        <p class="my-1">Nome: 
                            <span class="fw-bold">
                                {{ $usuario->name }}
                            </span>
                        </p>
                    </div>
                    <div>
                        <p class="my-1">Email: 
                            <span class="fw-bold">
                                {{ $usuario->email }}
                            </span>
                        </p>
                    </div>
                    <div>
                        <p class="my-1">Tipo de usuário: 
                            <span class="fw-bold">
                                {{ $usuario->tipoUsuario->descricao }}
                            </span>
                        </p>
                    </div>
                    <div>
                        <p class="my-1">Habilitado: 
                            <span class="fw-bold">
                                {{ boolval($usuario->habilitado) ? 'Sim' : 'Não' }}
                            </span>
                        </p>
                    </div>
                    <div>
                        <p class="my-1">Rg: 
                            <span class="fw-bold">
                                {{ $usuario->rg }}
                            </span>
                        </p>
                    </div>
                    <div>
                        <p class="my-1">Cpf: 
                            <span class="fw-bold">
                                {{ $usuario->cpf }}
                            </span>
                        </p>
                    </div>
                    <div>
                        <p class="my-1">Lattes: 
                            <span class="fw-bold">
                                {{ $usuario->linkDoLattes }}
                            </span>
                        </p>
                    </div>
                </div>
            </div>
            <hr class="w-100">
            <div class="d-flex gap-4 mt-3">
                <a href="{{ route('usuario.edit',$usuario->id) }}" class="btn btn-sm btn-light-orange text-orange" data-bs-toggle="tooltip" data-bs-title="Editar">
                    <i class="ri-edit-box-line text-orange"></i>
                </a>
                @if (!in_array(auth()->user()->tipoUsuario_id, [2]))
                    <form name="form_delete" action="{{ route('usuario.destroy', $usuario->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <span data-bs-toggle="modal" data-bs-target="#mostrarModalExlusao" onclick='botaoExcluir(this, "{{ $usuario->name }}", "Usuário")'>
                            <button type="button" class="btn btn-sm btn-light-red text-red" data-bs-toggle="tooltip" data-bs-title="Excluir">
                                <i class="ri-delete-bin-line text-red"></i>
                            </button>
                        </span>
                    </form>
                @endif
                <a href="{{ route('usuario.index') }}" class="btn btn-sm btn-light" data-bs-toggle="tooltip" data-bs-title="Pesquisar">
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
