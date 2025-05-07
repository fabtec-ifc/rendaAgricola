<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class User_UnidadeProducao extends Model
{
    use HasFactory, Sortable;

    protected $fillable = ["user_id", "unidade_producao_id"];
    public $sortable = ["user_id", "unidade_producao_id"];
}
