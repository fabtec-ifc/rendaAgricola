<form action="/usuario" method="post">
    <fieldset>
        <legend>Cadastrar Usuário</legend>
        <div class="form-group">
            <div class="row justify-content-center">
                <div class="col-md-3">
                        <label for="name">Name</label>
                        <input type="text" maxlength="255" placeholder="Informe o nome" class="form-control" name="name" required="required" value="@if(isset($usuario->name)){{ $usuario->name }}@endif" id="name">
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-3">
                    <label for="email">Email</label>
                    <input type="email" placeholder="Informe o email" maxlength="55" class="form-control" name="email" required="required" value="@if(isset($usuario->email)){{ $usuario->email }}@endif" id="email">
                </div>
                <div class="col-md-3">
                    <label for="password">Senha</label>
                    <input type="password" placeholder="Informe a senha" maxlength="255" class="form-control" name="password" required="required" value="@if(isset($usuario->password)){{ $usuario->password }}@endif" id="password">
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-3">
                    <label for="token">Token</label>
                    <input type="text" placeholder="Informe o Token" maxlength="255" class="form-control" name="token" value="@if(isset($usuario->token)){{ $usuario->token }}@endif" id="token">
                </div>
                <div class="col-md-3">
                    <label for="tipoUsuario_id">Tipo Usuario</label>
                    <select name="tipoUsuario_id" id="tipoUsuario_id" class="form-control" required="required">
                        @foreach($tiposUsuario as $tipoUsuario)
                        <option value="{{ $tipoUsuario->id }}"@if(isset($usuario) && $usuario->tipoUsuario_id == $tipoUsuario->id) selected="selected" @endif>{{ $tipoUsuario->descricao }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-3">
                    <label for="token">Lattes</label>
                    <input type="text" placeholder="Informe o link do Lattes" maxlength="255" class="form-control" name="linkDoLattes" value="@if(isset($usuario->linkDoLattes)){{ $usuario->linkDoLattes }}@endif" id="linkDoLattes">
                </div>
                <div class="col-md-3">
                    <label for="token">Cpf</label>
                    <input type="text" placeholder="Informe o cpf" maxlength="11" class="form-control" name="cpf" value="@if(isset($usuario->cpf)){{ $usuario->cpf }}@endif" id="cpf">
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-3">
                    <label for="token">Rg</label>
                    <input type="text" placeholder="Informe o rg" maxlength="7" class="form-control" name="rg" value="@if(isset($usuario->rg)){{ $usuario->rg }}@endif" id="rg">
                </div>
                {{-- <div class="col-md-3">
                    <label for="token">Lattes</label>
                    <input type="text" placeholder="Informe o link do Lattes" maxlength="255" class="form-control" name="linkDoLattes" value="@if(isset($usuario->linkDoLattes)){{ $usuario->linkDoLattes }}@endif" id="linkDoLattes">
                </div> --}}
            </div>
            <div class="row my-3 justify-content-center">
                <div class="col text-end">
                    <button 
                        type="submit" 
                        class="btn btn-light-blue text-blue border-blue" 
                        name="acao" 
                        value="salvar" 
                        id="acao">
                        @if(isset($usuario->id)) Alterar @else Salvar @endif
                    </button>
                </div>
                <div class="col text-start">
                    <a href="/usuario" class="btn btn-light border-secondary">Consultar</a>
                </div>
            </div>
        </div>
    </fieldset>
</form>

@push('validation')
    @vite('resources/js/validation/usuario.js')
@endpush
