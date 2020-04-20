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
        'email',
        'estado',
        'codigo',
    ];

    public function opcao_cartao()
    {
        return $this->belongsTo('App\OpcaoCartao', 'opcao_id');
    }

    public function negocio()
    {
        return $this->belongsTo('App\Negocio');
    }
}
