$(document).ready(function () {
    $("#form").validate({
        rules: {
            inicio: "required",
            fim: "required",
            unidade_producao_id: "required"
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
