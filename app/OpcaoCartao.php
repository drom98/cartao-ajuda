<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class OpcaoCartao extends Model
{
    protected $table = 'opcoes_cartoes';

    protected $fillable = [
        'negocio_id',
        'valor',
        'descricao',
    ];

    public $timestamps = false;

    public function negocio()
    {
        return $this->belongsTo('App\Negocio');
    }

    public function cartoes()
    {
        return $this->hasMany('App\Cartao');
    }
}
