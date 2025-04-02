<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Municipio extends Model
{
    use HasFactory, Sortable;

    protected $fillable = ["descricao", "estado_id"];
    public $sortable = ["id", "descricao", "estado_id"];

    public function estado(){
        return $this->belongsTo(Estado::class);
    }
}
