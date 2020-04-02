<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Metodo_Pagamento extends Model
{
    protected $table = 'metodos_pagamento';

    protected $fillable = [
        'nome',
        'descricao',
    ];

    public function lojas()
    {
        return $this->belongsToMany('App\Loja', 'metodos_pagamento_loja', 'id_metodo_pagamento', 'id_loja');
    }
}
