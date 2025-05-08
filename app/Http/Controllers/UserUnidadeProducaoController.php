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

        $usuarios = $unidadeProducao->usuarios;

        if(request()->session()->has("toast"))
            return view("usuarioUnidade.index")->with("usuarios", $usuarios)->with("unidadeProducao", $unidadeProducao)->with(session("toast"));

        return view("usuarioUnidade.index")->with("usuarios", $usuarios)->with("unidadeProducao", $unidadeProducao);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(string $unidade_producao_id)
    {
        $usuarios = User::all();

        return view("usuarioUnidade.create")->with("usuarios", $usuarios);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $usuarioUnidade = new User_UnidadeProducao();

        //$usuarioCidade->user_id =
    }

    /**
     * Display the specified resource.
     */
    public function show(User_UnidadeProducao $user_UnidadeProducao)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User_UnidadeProducao $user_UnidadeProducao)
    {
        //
    }
}
