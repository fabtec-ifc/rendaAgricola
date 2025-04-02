<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class UnidadeProducao extends Model
{
    use HasFactory, Sortable;

    protected $fillable = ["nome", "endereco", "municipio_id", "telefone", "coordenadasMapa"];
    public $sortable = ["id", "nome", "municipio_id"];

    public function municipio(){
        return $this->belongsTo(Municipio::class);
    }
}
