<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Administrador',
                'email' => 'eds.riodosul@ifc.edu.br',
                // 'password' => bcrypt('JeaJaw7DFkw8Tes'),
                'password' => bcrypt('admin1234'),
                'politicas' => 1,
                'habilitado' => 1,
                'tipoUsuario_id' => 1,
                'cpf' => 00000000000,
                'rg' => 0000000,
                'linkDoLattes' => 'https://lattes.cnpq.br/'
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
