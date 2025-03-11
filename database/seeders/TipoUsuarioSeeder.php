<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TipoUsuario;

class TipoUsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tipo_usuarios = [
            [   
                'descricao' => 'Administrador'
            ]
        ];

            foreach ($tipo_usuarios as $tipo_usuario) {
                TipoUsuario::create($tipo_usuario);
            }
    }
}
