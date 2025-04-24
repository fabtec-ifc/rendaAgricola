<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class UsoTerra extends Model
{
    use HasFactory, Sortable;

    protected $fillable = ['quantArea', 'areaInaproveitavel'];
    public $sortable = ['id', 'quantArea', 'areaInaproveitavel'];

    public function tipoUsoTerra(){
        return $this->belongsTo('App\Models\TipoUsoTerra');
    }

    /*
    public function anoAgricola(){
        return $this->belongsTo('App\Models\anoAgricola');
    }
    */
}
