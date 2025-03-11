function confirmAlterarSituacao(event, botao, turma_id, id, matricula, nome) {
    // Previne a mudança de estado automática do switch
    event.preventDefault();

    var confirma = confirm(`Realmente deseja alterar a situação do aluno ${nome}?`);

    if (confirma) {
        // Realiza a requisição Ajax
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            url: "{{route('relatorio.alteraSituacao')}}",
            method: "POST",
            data: {
                "matricula": matricula,
                "turma_id": turma_id,
                "id": id
            },

            success: function(response) {
                var aluno = response['registro'];
                alert("Situação alterada com sucesso");

                var divCard = document.getElementById("card-" + id);
                var divCardBody = document.getElementById("card-body-" + id);
                var h6 = document.getElementById("situacao-" + id);
                var pHorario1 = document.getElementById("horario-1-"+id);
                var pHorario2 = document.getElementById("horario-2-"+id);

                if (aluno['situacao'] == "Presente") {
                    var borda = "success";
                    var background = "green";
                } else {
                    var borda = "danger";
                    var background = "red";
                }

                divCard.className = `card border-${borda} bg-light`;
                divCardBody.className = `card-body bg-light-${background} p-0`;
                h6.className = `badge bg-${borda} m-0`;

                var horarios = aluno['horarios'];
                    pHorario1.innerText = `${horarios[0] ? horarios[0] : '-'} ${horarios[1] ? horarios[1] : ''}`;
                    pHorario2.innerText = `${horarios[2] ? horarios[2] : '-'} ${horarios[3] ? horarios[3] : ''}`;


                // Atualiza o texto dentro do h6
                h6.innerText = aluno['situacao'];
            },
            error: function(response) {
                alert("Não foi possível alterar a situação");
            }
        });
    } else {
        botao.checked = !botao.checked;
    }
}
