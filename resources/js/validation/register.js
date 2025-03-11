$(document).ready(function () {
    $("#form").validate({
        rules: {
            name: "required",
            email: {
                required: true,
                email: true
            },
            password: {
                required: true,
                minlength: 8
            },
            password_confirmation: {
                required: true,
                minlength: 8
            },
            politicas: "required"
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