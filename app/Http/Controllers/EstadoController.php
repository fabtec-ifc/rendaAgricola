<?php

namespace App\Http\Controllers;

use App\Models\Estado;
use Illuminate\Http\Request;

class EstadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $filtro = request()->input("filtro");
        $estados = Estado::where("descricao", "LIKE", $filtro."%")->sortable()->paginate(12);

        if(request()->session()->has("toast"))
            return view("estado.index")->with("estados", $estados)->with("filtro", $filtro)->with(session("toast"));

        return view("estado.index")->with("estados", $estados)->with("filtro", $filtro);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("estado.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $estado = new Estado();

        $estado->descricao = $request->input("descricao");
        $estado->sigla = $request->input("sigla");

        try{
            $estado->save();
        } catch(\Exception $e){
            return redirect()->route("estado.index")->with("toast", ["type" => "warning", "message" => "Erro inesperado: ".$e->getMessage().""]);
        }

        return redirect()->route("estado.index")->with("toast", ["type" => "success", "message" => "Estado adicionado com sucesso!"]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Estado $estado)
    {
        return view("estado.show")->with("estado", $estado);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Estado $estado)
    {
        return view("estado.edit")->with("estado", $estado);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Estado $estado)
    {
        $estado->descricao = $request->input("descricao");
        $estado->sigla = $request->input("sigla");

        try{
            $estado->save();
        } catch(\Exception $e){
            return redirect()->route("estado.index")->with("toast", ["type" => "warning", "message" => "Erro inesperado: ".$e->getMessage().""]);
        }

        return redirect()->route("estado.index")->with("toast", ["type" => "success", "message" => "Estado atualizado com sucesso!"]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Estado $estado)
    {
        try{
            $estado->delete();
        } catch(\Exception $e){
            return redirect()->route("estado.index")->with("toast", ["type" => "warning", "message" => "Erro inesperado: ".$e->getMessage().""]);
        }

        return redirect()->route("estado.index")->with("toast", ["type" => "success", "message" => "Estado excluído com sucesso!"]);
    }
}
