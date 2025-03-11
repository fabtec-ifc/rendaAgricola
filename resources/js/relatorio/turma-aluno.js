document.addEventListener('DOMContentLoaded', function() {
    const turmaSelect = document.getElementById('turma_id');
    const alunoSelect = document.getElementById('aluno_id');

    function carregarAlunos(turmaId) {
        alunoSelect.innerHTML = '<option value="">Selecione um aluno</option>';

        if (turmaId) {
            fetch(`/alunos/${turmaId}`)
                .then(response => response.json())
                .then(data => {
                    if (data.alunos) {
                        data.alunos.forEach(aluno => {
                            const option = document.createElement('option');
                            option.value = aluno.id;
                            option.textContent = aluno.nome;
                            alunoSelect.appendChild(option);
                        });
                    }
                })
                .catch(error => console.error('Erro ao carregar alunos:', error));
        }
    }

    turmaSelect.addEventListener('change', function() {
        carregarAlunos(this.value);
    });

    const turmaSelecionada = turmaSelect.value;
    if (turmaSelecionada) {
        carregarAlunos(turmaSelecionada);
    }
});

document.addEventListener('DOMContentLoaded', function() {

    const datePairs = [
        { start: 'data_inicio', end: 'data_fim' }
    ];

    function validateDatePair(startId, endId) {
        const startInput = document.getElementById(startId);
        const endInput = document.getElementById(endId);

        const startDate = new Date(startInput.value);
        const endDate = new Date(endInput.value);

        if (endDate < startDate) {
            // const toastLiveExample = document.getElementById('liveToast')
            // const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastLiveExample);
            // toastBootstrap.show();
            alert('A data de fim deve ser maior ou igual à data de início.');
            endInput.value = '';
        }
    }

    datePairs.forEach(pair => {
        const startInput = document.getElementById(pair.start);
        const endInput = document.getElementById(pair.end);

        startInput.addEventListener('blur', () => validateDatePair(pair.start, pair.end));

        endInput.addEventListener('blur', () => validateDatePair(pair.start, pair.end));
    });
});

document.addEventListener('DOMContentLoaded', function () {
    const opcaoSelect = document.getElementById('opcao');
    const alunoSelect = document.getElementById('aluno_id');

    function toggleAlunoSelect() {
        if (opcaoSelect.value === 'aluno') {
            alunoSelect.disabled = false;
        } else {
            alunoSelect.disabled = true;
            alunoSelect.value = '';
        }
    }

    toggleAlunoSelect();

    opcaoSelect.addEventListener('change', toggleAlunoSelect);
});
