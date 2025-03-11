$(document).ready(function () {
    $("#form").validate({
        rules: {
            name: "required",
            email: "required",
            senha: "required",
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