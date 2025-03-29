<?php

namespace App\Http\Controllers;

use App\Models\TipoMaoDeObra;
use Illuminate\Http\Request;

class TipoMaoDeObraController extends Controller
{
    public function index()
    {
        $filtro = request()->input("filtro");
        $tiposMaoDeObra = TipoMaoDeObra::where("descricao", "LIKE", "%".$filtro."%")->sortable()->paginate(12);

        if (request()->session()->has("toast"))
            return view("tipoMaoDeObra.index")->with("tiposmaodeobra", $tiposMaoDeObra)->with("filtro", $filtro)->with(session("toast"));

        return view ("tipoMaoDeObra.index")->with("tiposmaodeobra", $tiposMaoDeObra)->with("filtro", $filtro);

    }

    public function create()
    {
        return view("tipoMaoDeObra.create");
    }

    public function store(Request $request)
    {

        $tipoMaoDeObra = new TipoMaoDeObra();

        $tipoMaoDeObra->descricao = $request->input("descricao");

        try {
            $tipoMaoDeObra->save();
        } catch (\Exception $e) {
            return redirect()->route("tipoMaoDeObra.index")->with("toast", ["type" => "warning", "message" => "Erro inesperado: ".$e->getMessage().""]);
        }

        return redirect()->route("tipoMaoDeObra.index")->with("toast", ["type" => "warning", "message" => "Tipo de mão de obra adicionado com sucesso!"]);
    }

    public function show(TipoMaoDeObra $tipoMaoDeObra)
    {
        return view("tipoMaoDeObra.show")->with("tipoMaoDeObra", $tipoMaoDeObra);
    }

    public function edit(TipoMaoDeObra $tipoMaoDeObra)
    {
        return view("tipoMaoDeObra.edit")->with("tipoMaoDeObra", $tipoMaoDeObra);
    }

    public function update(Request $request, TipoMaoDeObra $tipoMaoDeObra)
    {
        $tipoMaoDeObra->descricao = $request->input("descricao");

        try {
            $tipoMaoDeObra->save();
        } catch (\Exception $e) {
            return redirect()->route("tipoMaoDeObra.index")->with("toast", ["type" => "warning", "message" => "Erro inesperado: ".$e->getMessage().""]);
        }

        return redirect()->route("tipoMaoDeObra.index")->with("toast", ["type" => "success", "message" => "Tipo de Mão de Obra atualizado com sucesso!"]);
    }

    public function destroy(TipoMaoDeObra $tipoMaoDeObra)
    {
        try {
            $tipoMaoDeObra->delete();
        } catch (\Except $e) {
            return redirect()->route("tipoMaoDeObra.index")->with("toast", ["type" => "warning", "message" => "Erro inesperado: ".$e->getMessage().""]);
        }
        
        return redirect()->route("tipoMaoDeObra.index")->with("toast", ["type" => "warning", "message" => "Tipo de mão de obra excluído com sucesso!"]);
    }
}
