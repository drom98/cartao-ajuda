<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Negocio extends Model
{
    protected $table = 'negocios';

    protected $fillable = [
      'user_id',
      'nome',
      'logo',
      'texto_compra',
      'texto_agradecimento',
      'url',
    ];

    protected $attributes = [
        'texto_compra' => 'Ao comprar um Cartão Ajuda está a contribuir para que consigamos superar o impacto financeiro causado pela pandemia do COVID-19.',
        'texto_agradecimento' => 'O nosso muito obrigado pelo seu apoio! Irá receber no seu email as instruções de pagamento. Assim que confirmarmos o seu pagamento, ativaremos o seu cartão, que será enviado por email.',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function metodos_pagamento()
    {
        return $this->hasMany('App\MetodoPagamento');
    }

    public function opcoes_cartoes()
    {
        return $this->hasMany('App\OpcaoCartao');
    }

    public function cartoes()
    {
        return $this->hasMany('App\Cartao');
    }
}
