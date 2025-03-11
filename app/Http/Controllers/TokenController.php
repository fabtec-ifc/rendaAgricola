<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TokenController extends Controller
{
    public function verify(Request $request)
    {
        $tokenProvided = $request->input('token');

        $user = Auth::user();

        if ($user->erros == 3) {
            return back()->with('error', 'Você atingiu o limite de tentativas de envio de e-mail. Entre em contato com o suporte.');
        }elseif($user && $tokenProvided === $user->token){
            $user->habilitado = 1;
            $user->save();
            return redirect()->route('home');
        }else{
            $user->erros += 1;
            $user->save();
            return back()->with('error', 'Token inválido');
        }
    }
}
