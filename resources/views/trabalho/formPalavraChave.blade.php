<fieldset>
    <legend>Adicionar palavra chave</legend>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="form-group">
                <label for="descrPchave">Escolha a Palavra Chave</label>
                <input 
                    type="text" 
                    list="pchave-list" 
                    placeholder="Digite uma nova palavra chave ou escolha uma existente"
                    class="form-control" 
                    name="descrPchave"
                    maxlength="45" 
                    required
                    id="descrPchave">
                <datalist id="pchave-list">
                    @if (isset($palavraChaves))
                        @foreach($palavraChaves as $pchave)
                            <option value="{{ $pchave->descricao }}" data-id="{{ $pchave->id }}"></option>
                        @endforeach
                    @endif
                </datalist>   
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <input type="hidden" name="trabalho_id" value="{{ $trabalho->id }}">
            <input type="hidden" name="pchaveId" id="pchaveId" value="{{ $pchave->id ?? '' }}">
        </div>
    </div>
    <br>
    <div class="row justify-content-center">
        <div class="col-md-6 text-center">
            <div class="form-group">
                <button type="submit" class="btn btn-light-blue text-blue border-blue" name="acao" value="salvar" id="acaoPchave">
                    Salvar Palavra Chave
                </button>
            </div>
        </div>
    </div>
</fieldset>

<script>
    document.getElementById('descrPchave').addEventListener('input', function() {
        var input = this;
        var datalist = document.getElementById('pchave-list');
        var selectedOption = [...datalist.options].find(option => option.value === input.value);
        
        if (selectedOption) {
            document.getElementById('pchaveId').value = selectedOption.getAttribute('data-id');
        } else {
            document.getElementById('pchaveId').value = '';
        }
    });
</script>