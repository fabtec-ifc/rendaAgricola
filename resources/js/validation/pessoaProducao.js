$(document).ready(function () {
    $("#form").validate({
        rules: {
            nome: "required",
            dataNascimento: "required",
            diasTrabalho: "required",
            tipo_mao_de_obra_id: "required",
            ano_agricola_id: "required"
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
