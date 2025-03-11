<section>
    <header class="d-flex flex-column align-items-center">
        <h2>
            {{ __('Deletar Conta') }}
        </h2>

        <p class="mt-1 text-center">
            {!! __('
                Depois que sua conta for excluída, todos os seus recursos e dados serão excluídos permanentemente.<br> Antes de excluir sua conta, baixe todos os dados ou informações que deseja Manter.') !!}
        </p>
    </header>

    <div class="row justify-content-center">
        <div class="w-auto">
            <button type="button" class="btn btn-light-red text-red border-red" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Deletar Conta
            </button>
        </div>
    </div>


    <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
    
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form id="profile_delete" method="post" action="{{ route('profile.destroy') }}" class="p-6">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        @csrf
                        @method('delete')
                        <fieldset>

                            {{-- Nova Senha --}}
                            <div class="mt-2">
                                <label for="password">Confirmar exclusão</label>
                                <input
                                    placeholder="Informe sua senha"
                                    type="text"
                                    id="password"
                                    name="password"
                                    class="form-control"
                                    required
                                    autocomplete="new-password"
                                >
                            </div>

                        </fieldset>
                    </div>
                    <div class="modal-footer">
                        {{-- Fechar --}}
                        <button type="button" class="btn btn-light border-secondary" data-bs-dismiss="modal">Fechar</button>

                        {{-- Confirmar Exclusão --}}
                        <button type="submit" class="btn btn-light-red text-red border-red">Confirmar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</section>
