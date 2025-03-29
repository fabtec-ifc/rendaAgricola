<?php

namespace App\Http\Controllers;

use App\Models\FaixaEtaria;
use Illuminate\Http\Request;

class FaixaEtariaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $faixasEtarias = FaixaEtaria::query()->sortable()->paginate(12);

        if(request()->session()->has("toast"))
            return view("faixaEtaria.index")->with("faixasEtarias", $faixasEtarias)->with(session("toast"));

        return view("faixaEtaria.index")->with("faixasEtarias", $faixasEtarias);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("faixaEtaria.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $faixaEtaria = new FaixaEtaria();

        $faixaEtaria->inicio = $request->input("inicio");
        $faixaEtaria->fim = $request->input("fim");
        $faixaEtaria->multiplicador = $request->input("multiplicador");

        try{
            $faixaEtaria->save();
        } catch(\Exception $e){
            return redirect()->route("faixaEtaria.index")->with("toast", ["type" => "warning", "message" => "Erro inesperado: ".$e->getMessage()]);
        }

        return redirect()->route("faixaEtaria.index")->with("toast", ["type" => "success", "message" => "Faixa Etária adicionada com sucesso!"]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $faixaEtaria = FaixaEtaria::find($id);

        return view("faixaEtaria.show")->with("faixaEtaria", $faixaEtaria);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $faixaEtaria = FaixaEtaria::find($id);

        return view("faixaEtaria.edit")->with("faixaEtaria", $faixaEtaria);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $faixaEtaria = FaixaEtaria::find($id);

        $faixaEtaria->inicio = $request->input("inicio");
        $faixaEtaria->fim = $request->input("fim");
        $faixaEtaria->multiplicador = $request->input("multiplicador");

        try{
            $faixaEtaria->save();
        } catch(\Exception $e){
            return redirect()->route("faixaEtaria.index")->with("toast", ["type" => "warning", "message" => "Erro inesperado: ".$e->getMessage()]);
        }

        return redirect()->route("faixaEtaria.index")->with("toast", ["type" => "success", "message" => "Faixa Etária atualizada com sucesso!"]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $faixaEtaria = FaixaEtaria::find($id);

        try{
            $faixaEtaria->delete();
        } catch(\Exception $e){
            return redirect()->route("faixaEtaria.index")->with("toast", ["type" => "warning", "message" => "Erro inesperado: ".$e->getMessage()]);
        }

        return redirect()->route("faixaEtaria.index")->with("toast", ["type" => "success", "message" => "Faixa Etária excluída com sucesso!"]);
    }
}
