<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Atendimento extends Model
{
    protected $fillable = [
        'nome_cliente',
        'data_exec',
        'observacao',
        'tipoAtendimento_id',
        'user_id'
    ];

    public function tipoAtendimento()
    {
        return $this->belongsTo(TipoAtendimento::class, 'tipoAtendimento_id', 'id');
    }
}
