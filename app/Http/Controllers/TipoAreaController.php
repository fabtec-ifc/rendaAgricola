<?php

namespace App\Http\Controllers;

use App\Models\TipoArea;
use Illuminate\Http\Request;

class TipoAreaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $filtro = request()->input("filtro");
        $tiposArea = TipoArea::where("descricao", "LIKE", $filtro."%")->sortable()->paginate(12);

        if(request()->session()->has("toast"))
            return view("tipoArea.index")->with("tiposArea", $tiposArea)->with("filtro", $filtro)->with(session("toast"));

        return view("tiposArea.index")->with("tiposArea", $tiposArea)->with("filtro", $filtro);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("tipoArea.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $tipoArea = new TipoArea();

        $tipoArea->descricao = $request->input("descricao");
        $tipoArea->areaPropria = $request->input("areaPropria");

        try{
            $tipoArea->save();
        } catch(\Exception $e){
            return redirect()->route("tipoArea.index")->with("toast", ["type" => "warning", "message" => "Erro inesperado: ".$e->getMessage().""]);
        }

        return redirect()->route("tipoArea.index")->with("toast", ["type" => "success", "message" => "Tipo de Área adicionado com sucesso!"]);
    }

    /**
     * Display the specified resource.
     */
    public function show(TipoArea $tipoArea)
    {
        return view("tipoArea.show")->with("tipoArea", $tipoArea);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TipoArea $tipoArea)
    {
        return view("tipoArea.edit")->with("tipoArea", $tipoArea);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TipoArea $tipoArea)
    {
        $tipoArea->descricao = $request->input("descricao");
        $tipoArea->areaPropria = $request->input("areaPropria");

        try{
            $tipoArea->save();
        } catch(\Exception $e){
            return redirect()->route("tipoArea.index")->with("toast", ["type" => "warning", "message" => "Erro inesperado: ".$e->getMessage().""]);
        }

        return redirect()->route("tipoArea.index")->with("toast", ["type" => "success", "message" => "Tipo de Área atualizado com sucesso!"]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TipoArea $tipoArea)
    {
        try{
            $tipoArea->delete();
        } catch(\Exception $e){
            return redirect()->route("tipoArea.index")->with("toast", ["type" => "warning", "message" => "Erro inesperado: ".$e->getMessage().""]);
        }

        return redirect()->route("tipoArea.index")->with("toast", ["type" => "success", "message" => "Tipo de Área excluído com sucesso!"]);
    }
}
