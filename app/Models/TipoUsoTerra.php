<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class TipoUsoTerra extends Model
{
    use HasFactory, Sortable;

    protected $fillable = ["descricao", "areaUtil"];
    public $sortable = ["id", "descricao", "areaUtil"];
}
