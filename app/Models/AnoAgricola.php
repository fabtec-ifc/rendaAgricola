<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class AnoAgricola extends Model
{
    use HasFactory, Sortable;

    protected $fillable = ["fim", "inicio", "ativo", "unidade_producao_id"];
    public $sortable = ["id", "fim", "inicio", "ativo", "unidade_producao_id"];

    public function unidadeProducao(){
        return $this->belongsTo(UnidadeProducao::class);
    }

    public function areas(){
        return $this->hasMany(Area::class);
    }

    public function trabalhadores(){
        return $this->belongsToMany(Trabalhador::class, "trabalhador__ano_agricolas")->withPivot("diasTrabalho", "tipo_mao_de_obra_id");
    }

}
