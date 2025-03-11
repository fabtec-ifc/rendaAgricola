<?php


namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Kyslik\ColumnSortable\Sortable;

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
        'token',
        'password',
        'politicas',
        'tipoUsuario_id',
        'lastMail',
        'cpf',
        'rg',
        'linkDoLattes'
    ];
    public $sortable = ['id', 'name', 'cpf'];

    protected $attributes = [
        'habilitado' => 0,
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
    ];
    
    public static function boot()
    {
        parent::boot();

        static::creating(function ($user) {
            $currentTime = date("d/m/Y H:i:s");
            $email = $user->email;
            $combinedData = $currentTime . $email;
            
            $token = hash('sha256', $combinedData);
            
            $token = substr($token, 0, 6);
        
            $user->token = $token;
        });
    }


    public function tipoUsuario() {
        return $this->belongsTo(TipoUsuario::class, 'tipoUsuario_id'); 
    }

}
