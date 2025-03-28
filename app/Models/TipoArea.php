<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class TipoArea extends Model
{
    use HasFactory, Sortable;

    protected $fillable = ["descricao", "areaPropria"];
    public $sortable = ["id", "descricao", "areaPropria"];
}
