<fieldset>
    <legend>Adicionar Tags</legend>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="form-group">
                <label for="descrTag">Escolha a Tag</label>
                <input 
                    type="text" 
                    list="tag-list" 
                    placeholder="Digite uma nova tag ou escolha uma existente"
                    class="form-control" 
                    name="descrTag"
                    maxlength="45" 
                    required
                    id="descrTag">
                <datalist id="tag-list">
                    @if (isset($tags))
                        @foreach($tags as $tag)
                            <option value="{{ $tag->descricao }}" data-id="{{ $tag->id }}"></option>
                        @endforeach
                    @endif
                </datalist>   
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <input type="hidden" name="trabalho_id" value="{{ $trabalho->id }}">
            <input type="hidden" name="idTag" id="idTag" value="{{ $tag->id ?? '' }}">
        </div>
    </div>
    <br>
    <div class="row justify-content-center">
        <div class="col-md-6 text-center">
            <div class="form-group">
                <button type="submit" class="btn btn-light-blue text-blue border-blue" name="acao" value="salvar" id="acaoTag">
                    Salvar Tag
                </button>
            </div>
        </div>
    </div>
</fieldset>

<script>
    document.getElementById('descrTag').addEventListener('input', function() {
        var input = this;
        var datalist = document.getElementById('tag-list');
        var selectedOption = [...datalist.options].find(option => option.value === input.value);
        
        if (selectedOption) {
            document.getElementById('idTag').value = selectedOption.getAttribute('data-id');
        } else {
            document.getElementById('idTag').value = '';
        }
    });
</script>