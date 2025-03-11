document.addEventListener('DOMContentLoaded', function() {
    var buscaInput = document.getElementById('buscaResp');
    var datalist = document.getElementById('responsavel-list');

    buscaInput.addEventListener('input', function(event) {
        var input = event.target;
        var option = datalist.querySelector('option[value="' + input.value + '"]');
        if (option) {
            var email = option.getAttribute('data-email');
            var nome = option.getAttribute('data-nome');
            var id = option.getAttribute('data-id');
            var obs = option.getAttribute('data-obs');
            var telefone = option.getAttribute('data-telefone');
            document.getElementById('emailResp').value = email;
            document.getElementById('nomeResp').value = nome;
            document.getElementById('idResp').value = id;
            document.getElementById('obsResp').value = obs;
            document.getElementById('telefoneResp').value = telefone;
        }
    });

    buscaInput.addEventListener('blur', function(event) {
        var input = event.target;
        var options = Array.from(datalist.options).map(option => option.value);
        if (!options.includes(input.value)) {
            document.getElementById('emailResp').value = '';
            document.getElementById('nomeResp').value = '';
            document.getElementById('idResp').value = '';
            document.getElementById('obsResp').value = '';
            document.getElementById('telefoneResp').value = '';
            input.value = '';
        }
    });
});
