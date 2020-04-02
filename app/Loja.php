<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loja extends Model
{
    protected $table = 'lojas';

    protected $fillable = [
        'user_id',
        'nome',
        'logo',
        'texto_pos_compra',
    ];

    public function cartoes()
    {
        return $this->hasMany('App\Cartao', 'loja_id');
    }

    public function metodos_pagamento()
    {
        return $this->belongsToMany('App\Metodo_Pagamento', 'metodos_pagamento_loja', 'id_loja', 'id_metodo_pagamento');
    }
}
