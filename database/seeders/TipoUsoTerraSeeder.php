<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TipoUsoTerra;

class TipoUsoTerraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tiposUsoTerra = [
            ["descricao" => "Floresta Nativa Excedente", "areaUtil" => false],
            ["descricao" => "Floresta Plantada", "areaUtil" => true],
            ["descricao" => "Lavouras", "areaUtil" => true],
            ["descricao" => "Campo", "areaUtil" => true],
            ["descricao" => "Pastagem Plantada", "areaUtil" => true],
            ["descricao" => "Hortas e Pomares", "areaUtil" => true],
            ["descricao" => "Granjas de Suínos", "areaUtil" => true],
            ["descricao" => "Granjas de Aves", "areaUtil" => true],
            ["descricao" => "Tanques para Piscicultura", "areaUtil" => true],
            ["descricao" => "Áreas Aproveitáveis Não Utilizadas", "areaUtil" => true],
            ["descricao" => "Cultivos em Sucessão", "areaUtil" => true],
            ["descricao" => "Áreas Inaproveitáveis para Agricultura", "areaUtil" => false]
        ];

        foreach($tiposUsoTerra as $tipoUsoTerra)
            TipoUsoTerra::create($tipoUsoTerra);
    }
}
