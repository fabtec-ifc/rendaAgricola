<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Estado extends Model
{
    use HasFactory, Sortable;

    protected $fillable = ["descricao", "sigla"];
    public $sortable = ["id", "descricao", "sigla"];

    public function municipios(){
        return $this->hasMany(Municipio::class);
    }
}
