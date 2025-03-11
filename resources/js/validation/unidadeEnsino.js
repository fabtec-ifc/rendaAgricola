$(document).ready(function () {
    $("#form").validate({
        rules: {
            nome: "required",
            email: "required",
            telefone: "required",
            totalTrabalhos: "required",
            redeEnsino_id: "required",
            tipoUnidade_id: "required",
            estado_id: "required",
            municipio_id: "required"
        },
        highlight: function(element) {
            $(element).addClass('is-invalid');
            $(element).removeClass('is-valid');
        },
        unhighlight: function(element) {
            $(element).removeClass('is-invalid');
            $(element).addClass('is-valid');
        }
    });
})