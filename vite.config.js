import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
                'resources/js/confirmAlterarSituacao.js',
                'resources/js/showToast.js',
                'resources/js/showModal.js',
                'resources/js/validation/estado.js',
                'resources/js/validation/feira.js',
                'resources/js/validation/login.js',
                'resources/js/validation/municipio.js',
                'resources/js/validation/profile-delete.js',
                'resources/js/validation/profile-password-update.js',
                'resources/js/validation/profile-update.js',
                'resources/js/validation/redeEnsino.js',
                'resources/js/validation/register.js',
                'resources/js/validation/tipoUnidade.js',
                'resources/js/validation/tipoUsuario.js',
                'resources/js/validation/unidadeEnsino.js',
                'resources/js/validation/usuario.js',
                'resources/js/validation/changeEstado.js',
                'resources/js/trabalho/addResponsavel.js',
                'resources/js/relatorio/turma-aluno.js',
                'resources/js/dashboard/chartTurmas.js'
            ],
            refresh: true,
        }),
    ],

});
