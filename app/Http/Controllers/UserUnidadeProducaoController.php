<?php

namespace App\Http\Controllers;

use App\Models\UnidadeProducao;
use App\Models\User;
use App\Models\User_UnidadeProducao;
use Illuminate\Http\Request;

class UserUnidadeProducaoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(string $unidade_producao_id)
    {
        $unidadeProducao = UnidadeProducao::find($unidade_producao_id);

        $usuarios = $unidadeProducao->usuarios()->sortable()->paginate(12);

        if(request()->session()->has("toast"))
            return view("usuarioUnidade.index")->with("usuarios", $usuarios)->with("unidadeProducao", $unidadeProducao)->with(session("toast"));

        return view("usuarioUnidade.index")->with("usuarios", $usuarios)->with("unidadeProducao", $unidadeProducao);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(string $unidade_producao_id)
    {
        $unidadeProducao = UnidadeProducao::find($unidade_producao_id);
        $usuarios = User::all();

        return view("usuarioUnidade.create")->with("usuarios", $usuarios)->with("unidadeProducao", $unidadeProducao);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, string $unidade_producao_id)
    {
        $usuarioUnidade = new User_UnidadeProducao();

        $usuarioUnidade->user_id = $request->input("user_id");
        $usuarioUnidade->unidade_producao_id = $unidade_producao_id;

        try{
            $usuarioUnidade->save();
        } catch(\Exception $e){
            return redirect()->route("usuarioUnidade.index", $unidade_producao_id)->with("toast", ["type" => "warning", "message" => "Erro inesperado: ".$e->getMessage()]);
        }

        return redirect()->route("usuarioUnidade.index", $unidade_producao_id)->with("toast", ["type" => "success", "message" => "Usuário adicionado com sucesso!"]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $unidade_producao_id, string $user_id)
    {
        $unidadeProducao = UnidadeProducao::find($unidade_producao_id);
        $usuario = User::find($user_id);

        return view("usuarioUnidade.show")->with("usuario", $usuario)->with("unidadeProducao", $unidadeProducao);
    }

    /**
     * Remove the specified resource from storage.
     */
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
