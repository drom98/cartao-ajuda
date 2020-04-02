<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cartao extends Model
{
    protected $table = 'cartoes';

    protected $fillable = [
        'loja_id',
        'email_cliente',
        'valor',
        'data_fim',
        'estado',
    ];

    public function loja()
    {
        return $this->belongsTo('App\Loja', 'loja_id');
    }
}
