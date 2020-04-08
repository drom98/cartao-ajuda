<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cartao extends Model
{
    protected $table = 'cartoes';

    protected $fillable = [
        'loja_id',
        'nome',
        'apelido',
        'email_cliente',
        'valor',
        'data_fim',
        'estado',
        'card_code',
    ];

    public function loja()
    {
        return $this->belongsTo('App\Loja', 'loja_id');
    }
}
