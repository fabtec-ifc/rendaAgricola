<?php

namespace App\Http\Controllers;

use App\Models\Trabalho;
use App\Models\TipoTrabalho;
use App\Models\Curso;
use App\Models\PalavraChave;
use App\Models\Tag;
use App\Models\TrabalhoPalavraChave;
use App\Models\TrabalhoTag;
use Illuminate\Http\Request;

class TrabalhoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $trabalhos = Trabalho::all();
        return view ('trabalho.index', ['trabalhos'=>$trabalhos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tiposTrabalho = TipoTrabalho::all();
        $cursos = Curso::all();
        $tags = Tag::all();

        return view ('trabalho.create', ["tiposTrabalho"=>$tiposTrabalho, "cursos"=>$cursos, "tags"=>$tags]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $trabalho = new Trabalho();

        $trabalho->dataPublicacao = $request->input('dataPublicacao');
        $trabalho->tipo_trabalho_id = $request->input('tipo_trabalho_id');
        $trabalho->idioma = $request->input('idioma');
        $trabalho->resumo = $request->input('resumo');
        $trabalho->descricao = $request->input('descricao');
        $trabalho->titulo = $request->input('titulo');
        $trabalho->subtitulo = $request->input('subtitulo');
        $trabalho->curso_id = $request->input('curso_id');
        $trabalho->numeroDeDownloads = 0;

        $trabalho->save();

        /*$tags = $request->input('tags',[]);
        $tagObj = [];

        foreach ($tags as $descr) {
            $tag = Tag::firstOrCreate(['descricao'=>$descr]);
            $tagId[] = $tag->id;
        }

        $trabalho->tags()->sync($tagObj);*/

        return redirect()->route('trabalho.edit', $trabalho->id)->with('toast', ['type' => 'success', 'message' => 'Trabalho adicionada com sucesso.']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Trabalho $trabalho)
    {
        return view('trabalho.show', ['trabalho'=>$trabalho]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Trabalho $trabalho)
    {
        $tiposTrabalho = TipoTrabalho::all();
        $cursos = Curso::all();
        $tags = Tag::all();

        return view('trabalho.edit', ['trabalho'=>$trabalho, 'tiposTrabalho'=>$tiposTrabalho, 'cursos'=>$cursos, 'tags'=>$tags]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Trabalho $trabalho)
    {
        $trabalho->dataPublicacao = $request->input('dataPublicacao');
        $trabalho->tipo_trabalho_id = $request->input('tipo_trabalho_id');
        $trabalho->idioma = $request->input('idioma');
        $trabalho->resumo = $request->input('resumo');
        $trabalho->descricao = $request->input('descricao');
        $trabalho->titulo = $request->input('titulo');
        $trabalho->subtitulo = $request->input('subtitulo');
        $trabalho->curso_id = $request->input('curso_id');

        $trabalho->save();

        return redirect()->route('trabalho.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Trabalho $trabalho)
    {
        $trabalho->delete();

        return redirect()->route('trabalho.index');
    }

    public function addPalavraChave(Request $request) {
        $pchave = PalavraChave::where('descricao', $request->input('descrPchave'))->first();

        if($pchave) {
            $pchaveId = $pchave->id;
        } else {
            $pchave = new PalavraChave();
            $pchave->descricao = $request->input('descrPchave');

            try {
                $pchave->save();
            } catch (\Exception $e) {
                $trabalho = Trabalho::find($request->input('trabalho_id'));
                
                return redirect("trabalho/$request->trabalho_id/edit")->with('toast', ['type' => 'warning', 'message' => 'Erro inesperado: ' . $e->getMessage()]);
            }
            
            $pchaveId = $pchave->id;
        }


            try {
                
                $tpchave = new TrabalhoPalavraChave();
                $tpchave->trabalho_id = $request->input('trabalho_id');
                $tpchave->palavra_chave_id = $pchaveId;
                $tpchave->save();

            } catch (\Exception $e) {
                if ($e instanceof \Illuminate\Database\QueryException && $e->errorInfo[1] == 1062) {
                    $trabalho = Trabalho::find($request->input('trabalho_id'));
                    return redirect("trabalho/$request->trabalho_id/edit")->with('toast', ['type' => 'warning', 'message' => 'Palavra chave duplicada. Exclua para adicionar um novo.']);
                } else {
                    $trabalho = Trabalho::find($request->input('trabalho_id'));
                    return redirect("trabalho/$request->trabalho_id/edit")->with('toast', ['type' => 'warning', 'message' => 'Erro inesperado: ' . $e->getMessage()]);
                }
            }
    
            return redirect("trabalho/$request->trabalho_id/edit")->with('toast', ['type' => 'success', 'message' => 'Palavra chave adicionada com sucesso.']);
        }

    public function addTag(Request $request)
    {
        $tag = Tag::where('descricao', $request->input('descrTag'))->first();

        if ($tag) {
            $tagId = $tag->id;
        } else {
            $tag = new Tag();
            $tag->descricao = $request->input('descrTag');
            
            try {
                $tag->save();
            } catch (\Exception $e) {
                $trabalho = Trabalho::find($request->input('trabalho_id'));
                return redirect("trabalho/$request->trabalho_id/edit")->with('toast', ['type' => 'warning', 'message' => 'Erro inesperado: ' . $e->getMessage()]);
            }
            $tagId = $tag->id;
        }

        try {
            $tt = new TrabalhoTag();
            $tt->trabalho_id = $request->input('trabalho_id');
            $tt->tag_id = $tagId;
            $tt->save();
        } catch (\Exception $e) {
            if ($e instanceof \Illuminate\Database\QueryException && $e->errorInfo[1] == 1062) {
                $trabalho = Trabalho::find($request->input('trabalho_id'));
                return redirect("trabalho/$request->trabalho_id/edit")->with('toast', ['type' => 'warning', 'message' => 'Tag duplicada. Exclua para adicionar um novo.']);
            } else {
                $trabalho = Trabalho::find($request->input('trabalho_id'));
                return redirect("trabalho/$request->trabalho_id/edit")->with('toast', ['type' => 'warning', 'message' => 'Erro inesperado: ' . $e->getMessage()]);
            }
        }

        return redirect("trabalho/$request->trabalho_id/edit")->with('toast', ['type' => 'success', 'message' => 'Tag adicionada com sucesso.']);
    }

    public function delTag(Request $request)
    {
        try {
            $trabalho_id = $request->input('trabalho_id');
            $tag_id = $request->input('tag_id');
            $trabalhoTag = TrabalhoTag::where('trabalho_id', $trabalho_id)->where('tag_id', $tag_id)->first();
            $trabalho = Trabalho::find($trabalho_id);
            if ($trabalhoTag) {
                $trabalho->tags()->detach($tag_id);
                return redirect("trabalho/$trabalho_id/edit")->with('toast', ['type' => 'success', 'message' => 'Tag desvinculada com sucesso.']);
            } else {
                return redirect("trabalho/$trabalho_id/edit")->with('toast', ['type' => 'warning', 'message' => 'Tag não encontrada para desvinculação.']);
            }
        } catch (\Exception $e) {
            return redirect("trabalho/$request->trabalho_id/edit")->with('toast', ['type' => 'warning', 'message' => 'Erro inesperado: ' . $e->getMessage()]);
        }
    }

    public function delPalavraChave(Request $request) {

        try {
            $trabalho_id = $request->input('trabalho_id');
            $pchaveId = $request->input('pchaveId');
            $trabalhoPchave = TrabalhoPalavraChave::where('trabalho_id', $trabalho_id)->where('palavra_chave_id', $pchaveId)->first();
            $trabalho = Trabalho::find($trabalho_id);
            if ($trabalhoPchave) {
                $trabalho->palavraChaves()->detach($pchaveId);
                return redirect("trabalho/$trabalho_id/edit")->with('toast', ['type' => 'success', 'message' => 'Palavra chave desvinculada com sucesso.']);
            } else {
                return redirect("trabalho/$trabalho_id/edit")->with('toast', ['type' => 'warning', 'message' => 'Palavra chave não encontrada para desvinculação.']);
            }
        } catch (\Exception $e) {
            return redirect("trabalho/$request->trabalho_id/edit")->with('toast', ['type' => 'warning', 'message' => 'Erro inesperado: ' . $e->getMessage()]);
        }
    }

}
