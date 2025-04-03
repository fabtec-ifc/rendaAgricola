$(document).ready(function () {
    $("#form").validate({
        rules: {
            nome: "required",
            estado_id: "required",
            municipio_id: "required",
            telefone: "required",
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
