<?php

namespace App\Http\Controllers;

use App\Models\Trabalhador;
use App\Models\TipoMaoDeObra;
use App\Models\AnoAgricola;
use Illuminate\Http\Request;

class TrabalhadorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $filtro = request()->input("filtro");
        $trabalhador = Trabalhador::where("nome", "LIKE", $filtro."%")->sortable()->paginate(12);

        if (request()->session()->has("toast"))
            return view("trabalhador.index")->with("trabalhador", $trabalhador)->with("filtro", $filtro)->with(session("toast"));

        return view("trabalhador.index")->with("trabalhador", $trabalhador)->with("filtro", $filtro);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tiposMaoDeObra = TipoMaoDeObra::all();
        $anosAgricolas = AnoAgricola::all();

        return view("trabalhador.create", ["tiposMaoDeObra"=>$tiposMaoDeObra, "anosAgricolas" => $anosAgricolas]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $trabalhador = new Trabalhador();

        $trabalhador->nome = $request->input("nome");
        $trabalhador->cpf = $request->input("cpf");
        $trabalhador->dataNascimento = $request->input("dataNascimento");
        $trabalhador->diasTrabalho = $request->input("diasTrabalho");
        $trabalhador->tipo_mao_de_obra_id = $request->input("tipo_mao_de_obra_id");
        $trabalhador->ano_agricola_id = $request->input("ano_agricola_id");

        try {
            $trabalhador->save();
        } catch (\Exception $e) {
            return redirect()->route("trabalhador.index")->with("toast", ["type" => "warning", "message" => "Erro inesperado: " . $e->getMessage() . ""]);
        }

        return redirect()->route("trabalhador.index")->with("toast", ["type" => "success", "message" => "Trabalhador adicionado com sucesso!"]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Trabalhador $trabalhador)
    {
        return view("trabalhador.show")->with("trabalhador", $trabalhador);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Trabalhador $trabalhador)
    {
        $tiposMaoDeObra = TipoMaoDeObra::all();
        $anosAgricolas = AnoAgricola::all();

        return view("trabalhador.edit", compact("trabalhador", "tiposMaoDeObra", "anosAgricolas"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Trabalhador $trabalhador)
    {
        $trabalhador->nome = $request->input("nome");
        $trabalhador->cpf = $request->input("cpf");
        $trabalhador->dataNascimento = $request->input("dataNascimento");
        $trabalhador->diasTrabalho = $request->input("diasTrabalho");
        $trabalhador->tipo_mao_de_obra_id = $request->input("tipo_mao_de_obra_id");
        $trabalhador->ano_agricola_id = $request->input("ano_agricola_id");

        try {
            $trabalhador->save();
        } catch (\Exception $e) {
            return redirect()->route("trabalhador.index")->with("toast", [
                "type" => "warning",
                "message" => "Erro inesperado: " . $e->getMessage()
            ]);
        }

        return redirect()->route("trabalhador.index")->with("toast", [
            "type" => "success",
            "message" => "Trabalhador atualizada com sucesso!"
        ]);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Trabalhador $trabalhador)
    {
        try {
            $trabalhador->delete();
        } catch (\Exception $e) {
            return redirect()->route("trabalhador.index")->with("toast", ["type" => "warning", "message" => "Erro inesperado: " . $e->getMessage() . ""]);
        }

        return redirect()->route("trabalhador.index")->with("toast", ["type" => "success", "message" => "Trabalhador excluído com sucesso!"]);
    }
}
