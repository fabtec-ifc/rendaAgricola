$(document).ready(function () {
    $("#form").validate({
        rules: {
            descricao: "required",
            estado_id: {
                required: true,
            }
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