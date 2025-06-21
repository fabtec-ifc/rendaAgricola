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
                'password' => bcrypt('admin1234'),
                'tipo_usuario_id' => '1'
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
