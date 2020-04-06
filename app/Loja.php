<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loja extends Model
{
    protected $table = 'lojas';

    protected $fillable = [
        'user_id',
        'loja_id',
        'nome',
        'logo',
        'forma_pagamento',
        'texto_compra',
        'texto_agradecimento',
    ];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function cartoes()
    {
        return $this->hasMany('App\Cartao', 'loja_id');
    }

    public function metodos_pagamento()
    {
        return $this->belongsToMany('App\Metodo_Pagamento', 'metodos_pagamento_loja', 'id_loja', 'id_metodo_pagamento');
    }
}
