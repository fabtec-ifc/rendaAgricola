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
        $filtro = request()->input('filtro');
        $tiposUsuarios = TipoUsuario::where('descricao', 'LIKE', $filtro.'%')->sortable()->paginate();


        if (request()->session()->has('toast')) {
            return view('tipoUsuario.index')->with('tiposUsuarios', $tiposUsuarios)->with('filtro', $filtro)->with(session('toast'));
        }

        return view('tipoUsuario.index')->with('tiposUsuarios', $tiposUsuarios)->with('filtro', $filtro);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tipoUsuario.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();

        $tipoUsuario = TipoUsuario::create($input);

        $tipoUsuario->save();

        return redirect()->route('tipoUsuario.index')->with('toast', ['type' => 'success', 'message' => 'Tipo de usuário adicionado com sucesso.']);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $tipoUsuario = TipoUsuario::find($id);

        return view('tipoUsuario.show', ['tipoUsuario'=>$tipoUsuario]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $tipoUsuario = TipoUsuario::find($id);

        return view('tipoUsuario.edit', ['tipoUsuario'=>$tipoUsuario]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $tipoUsuario = TipoUsuario::find($id);

        $input = $request->all();

        $tipoUsuario->descricao = $input['descricao'];

        $tipoUsuario->save();

        return redirect()->route('tipoUsuario.index')->with('toast', ['type' => 'success', 'message' => 'Tipo de usuário editado com sucesso.']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $tipoUsuario = TipoUsuario::find($id);

        try {
            $tipoUsuario->delete();
        } catch (\Exception $e) {
            if ($e instanceof \Illuminate\Database\QueryException && $e->errorInfo[1] == 1451) {
                return redirect()->route('tipoUsuario.index')->with('toast', ['type' => 'warning', 'message' => 'Não é Possível excluir itens com vínculos']);
            } else {
                return redirect()->route('tipoUsuario.index')->with('toast', ['type' => 'danger', 'message' => 'Erro Inesperado ('.$e->getMessage().")"]);
                echo "Erro ao excluir item: " . $e->getMessage();
            }
        }

        return redirect()->route('tipoUsuario.index')->with('toast', ['type' => 'success', 'message' => 'Tipo de usuário excluído com sucesso.']);
    }
}
