<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\DB;

class LogVigilanteLogin
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(Login $event)
    {
        $user = $event->user;

        if ($user->tipoUsuario_id == 3) {
            DB::table('login_logs')->insert([
                'user_id' => $user->id,
                'data' => now(),
            ]);
        }
    }

}
