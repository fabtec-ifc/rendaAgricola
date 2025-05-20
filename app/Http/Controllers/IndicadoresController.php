<?php

namespace App\Http\Controllers;

use App\Models\UnidadeProducao;
use Illuminate\Http\Request;

class IndicadoresController extends Controller
{
    public function indicadores(string $unidade_producao_id){
        $unidadeProducao = UnidadeProducao::find($unidade_producao_id);

        $anoAgricola = $unidadeProducao->anosAgricolas->last();

        // Superfície total (ST) - ha

        $areas = $anoAgricola->areas;

        $superficieTotal = 0;
        foreach($areas as $area)
            $superficieTotal += $area->quantArea;

        // Superfície Agrícola Útil (SAU) - ha



        // Mão de obra total (UTH)

        // Mão de obra contratada (UTHc?)

        // Mão de obra familiar (UTHf)

        // Superfície Agrícola Útil por Trabalhador (SAU/UTH)
    }
}
