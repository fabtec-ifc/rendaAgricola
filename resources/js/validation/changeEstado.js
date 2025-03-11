window.changeEstado = function (select, rota) {
    var estado_id = select.value;
    var token = $('meta[name="csrf-token"]').attr('content');
    $.ajax({
        url: rota,
        method: 'post',
        dataType: 'html',
        data: {
            _token: token,
            estado_id: estado_id
        },
        success: function (data) {
            var municipios = JSON.parse(data);
            var municipio_id = $('#municipio_id');
            var municipioSelect = document.getElementById("municipio_id");
            municipio_id.empty();
            $(municipios).each(function () {
                var option = document.createElement("option");
                option.value = this.id;
                option.text = this.descricao;
                municipioSelect.appendChild(option);
            })
        }
    })
}