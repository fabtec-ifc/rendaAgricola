<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\TipoUsuario;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $filtro = request()->input("filtro");
        $usuarios = User::where("name", "LIKE", $filtro."%")->sortable()->paginate(12);

        if(request()->session()->has("toast"))
            return view("usuario.index")->with("usuarios", $usuarios)->with("filtro", $filtro)->with(session("toast"));

        return view("usuario.index")->with("usuarios", $usuarios)->with("filtro", $filtro);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tiposUsuario = TipoUsuario::all();

        return view("usuario.create")->with("tiposUsuario", $tiposUsuario);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $usuario = new User();

        $usuario->name = $request->input("name");
        $usuario->email = $request->input("email");
        $usuario->password = $request->input("password");
        $usuario->tipo_usuario_id = $request->input("tipo_usuario_id");

        $usuario->habilitado = 1;
        $usuario->politicas = 1;

        try{
            $usuario->save();
        } catch(\Exception $e){
            return redirect()->route("usuario.index")->with("toast", ["type" => "warning", "message" => "Erro inesperado: ".$e->getMessage()]);
        }

        return redirect()->route("usuario.index")->with("toast", ["type" => "success", "message" => "Usuário adicionado com sucesso."]);
    }

    /**
     * Display the specified resource.
     */
    public function show(User $usuario)
    {
        return view("usuario.show")->with("usuario", $usuario);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $usuario)
    {
        $tiposUsuario = TipoUsuario::all();

        return view("usuario.edit")->with("usuario", $usuario)->with("tiposUsuario", $tiposUsuario);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $usuario)
    {
        $usuario->name = $request->input("name");
        $usuario->email = $request->input("email");
        $usuario->password = $request->input("password");
        $usuario->tipo_usuario_id = $request->input("tipo_usuario_id");

        $usuario->save();

        try{
            $usuario->save();
        } catch(\Exception $e){
            return redirect()->route("usuario.index")->with("toast", ["type" => "warning", "message" => "Erro inesperado: ".$e->getMessage()]);
        }

        return redirect()->route("usuario.index")->with("toast", ["type" => "success", "message" => "Usuário atualizado com sucesso."]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $usuario)
    {
        try{
            $usuario->delete();
        } catch(\Exception $e){
            return redirect()->route("usuario.index")->with("toast", ["type" => "warning", "message" => "Erro inesperado: ".$e->getMessage()]);
        }

        return redirect()->route("usuario.index")->with("toast", ["type" => "success", "message" => "Usuário excluído com sucesso."]);
    }
}
