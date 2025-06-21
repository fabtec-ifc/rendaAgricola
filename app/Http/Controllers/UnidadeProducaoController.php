<?php

namespace App\Http\Controllers;

use App\Models\UnidadeProducao;
use App\Models\Estado;
use App\Models\Municipio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UnidadeProducaoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $filtro = request()->input("filtro");
        $unidadesProducao = Auth::user()
            ->unidadesProducao()
            ->where("nome", "LIKE", $filtro."%")
            ->sortable()
            ->paginate(12);

        if(request()->session()->has("toast"))
            return view("unidadeProducao.index")->with("unidadesProducao", $unidadesProducao)->with("filtro", $filtro)->with(session("toast"));

        return view("unidadeProducao.index")->with("unidadesProducao", $unidadesProducao)->with("filtro", $filtro);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $estados = Estado::all();
        $municipios = $estados->find(24)->municipios;   



        return view("unidadeProducao.create")->with("estados", $estados)->with("municipios", $municipios);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $unidadeProducao = new UnidadeProducao();

        $unidadeProducao->nome = $request->input("nome");
        $unidadeProducao->endereco = $request->input("endereco");
        $unidadeProducao->municipio_id = $request->input("municipio_id");
        $unidadeProducao->telefone = $request->input("telefone");

        try {
            $unidadeProducao->save();

            $unidadeProducao->usuarios()->attach(auth()->id(), ['dono' => true]);
            // Associa o usuário autenticado como dono da unidade de produção (criador = dono)

            return redirect()->route("unidadeProducao.index")
                ->with("toast", ["type" => "success", "message" => "Unidade de Produção adicionada com sucesso!"]);

        } catch(\Exception $e) {
            return redirect()->route("unidadeProducao.index")
                ->with("toast", ["type" => "warning", "message" => "Erro inesperado: ".$e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(UnidadeProducao $unidadeProducao)
    {
        return view("unidadeProducao.show")->with("unidadeProducao", $unidadeProducao);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UnidadeProducao $unidadeProducao)
    {
        $estados = Estado::all();
        $municipios = $estados->find($unidadeProducao->municipio->estado_id)->municipios;

        return view("unidadeProducao.edit")->with("unidadeProducao", $unidadeProducao)->with("estados", $estados)->with("municipios", $municipios);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, UnidadeProducao $unidadeProducao)
    {
        $unidadeProducao->nome = $request->input("nome");
        $unidadeProducao->endereco = $request->input("endereco");
        $unidadeProducao->municipio_id = $request->input("municipio_id");
        $unidadeProducao->telefone = $request->input("telefone");

        try{
            $unidadeProducao->save();
        } catch(\Exception $e){
            return redirect()->route("unidadeProducao.index")->with("toast", ["type" => "warning", "message" => "Erro inesperado: ".$e->getMessage()]);
        }

        return redirect()->route("unidadeProducao.index")->with("toast", ["type" => "success", "message" => "Unidade de Produção atualizada com sucesso!"]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UnidadeProducao $unidadeProducao)
    {
        try{
            $unidadeProducao->delete();
        } catch(\Exception $e){
            return redirect()->route("unidadeProducao.index")->with("toast", ["type" => "warning", "message" => "Erro inesperado: ".$e->getMessage()]);
        }

        return redirect()->route("unidadeProducao.index")->with("toast", ["type" => "success", "message" => "Unidade de Produção excluída com sucesso!"]);
    }

    public function selectEstado(){
        $estado_id = request("estado_id");
        $estado = Estado::find($estado_id);

        $municipios = $estado->municipios;

        return response()->json($municipios);
    }
}
