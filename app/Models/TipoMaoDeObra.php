<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class TipoMaoDeObra extends Model
{
    use HasFactory, Sortable;

    protected $fillable = ["descricao"];
    public $sortable = ["id","descricao"];

}
