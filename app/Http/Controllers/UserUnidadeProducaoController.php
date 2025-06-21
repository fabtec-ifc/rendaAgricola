<?php

namespace App\Http\Controllers;

use App\Models\UnidadeProducao;
use App\Models\User;
use App\Models\User_UnidadeProducao;
use Illuminate\Http\Request;

class UserUnidadeProducaoController extends Controller
{
    public function index(string $unidade_producao_id)
    {
        $unidadeProducao = UnidadeProducao::find($unidade_producao_id);

        $usuarios = $unidadeProducao->usuarios()->sortable()->orderBy("pivot_created_at", "desc")->paginate(12);

        if(request()->session()->has("toast"))
            return view("usuarioUnidade.index")->with("usuarios", $usuarios)->with("unidadeProducao", $unidadeProducao)->with(session("toast"));

        return view("usuarioUnidade.index")->with("usuarios", $usuarios)->with("unidadeProducao", $unidadeProducao);
    }

    public function create(string $unidade_producao_id)
    {
        $unidadeProducao = UnidadeProducao::find($unidade_producao_id);
        $usuarios = User::all();

        return view("usuarioUnidade.create")->with("usuarios", $usuarios)->with("unidadeProducao", $unidadeProducao);
    }

    public function store(Request $request, string $unidade_producao_id)
    {
        $usuarioUnidade = new User_UnidadeProducao();

        $usuarioUnidade->user_id = $request->input("user_id");
        $usuarioUnidade->unidade_producao_id = $unidade_producao_id;
        $usuarioUnidade->dono = true; // Usuário criador é sempre dono da unidade de produção

        try{
            $usuarioUnidade->save();
        } catch(\Exception $e){
            return redirect()->route("usuarioUnidade.index", $unidade_producao_id)->with("toast", ["type" => "warning", "message" => "Erro inesperado: ".$e->getMessage()]);
        }

        return redirect()->route("usuarioUnidade.index", $unidade_producao_id)->with("toast", ["type" => "success", "message" => "Usuário adicionado com sucesso!"]);
    }

    public function show(string $unidade_producao_id, string $user_id)
    {
        $unidadeProducao = UnidadeProducao::find($unidade_producao_id);
        $usuario = User::find($user_id);

        return view("usuarioUnidade.show")->with("usuario", $usuario)->with("unidadeProducao", $unidadeProducao);
    }

    public function destroy(string $unidade_producao_id, string $user_id)
    {
        $usuarioUnidade = User_UnidadeProducao::where("user_id", $user_id)->where("unidade_producao_id", $unidade_producao_id);

        try{
            $usuarioUnidade->delete();
        } catch(\Exception $e){
            return redirect()->route("usuarioUnidade.index", $unidade_producao_id)->with("toast", ["type" => "warning", "message" => "Erro inesperado: ".$e->getMessage()]);
        }

        return redirect()->route("usuarioUnidade.index", $unidade_producao_id)->with("toast", ["type" => "success", "message" => "Usuário removido com sucesso!"]);
    }
}
