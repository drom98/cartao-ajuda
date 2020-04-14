<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cartao extends Model
{
    protected $table = 'cartoes';

    protected $fillable = [
        'opcao_id',
        'negocio_id',
        'nome_cliente',
        'apelido_cliente',
        'estado',
    ];

    public function opcao_cartao()
    {
        return $this->belongsTo('App\OpcaoCartao');
    }

    public function negocio()
    {
        return $this->belongsTo('App\Negocio');
    }
}
