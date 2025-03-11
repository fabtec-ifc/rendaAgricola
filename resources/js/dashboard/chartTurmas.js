window.grafico = function (ctx, alunos, display) {
    var data = {
        labels: [
            'Presentes',
            'Ausentes',
        ],
        datasets: [{
            label: 'Quantidade',
            data: [alunos.presentes, alunos.ausentes],
            backgroundColor: [
                'rgb(60, 216, 86)',
                'rgb(255, 70, 100)'
            ],
            hoverOffset: 4
        }]
    };

    new Chart(ctx, {
        type: 'pie',
        data: data,
        options: {
            aspectRatio: 1.7, 
            plugins: {
                legend: {
                    display: display,
                }
            }
        }
    });
}

window.montarGraficos = function (turmas) {
    turmas.forEach(turma => {
        $.ajax({
            url: `alunosTurma/${turma.id}`,
            method: 'get',
            data: {
                id: turma.id
            },
            success: function (data) {
                let id = data.id;
                let graficoTurma = document.getElementById(`graficoTurma-${id}`);
                let presentesT = $(`#presentesT-${id}`);
                let ausentesT = $(`#faltantesT-${id}`);
                let presentesP = $(`#presentesP-${id}`);
                let ausentesP = $(`#faltantesP-${id}`);
                presentesT.text(`${data.presentesT}`);
                ausentesT.text(`${data.ausentesT}`);
                presentesP.text(`${data.presentesP}%`);
                ausentesP.text(`${data.ausentesP}%`);
                grafico(graficoTurma, {presentes: data.presentesT, ausentes: data.ausentesT}, false);
            }
        })
    });
}
