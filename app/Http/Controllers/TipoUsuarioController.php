<?php

namespace App\Http\Controllers;

use App\Models\TipoUsuario;
use Illuminate\Http\Request;

class TipoUsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $filtro = request()->input("filtro");
        $tiposUsuario = TipoUsuario::where("descricao", "LIKE", $filtro."%")->sortable()->paginate(10);

        if(request()->session()->has("toast"))
            return view("tipoUsuario.index")->with("tiposUsuario", $tiposUsuario)->with("filtro", $filtro)->with(session("toast"));

        return view("tipoUsuario.index")->with("tiposUsuario", $tiposUsuario)->with("filtro", $filtro);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("tipoUsuario.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $tipoUsuario = new TipoUsuario();

        $tipoUsuario->descricao = $request->input("descricao");

        try{
            $tipoUsuario->save();
        } catch(\Exception $e){
            return redirect()->route("tipoUsuario.index")->with("toast", ["type" => "warning", "message" => "Erro inesperado (".$e->getMessage().")"]);
        }

        return redirect()->route("tipoUsuario.index")->with("toast", ["type" => "success", "message" => "Tipo de Usuário adicionado com sucesso!"]);
    }

    /**
     * Display the specified resource.
     */
    public function show(TipoUsuario $tipoUsuario)
    {
        return view("tipoUsuario.show")->with("tipoUsuario", $tipoUsuario);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TipoUsuario $tipoUsuario)
    {
        return view("tipoUsuario.edit")->with("tipoUsuario", $tipoUsuario);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TipoUsuario $tipoUsuario)
    {
        $tipoUsuario->descricao = $request->input("descricao");

        try{
            $tipoUsuario->save();
        } catch(\Exception $e){
            return redirect()->route("tipoUsuario.index")->with("toast", ["type" => "warning", "message" => "Erro inesperado: ".$e->getMessage().""]);
        }

        return redirect()->route("tipoUsuario.index")->with("toast", ["type" => "success", "message" => "Tipo de Usuário alterado com sucesso!"]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TipoUsuario $tipoUsuario)
    {
        try{
            $tipoUsuario->delete();
        } catch(\Exception $e){
            return redirect()->route("tipoUsuario.index")->with("toast", ["type" => "warning", "message" => "Erro inesperado: ".$e->getMessage().""]);
        }

        return redirect()->route("tipoUsuario.index")->with("toast", ["type" => "success", "message" => "Tipo de Usuário excluído com sucesso!"]);
    }
}