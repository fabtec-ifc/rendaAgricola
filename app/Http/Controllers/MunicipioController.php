<?php

namespace App\Http\Controllers;

use App\Models\Municipio;
use App\Models\Estado;
use Illuminate\Http\Request;

class MunicipioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $filtro = request()->input("filtro");
        $municipios = Municipio::where("descricao", "LIKE", $filtro."%")->sortable()->paginate(12);

        if(request()->session()->has("toast"))
            return view("municipio.index")->with("municipios", $municipios)->with("filtro", $filtro)->with(session("toast"));

        return view("municipio.index")->with("municipios", $municipios)->with("filtro", $filtro);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $estados = Estado::all();

        return view("municipio.create")->with("estados", $estados);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $municipio = new Municipio();

        $municipio->descricao = $request->input("descricao");
        $municipio->estado_id = $request->input("estado_id");

        try{
            $municipio->save();
        } catch(\Exception $e){
            return redirect()->route("municipio.index")->with("toast", ["type" => "warning", "message" => "Erro inesperado: ".$e->getMessage()]);
        }

        return redirect()->route("municipio.index")->with("toast", ["type" => "success", "message" => "Município adicionado com sucesso!"]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Municipio $municipio)
    {
        return view("municipio.show")->with("municipio", $municipio);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Municipio $municipio)
    {
        $estados = Estado::all();

        return view("municipio.edit")->with("municipio", $municipio)->with("estados", $estados);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Municipio $municipio)
    {
        $municipio->descricao = $request->input("descricao");
        $municipio->estado_id = $request->input("estado_id");

        try{
            $municipio->save();
        } catch(\Exception $e){
            return redirect()->route("municipio.index")->with("toast", ["type" => "warning", "message" => "Erro inesperado: ".$e->getMessage()]);
        }

        return redirect()->route("municipio.index")->with("toast", ["type" => "success", "message" => "Município atualizado com sucesso!"]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Municipio $municipio)
    {
        try{
            $municipio->delete();
        } catch(\Exception $e){
            return redirect()->route("municipio.index")->with("toast", ["type" => "warning", "message" => "Erro inesperado: ".$e->getMessage()]);
        }

        return redirect()->route("municipio.index")->with("toast", ["type" => "success", "message" => "Município excluído com sucesso!"]);
    }
}
