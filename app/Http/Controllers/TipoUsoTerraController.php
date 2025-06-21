<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipoUsoTerra;

class TipoUsoTerraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $filtro = request()->input("filtro");
        $tipoUsoTerra = TipoUsoTerra::where("descricao", "LIKE", $filtro."%")->sortable()->paginate(12);

        if(request()->session()->has("toast"))
            return view("tipoUsoTerra.index")->with("tipoUsoTerras", $tipoUsoTerra)->with("filtro", $filtro)->with(session("toast"));
        return view("tipoUsoTerra.index")->with("tipoUsoTerras", $tipoUsoTerra)->with("filtro", $filtro);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("tipoUsoTerra.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $tipoUsoTerra = new TipoUsoTerra();

        $tipoUsoTerra->descricao = $request->input("descricao");
        $tipoUsoTerra->areaUtil = $request->input("areaUtil");

        try{
            $tipoUsoTerra->save();
        } catch(\Exception $e){
            return redirect()->route("tipoUsoTerra.index")->with("toast", ["type" => "warning", "message" => "Erro inesperado (".$e->getMessage().")"]);
        }

        return redirect()->route("tipoUsoTerra.index")->with("toast", ["type" => "success", "message" => "Tipo de Uso da Terra adicionado com sucesso!"]);
    }

    /**
     * Display the specified resource.
     */
    public function show(TipoUsoTerra $tipoUsoTerra)
    {
        return view("tipoUsoTerra.show")->with("tipoUsoTerra", $tipoUsoTerra);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TipoUsoTerra $tipoUsoTerra)
    {
        return view("tipoUsoTerra.edit")->with("tipoUsoTerra", $tipoUsoTerra);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TipoUsoTerra $tipoUsoTerra)
    {
        $tipoUsoTerra->descricao = $request->input("descricao");
        $tipoUsoTerra->areaUtil = $request->input("areaUtil");


        try{
            $tipoUsoTerra->save();
        } catch(\Exception $e){
            return redirect()->route("tipoUsoTerra.index")->with("toast", ["type" => "warning", "message" => "Erro inesperado: ".$e->getMessage().""]);
        }

        return redirect()->route("tipoUsoTerra.index")->with("toast", ["type" => "success", "message" => "Tipo de Uso da Terra atualizado com sucesso!"]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TipoUsoTerra $tipoUsoTerra)
    {
        try{
            $tipoUsoTerra->delete();
        } catch(\Exception $e){
            return redirect()->route("tipoUsoTerra.index")->with("toast", ["type" => "warning", "message" => "Erro inesperado: ".$e->getMessage().""]);
        }

        return redirect()->route("tipoUsoTerra.index")->with("toast", ["type" => "success", "message" => "Tipo de Uso da Terra excluído com sucesso!"]);
    }
}
