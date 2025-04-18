<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Areas extends Model
{
    use HasFactory, Sortable;

    protected $fillable = ['quantArea', 'valorHectare'];
    public $sortable = ['id', 'quantArea', 'valorHectare'];

    public function tipoArea(){
        return $this->belongsTo('App\Models\TipoArea');
    }

    /*
    public function anoAgricola(){
        return $this->belongsTo('App\Models\anoAgricola');
    }
    */

}
