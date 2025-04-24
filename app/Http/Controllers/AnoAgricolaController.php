<?php

namespace App\Http\Controllers;

use App\Models\AnoAgricola;
use App\Models\UnidadeProducao;
use Illuminate\Http\Request;

class AnoAgricolaController extends Controller
{
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
        return view("anoAgricola.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $anoAgricola = new AnoAgricola();

        $anoAgricola->inicio = $request->input("inicio");
        $anoAgricola->fim = $request->input('fim');
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
