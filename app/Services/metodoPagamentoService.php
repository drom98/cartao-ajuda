<?php


namespace App\Services;


use App\MetodoPagamento;
use Illuminate\Support\Facades\Auth;

class metodoPagamentoService
{
    public function create($user)
    {
        $nomes = array('IBAN', 'MB WAY', 'PayPal');

        for($i = 0; $i < 3; $i++) {
            $metodo = new MetodoPagamento();
            $metodo->negocio_id = $user->negocio->id;
            $metodo->nome = $nomes[$i];

            $metodo->save();
        }
    }

    public function update($request)
    {
        $metodos = Auth::user()->negocio->metodos_pagamento;

        foreach ( $metodos as $key => $metodo ) {
            $metodo->update([
                'descricao' => $request->metodo[$key]
            ]);
        }
    }
}
