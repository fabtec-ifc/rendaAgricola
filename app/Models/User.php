<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Kyslik\ColumnSortable\Sortable;
use Illuminate\Support\Str;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, Sortable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'politicas',
        'token',
        'habilitado',
        'tipo_usuario_id',
    ];

    public $sortable = ['id', 'name', 'email', 'tipo_usuario_id'];

    protected $attributes = [
        'habilitado' => 1,
        'erros' => 0,
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
        'habilitado' => 'boolean',
        'politicas' => 'boolean'
    ];

    public static function boot()
    {
        parent::boot();

        static::creating(function ($user) {
            do {
                $currentTime = now()->format('YmdHis');
                $email = $user->email;
                $combinedData = $currentTime . $email;
                $token = substr(hash('sha256', $combinedData), 0, 6);
            } while (self::where('token', $token)->exists());

            $user->token = $token;
        });
    }

    public function tipoUsuario() {
        return $this->belongsTo(TipoUsuario::class, 'tipo_usuario_id');
    }
}
