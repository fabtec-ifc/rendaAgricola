$(document).ready(function () {
    $("#form").validate({
        rules: {
            quantArea: "required",
            areaInaproveitavel: "required",
            tipo_uso_terra_id: "required",
            ano_agricola_id: "required"
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
