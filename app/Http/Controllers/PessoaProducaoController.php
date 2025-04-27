<?php

namespace App\Http\Controllers;

use App\Models\PessoaProducao;
use App\Models\TipoMaoDeObra;
use App\Models\AnoAgricola;
use Illuminate\Http\Request;

class PessoaProducaoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $filtro = request()->input("filtro");
        $pessoasProducao = PessoaProducao::where("nome", "LIKE", $filtro."%")->sortable()->paginate(12);

        if (request()->session()->has("toast"))
            return view("pessoaProducao.index")->with("pessoasProducao", $pessoasProducao)->with("filtro", $filtro)->with(session("toast"));

        return view("pessoaProducao.index")->with("pessoasProducao", $pessoasProducao)->with("filtro", $filtro);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tiposMaoDeObra = TipoMaoDeObra::all();
        $anosAgricolas = AnoAgricola::all();

        return view("pessoaProducao.create", ["tiposMaoDeObra"=>$tiposMaoDeObra, "anosAgricolas" => $anosAgricolas]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pessoa = new PessoaProducao();

        $pessoa->nome = $request->input("nome");
        $pessoa->cpf = $request->input("cpf");
        $pessoa->dataNascimento = $request->input("dataNascimento");
        $pessoa->diasTrabalho = $request->input("diasTrabalho");
        $pessoa->tipo_mao_de_obra_id = $request->input("tipo_mao_de_obra_id");
        $pessoa->ano_agricola_id = $request->input("ano_agricola_id");

        try {
            $pessoa->save();
        } catch (\Exception $e) {
            return redirect()->route("pessoaProducao.index")->with("toast", ["type" => "warning", "message" => "Erro inesperado: " . $e->getMessage() . ""]);
        }

        return redirect()->route("pessoaProducao.index")->with("toast", ["type" => "success", "message" => "Pessoa da Produção adicionada com sucesso!"]);
    }

    /**
     * Display the specified resource.
     */
    public function show(PessoaProducao $pessoaProducao)
    {
        return view("pessoaProducao.show")->with("pessoa", $pessoaProducao);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PessoaProducao $pessoaProducao)
    {
        $tiposMaoDeObra = TipoMaoDeObra::all();
        $anosAgricolas = AnoAgricola::all();

        return view("pessoaProducao.edit", compact("pessoaProducao", "tiposMaoDeObra", "anosAgricolas"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PessoaProducao $pessoaProducao)
    {
        $pessoaProducao->nome = $request->input("nome");
        $pessoaProducao->cpf = $request->input("cpf");
        $pessoaProducao->dataNascimento = $request->input("dataNascimento");
        $pessoaProducao->diasTrabalho = $request->input("diasTrabalho");
        $pessoaProducao->tipo_mao_de_obra_id = $request->input("tipo_mao_de_obra_id");
        $pessoaProducao->ano_agricola_id = $request->input("ano_agricola_id");

        try {
            $pessoaProducao->save();
        } catch (\Exception $e) {
            return redirect()->route("pessoaProducao.index")->with("toast", [
                "type" => "warning",
                "message" => "Erro inesperado: " . $e->getMessage()
            ]);
        }

        return redirect()->route("pessoaProducao.index")->with("toast", [
            "type" => "success",
            "message" => "Pessoa da Produção atualizada com sucesso!"
        ]);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PessoaProducao $pessoaProducao)
    {
        try {
            $pessoaProducao->delete();
        } catch (\Exception $e) {
            return redirect()->route("pessoaProducao.index")->with("toast", ["type" => "warning", "message" => "Erro inesperado: " . $e->getMessage() . ""]);
        }

        return redirect()->route("pessoaProducao.index")->with("toast", ["type" => "success", "message" => "Pessoa da Produção excluída com sucesso!"]);
    }
}
