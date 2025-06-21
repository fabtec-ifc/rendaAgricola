<?php

namespace App\Http\Controllers;

use App\Models\AnoAgricola;
use App\Models\FaixaEtaria;
use App\Models\UnidadeProducao;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class AnoAgricolaController extends Controller
{
    public function indicadores(string $ano_agricola_id){
        $anoAgricola = AnoAgricola::find($ano_agricola_id);

        $areas = $anoAgricola->areas;

        // Superfície total (ST) em ha; e Superfície Agrícola Útil (SAU) em ha

        $st = 0;
        $sau = 0;

        foreach($areas as $area){
            $st += $area->quantArea;

            if($area->tipoUsoTerra->areaUtil == 1)
                $sau += $area->quantArea;
        }

        // Mão de obra contratada (UTH); e Mão de obra familiar (UTHf)

        $trabalhadores = $anoAgricola->trabalhadores;

        $uthFamiliar = 0;
        $uthContratada = 0;

        foreach($trabalhadores as $trabalhador){
            $idade = Carbon::parse($trabalhador->dataNascimento)->age;

            $faixasEtarias = FaixaEtaria::all();
            foreach($faixasEtarias as $faixa){
                if($faixa->inicio >= $idade && $idade <= $faixa->fim){
                    $multiplicador = $faixa->multiplicador;
                    // break;
                }
            }

            $uthPessoa = ($trabalhador->diasTrabalho / 300) * $multiplicador;

            if($trabalhador->tipo_mao_de_obra_id == 1)
                $uthFamiliar += $uthPessoa;
            else
                $uthContratada += $uthPessoa;
        }

        // Mão de obra total (UTH)

        $uthTotal = $uthFamiliar + $uthContratada;

        // Superfície Agrícola Útil por Mão de Obra (SAU/UTH)

        $sauPorUTH = $sau / $uthTotal;

        return view("anoAgricola.indicadores")->with("anoAgricola", $anoAgricola)->with("st", $st)->with("sau", $sau)
                                            ->with("uthFamiliar", $uthFamiliar)->with("uthContratada", $uthContratada)
                                            ->with("uthTotal", $uthTotal)->with("sauPorUTH", $sauPorUTH);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $filtro = request()->input("filtro");
        $anosAgricolas = AnoAgricola::where("inicio", "LIKE", $filtro."%")->sortable()->paginate(12);

        if(request()->session()->has("toast"))
            return view("anoAgricola.index")->with("anosAgricolas", $anosAgricolas)->with("filtro", $filtro)->with(session("toast"));

        return view("anoAgricola.index")->with("anosAgricolas", $anosAgricolas)->with("filtro", $filtro);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $unidadesProducao = UnidadeProducao::all();

        return view("anoAgricola.create")->with("unidadesProducao", $unidadesProducao);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $anoAgricola = new AnoAgricola();

        $anoAgricola->inicio = $request->input("inicio");
        $anoAgricola->fim = $request->input('fim');
        $anoAgricola->ativo = $request->input("ativo") ? true : false;
        $anoAgricola->unidade_producao_id = $request->input("unidade_producao_id");

        try{
            $anoAgricola->save();
        } catch(\Exception $e){
            return redirect()->route("anoAgricola.index")->with("toast", ["type" => "warning", "message" => "Erro inesperado: ".$e->getMessage()]);
        }

        return redirect()->route("anoAgricola.index")->with("toast", ["type" => "success", "message" => "Ano agrícola adicionado com sucesso!"]);
    }

    /**
     * Display the specified resource.
     */
    public function show(AnoAgricola $anoAgricola)
    {
        return view("anoAgricola.show")->with("anoAgricola", $anoAgricola);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AnoAgricola $anoAgricola)
    {
        $unidadesProducao = UnidadeProducao::all();

        return view("anoAgricola.edit")
        ->with("anoAgricola", $anoAgricola)
        ->with("unidadesProducao", $unidadesProducao);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AnoAgricola $anoAgricola)
    {
        $anoAgricola->inicio = $request->input("inicio");
        $anoAgricola->fim = $request->input('fim');
        $anoAgricola->ativo = $request->input("ativo") ? true : false;
        $anoAgricola->unidade_producao_id = $request->input("unidade_producao_id");

        try{
            $anoAgricola->save();
        } catch(\Exception $e){
            return redirect()->route("anoAgricola.index")->with("toast", ["type" => "warning", "message" => "Erro inesperado: ".$e->getMessage()]);
        }

        return redirect()->route("anoAgricola.index")->with("toast", ["type" => "success", "message" => "Ano agrícola atualizado com sucesso!"]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AnoAgricola $anoAgricola)
    {
        try{
            $anoAgricola->delete();
        } catch(\Exception $e){
            return redirect()->route("anoAgricola.index")->with("toast", ["type" => "warning", "message" => "Erro inesperado: ".$e->getMessage()]);
        }

        return redirect()->route("anoAgricola.index")->with("toast", ["type" => "success", "message" => "Ano agrícola excluído com sucesso!"]);
    }
}
