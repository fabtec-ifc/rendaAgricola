$(document).ready(function () {
    $("#form").validate({
        rules: {
            descricao: "required",
            sigla: {
                required: true,
                maxlength: 2
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