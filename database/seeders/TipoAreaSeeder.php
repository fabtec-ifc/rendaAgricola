<?php

namespace Database\Seeders;

use App\Models\TipoArea;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipoAreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tiposArea = [
            ["descricao" => "Própria", "areaPropria" => true],
            ["descricao" => "Arrendada de terceiros", "areaPropria" => false],
            // ["descricao" => "Em parceria", "areaPropria" => false (É uma área própria?)],
            ["descricao" => "Arrendada para terceiros", "areaPropria" => true]
        ];

        foreach($tiposArea as $tipoArea)
            TipoArea::create($tipoArea);
    }
}
