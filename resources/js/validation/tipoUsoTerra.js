$(document).ready(function () {
    $("#form").validate({
        rules: {
            descricao: {
                required: true,
                maxlength: 255
            }
        },
        messages: {
            descricao: {
                required: "A descrição é obrigatória.",
                maxlength: "Máximo de 255 caracteres permitidos."
            }
        },
        highlight: function (element) {
            $(element)
                .addClass('is-invalid')
                .removeClass('is-valid');
        },
        unhighlight: function (element) {
            $(element)
                .removeClass('is-invalid')
                .addClass('is-valid');
        },
        errorElement: 'div',
        errorClass: 'invalid-feedback',
        errorPlacement: function (error, element) {
            if (element.parent('.input-group').length) {
                error.insertAfter(element.parent());
            } else {
                error.insertAfter(element);
            }
        }
    });
});
