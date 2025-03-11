window.botaoExcluir = function(botao, descricao, pagina) {
    var form = botao.parentNode;

    document.getElementById("campoTextoModalExclusao").innerHTML = `${pagina} ${descricao.bold()} selecionado.`;
    
    document.getElementById("botaoExcluirConfirmar").addEventListener("click", function () {
        form.submit();
    });
}