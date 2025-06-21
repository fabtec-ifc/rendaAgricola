<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Area extends Model
{
    use HasFactory, Sortable;

    protected $fillable = ['quantArea', 'descricao', 'valorHectare', 'tipo_area_id', 'ano_agricola_id', 'tipo_uso_terra_id'];
    public $sortable = ['id', 'quantArea', 'descricao', 'valorHectare', 'tipo_area_id', 'ano_agricola_id', 'tipo_uso_terra_id'];

    public function tipoArea(){
        return $this->belongsTo('App\Models\TipoArea');
    }

    public function tipoUsoTerra(){
        return $this->belongsTo("App\Models\TipoUsoTerra");
    }

    public function anoAgricola(){
        return $this->belongsTo('App\Models\AnoAgricola');
    }

}