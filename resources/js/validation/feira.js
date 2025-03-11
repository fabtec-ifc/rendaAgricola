$(document).ready(function () {
    $("#form").validate({
        rules: {
            descricao: "required",
            edicao: "required",
            ano: "required",
            localDados: "required",
            credInicio: "required",
            credFim: "required",
            inscrInicio: "required",
            inscrFim: "required",
            homoParcial: "required",
            recursosInicio: "required",
            recursosFim: "required",
            expoInicio: "required",
            homoFinal: "required",
            expoFim: "required"
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