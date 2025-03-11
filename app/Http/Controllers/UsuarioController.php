<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\TipoUsuario;
use App\Models\Municipio;
use App\Models\Estado;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $filtro = request()->input('filtro');
        $usuarios = User::where('name', 'LIKE', $filtro.'%')->sortable()->paginate(12);

        if (request()->session()->has('toast')) {
            return view('usuario.index')->with('usuarios', $usuarios)->with('filtro', $filtro)->with(session('toast'));
        }

        return view('usuario.index')->with('usuarios', $usuarios)->with('filtro', $filtro);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tiposUsuario = TipoUsuario::All();

        return view('usuario.create',['tiposUsuario'=>$tiposUsuario]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $usuario = new User();

        $usuario->email = $request->input('email');
        $usuario->tipoUsuario_id = $request->input('tipoUsuario_id');
        $usuario->password = $request->input('password');
        $usuario->name = $request->input('name');
        $usuario->linkDoLattes = $request->input('linkDoLattes');
        $usuario->cpf = $request->input('cpf');
        $usuario->rg = $request->input('rg');
        $usuario->habilitado = 1;
        $usuario->politicas = 1;

        $usuario->save();

        return redirect()->route('usuario.index')->with('toast', ['type' => 'success', 'message' => 'Usuário adicionado com sucesso.']);
    }

    /**
     * Display the specified resource.
     */
    public function show(String $id)
    {
        $usuario = User::find($id);

        return view('usuario.show', ['usuario'=>$usuario]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(String $id)
    {
        $usuario = User::find($id);
        $tiposUsuario = TipoUsuario::All();

        return view('usuario.edit', ['usuario'=>$usuario, 'tiposUsuario'=>$tiposUsuario]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, String $id)
    {
        $usuario = User::find($id);

         $usuario->name = $request->input('name');

        $usuario->email = $request->input('email');

        $usuario->password = $request->input('password');

        $usuario->token = $request->input('token');
        $usuario->habilitado = 1;
        $usuario->politicas = 1;
        $usuario->linkDoLattes = $request->input('linkDoLattes');
        $usuario->cpf = $request->input('cpf');
        $usuario->rg = $request->input('rg');

        $usuario->save();

        return redirect()->route('usuario.index')->with('toast', ['type' => 'success', 'message' => 'Usuário editado com sucesso.']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $id)
    {
        $usuario = User::find($id);

        try {
            $usuario->delete();
        } catch (\Exception $e) {
            if ($e instanceof \Illuminate\Database\QueryException && $e->errorInfo[1] == 1451) {
                return redirect()->route('usuario.index')->with('toast', ['type' => 'warning', 'message' => 'Não é Possível excluir itens com vínculos']);
            } else {
                return redirect()->route('usuario.index')->with('toast', ['type' => 'danger', 'message' => 'Erro Inesperado ('.$e->getMessage().")"]);
                echo "Erro ao excluir item: " . $e->getMessage();
            }
        }

        return redirect()->route('usuario.index')->with('toast', ['type' => 'success', 'message' => 'Usuário excluído com sucesso.']);
    }
}
