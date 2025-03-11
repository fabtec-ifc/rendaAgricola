$(document).ready(function () {
    $("#profile_delete").validate({
        rules: {
            password: {
                required: true,
                minlength: 8
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