<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class PessoaProducao extends Model
{
    use HasFactory, Sortable;

    protected $fillable = ['nome', 'cpf', 'dataNascimento', 'diasTrabalho', 'tipo_mao_de_obra_id', 'ano_agricola_id'];
    public $sortable = ['id', 'nome', 'cpf', 'dataNascimento', 'diasTrabalho', 'tipo_mao_de_obra_id'];

    public function tipoMaoDeObra(){
        return $this->belongsTo('App\Models\TipoMaoDeObra');
    }

    public function anoAgricola(){
        return $this->belongsTo('App\Models\AnoAgricola');
    }

}
