<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TipoMaoDeObra;

class TipoMaoDeObraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tiposMaoDeObra = [
            ["descricao"=>"Familiar"],
            ["descricao"=>"Contratada"]
        ];

        foreach ($tiposMaoDeObra as $tipoMaoDeObra) {
            TipoMaoDeObra::create($tipoMaoDeObra);
        }

    }
}
