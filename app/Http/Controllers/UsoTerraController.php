<?php

namespace App\Http\Controllers;

use App\Models\UsoTerra;
use App\Models\TipoUsoTerra;
use Illuminate\Http\Request;

class UsoTerraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $filtro = request()->input("filtro");
        $usoTerras = UsoTerra::where("quantArea", "LIKE", $filtro . "%")->sortable()->paginate(12);

        if (request()->session()->has("toast")) {
            return view("usoTerra.index")
                ->with("usoTerras", $usoTerras)
                ->with("filtro", $filtro)
                ->with(session("toast"));
        }

        return view("usoTerra.index")->with("usoTerras", $usoTerras)->with("filtro", $filtro);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tiposUso = TipoUsoTerra::all();
        return view("usoTerra.create", ["tiposUso" => $tiposUso]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $usoTerra = new UsoTerra();

        $usoTerra->quantArea = $request->input("quantArea");
        $usoTerra->areaInaproveitavel = $request->input("areaInaproveitavel");
        $usoTerra->tipo_uso_terra_id = $request->input("tipo_uso_terra_id");
        //$usoTerra->ano_agricola_id = $request->input("ano_agricola_id");

        try {
            $usoTerra->save();
        } catch (\Exception $e) {
            return redirect()->route("usoTerra.index")
                ->with("toast", ["type" => "warning", "message" => "Erro inesperado: " . $e->getMessage()]);
        }

        return redirect()->route("usoTerra.index")
            ->with("toast", ["type" => "success", "message" => "Uso de terra adicionado com sucesso!"]);
    }

    /**
     * Display the specified resource.
     */
    public function show(UsoTerra $usoTerra)
    {
        return view("usoTerra.show")->with("usoTerra", $usoTerra);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UsoTerra $usoTerra)
    {
        $tiposUso = TipoUsoTerra::all();
        return view("usoTerra.edit")
            ->with("usoTerra", $usoTerra)
            ->with("tiposUso", $tiposUso);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, UsoTerra $usoTerra)
    {
        $usoTerra->quantArea = $request->input("quantArea");
        $usoTerra->areaInaproveitavel = $request->input("areaInaproveitavel");
        $usoTerra->tipo_uso_terra_id = $request->input("tipo_uso_terra_id");
        //$usoTerra->ano_agricola_id = $request->input("ano_agricola_id");

        try {
            $usoTerra->save();
        } catch (\Exception $e) {
            return redirect()->route("usoTerra.index")
                ->with("toast", ["type" => "warning", "message" => "Erro inesperado: " . $e->getMessage()]);
        }

        return redirect()->route("usoTerra.index")
            ->with("toast", ["type" => "success", "message" => "Uso de terra atualizado com sucesso!"]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UsoTerra $usoTerra)
    {
        try {
            $usoTerra->delete();
        } catch (\Exception $e) {
            return redirect()->route("usoTerra.index")
                ->with("toast", ["type" => "warning", "message" => "Erro inesperado: " . $e->getMessage()]);
        }

        return redirect()->route("usoTerra.index")
            ->with("toast", ["type" => "success", "message" => "Uso de terra excluído com sucesso!"]);
    }
}
