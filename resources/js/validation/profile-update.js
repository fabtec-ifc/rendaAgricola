$(document).ready(function () {
    $("#profile").validate({
        rules: {
            name: "required",
            email: true
        },
        highlight: function(element) {
            $(element).addClass('is-invalid');
            $(element).removeClass('is-valid');
        },
        unhighlight: function(element) {
            $(element).removeClass('is-invalid');
            $(element).addClass('is-valid');
        }
    })
})