<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class FaixaEtaria extends Model
{
    use HasFactory, sortable;

    protected $fillable = ['inicio','fim','multiplicador'];
    public $sortable = ['id','inicio','fim','multiplicador'];
}
