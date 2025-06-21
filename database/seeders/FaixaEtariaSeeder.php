<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\FaixaEtaria;

class FaixaEtariaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faixasEtarias = [
            ["inicio" => 0, "fim" => 13, "multiplicador" => 0.5],
            ["inicio" => 14, "fim" => 17, "multiplicador" => 0.75],
            ["inicio" => 18, "fim" => 59, "multiplicador" => 1],
            ["inicio" => 60, "fim" => 110, "multiplicador" => 0.75]
        ];

        foreach($faixasEtarias as $faixaEtaria)
            FaixaEtaria::create($faixaEtaria);
    }
}
