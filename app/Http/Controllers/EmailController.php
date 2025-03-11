<?php

namespace App\Http\Controllers;

use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Models\User;
use App\Jobs\SendEmailJob;

class EmailController extends Controller
{
    public static function enviarEmail()
    {
        $user = Auth::user();
    
        if ($user->lastMail && Carbon::parse($user->lastMail)->addDay()->isPast() || $user->lastMail == null) {
            SendEmailJob::dispatch($user, 'email', null);
            $now = Carbon::now()->format('Y-m-d H:i:s');
            $user->lastMail = $now;
            $user->save();
        } else {
            return redirect()->back();
        }
    
        return redirect()->back();
    }

    public function enviarEmailSenha()
    {
        $user = Auth::user();
        $hash = hash('sha256', now());
        $novaSenha = substr($hash, 0, 10);
        $user->password = $novaSenha;
        $user->save();
        SendEmailJob::dispatch($user, 'senha', $novaSenha);
        return redirect()->back();
    }
}
