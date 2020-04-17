<?php


namespace App\Services;


use App\Cartao;

class cartaoService
{
    public function create($request)
    {
        $validar = $request->validate([
            'nome' => 'required|max:50',
            'apelido' => 'required|max:50',
            'email' => 'required|email',
        ]);

        return Cartao::create([
            'opcao_id' => $request->opcao,
            'negocio_id' => $request->negocio_id,
            'nome_cliente' => $request->nome,
            'apelido_cliente' => $request->apelido,
            'email' => $request->email,
            'estado' => 0,
            'codigo' => uniqid()
        ]);
    }
}
