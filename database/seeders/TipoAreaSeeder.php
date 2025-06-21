<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TipoArea;

class TipoAreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tiposArea = [
            ["descricao" => "Própria", "areaPropria" => true],
            ["descricao" => "Arrendada de Terceiros", "areaPropria" => false],
            ["descricao" => "Em Parceria", "areaPropria" => false],
            ["descricao" => "Arrendada para Terceiros", "areaPropria" => true]
        ];

        foreach($tiposArea as $tipoArea)
            TipoArea::create($tipoArea);
    }
}
