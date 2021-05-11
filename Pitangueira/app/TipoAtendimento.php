<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoAtendimento extends Model
{
    protected $fillable = [
        'nome'
    ];

    public function atedimentos()
    {
        return $this->hasMany(TipoAtendimento::class, 'tipoAtendimento_id', 'id');
    }
}
