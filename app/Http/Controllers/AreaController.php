<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\TipoArea;
use App\Models\AnoAgricola;
use App\Models\TipoUsoTerra;
use Illuminate\Http\Request;

class AreaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $filtro = request()->input("filtro");
        $areas = Area::where("quantArea", "LIKE", $filtro."%")->sortable()->paginate(12);

        if(request()->session()->has("toast"))
            return view("area.index")->with("areas", $areas)->with("filtro", $filtro)->with(session("toast"));

        return view("area.index")->with("areas", $areas)->with("filtro", $filtro);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tiposArea = TipoArea::all();
        $anosAgricolas = AnoAgricola::all();
        $tiposUsoTerra = TipoUsoTerra::all();

        return view("area.create", ["tiposArea"=>$tiposArea, "anosAgricolas"=>$anosAgricolas, "tiposUsoTerra"=>$tiposUsoTerra]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $area = new Area();

        $area->quantArea = $request->input("quantArea");
        $area->descricao = $request->input("descricao");
        $area->valorHectare = $request->input("valorHectare");
        $area->tipo_area_id = $request->input("tipo_area_id");
        $area->ano_agricola_id = $request->input("ano_agricola_id");
        $area->tipo_uso_terra_id = $request->input("tipo_uso_terra_id");

        try{
            $area->save();
        } catch(\Exception $e){
            return redirect()->route("area.index")->with("toast", ["type" => "warning", "message" => "Erro inesperado: ".$e->getMessage().""]);
        }

        return redirect()->route("area.index")->with("toast", ["type" => "success", "message" => "Área adicionada com sucesso!"]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Area $area)
    {
        return view("area.show")->with("area", $area);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Area $area)
    {
        $tiposArea = TipoArea::all();
        $anosAgricolas = AnoAgricola::all();
        $tiposUsoTerra = TipoUsoTerra::all();

        return view("area.edit")->with("area", $area)->with("tiposArea", $tiposArea)->with("anosAgricolas", $anosAgricolas)->with("tiposUsoTerra", $tiposUsoTerra);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Area $area)
    {
        $area->quantArea = $request->input("quantArea");
        $area->descricao = $request->input("descricao");
        $area->valorHectare = $request->input("valorHectare");
        $area->tipo_area_id = $request->input("tipo_area_id");
        $area->ano_agricola_id = $request->input("ano_agricola_id");
        $area->tipo_uso_terra_id = $request->input("tipo_uso_terra_id");

        try{
            $area->save();
        } catch(\Exception $e){
            return redirect()->route("area.index")->with("toast", ["type" => "warning", "message" => "Erro inesperado: ".$e->getMessage().""]);
        }

        return redirect()->route("area.index")->with("toast", ["type" => "success", "message" => "Área atualizada com sucesso!"]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Area $area)
    {
        try{
            $area->delete();
        } catch(\Exception $e){
            return redirect()->route("area.index")->with("toast", ["type" => "warning", "message" => "Erro inesperado: ".$e->getMessage().""]);
        }

        return redirect()->route("area.index")->with("toast", ["type" => "success", "message" => "Área excluída com sucesso!"]);
    }
}
