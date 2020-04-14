<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MetodoPagamento extends Model
{
    protected $table = 'metodo_pagamentos';

    protected $fillable = [
        'negocio_id',
        'nome',
        'descricao',
    ];

    public function negocio()
    {
        return $this->belongsTo('App\Negocio');
    }
}
