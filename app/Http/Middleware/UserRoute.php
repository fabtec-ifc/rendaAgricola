<?php

namespace App\Http\Middleware;

use App\Models\Aluno;
use App\Models\Responsavel;
use App\Models\Turma;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class UserRoute
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()) {
            $tipoUsuario = Auth::user()->tipoUsuario_id;

            if ($tipoUsuario == 2) {
                if ($request->getMethod() == 'POST' || $request->getMethod() == 'DELETE') {
                    return to_route('charts')->with('toast', ['type' => 'danger', 'message' => 'Você não pode realizar essa ação!']);
                }
            } elseif (in_array($tipoUsuario, [4, 5])) {
                if ($request->getMethod() != 'GET' ||
                    !in_array($request->route()->getName(), ['aluno.index', 'aluno.show', 'turma.listaDiaria', 'turma.index', 'turma.show', 'responsavel.index', 'alunosTurma', 'foto'])
                ) {
                    return to_route('charts')->with('toast', ['type' => 'danger', 'message' => 'Você não pode realizar essa ação!']);
                }
            } elseif ($tipoUsuario == 3) {
                if (!in_array($request->route()->getName(), ['aluno.index', 'turma.index', 'turma.listaDiaria', 'alunosTurma', 'foto'])) {
                    return to_route('charts')->with('toast', ['type' => 'danger', 'message' => 'Você não pode realizar essa ação!']);
                }
            }
        }
        

        return $next($request);
    }
}
