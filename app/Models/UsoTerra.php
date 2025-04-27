<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class UsoTerra extends Model
{
    use HasFactory, Sortable;

    protected $fillable = ['quantArea', 'areaInaproveitavel', 'tipo_uso_terra_id', 'ano_agricola_id'];
    public $sortable = ['id', 'quantArea', 'areaInaproveitavel', 'tipo_uso_terra_id'];

    public function tipoUsoTerra(){
        return $this->belongsTo('App\Models\TipoUsoTerra');
    }

    public function anoAgricola(){
        return $this->belongsTo('App\Models\AnoAgricola');
    }

}
