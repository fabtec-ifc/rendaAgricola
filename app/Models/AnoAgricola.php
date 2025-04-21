<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnoAgricola extends Model
{
    use HasFactory;

    protected $fillable = ["fim", "inicio", "unidade_producao_id"];
    public $sortable = ["id", "fim", "inicio", "unidade_producao_id"];

    public function unidadeProducao(){
        return $this->belongsTo(UnidadeProducao::class);
    }
    
}
