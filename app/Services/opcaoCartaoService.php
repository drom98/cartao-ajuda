<?php


namespace App\Services;


use App\OpcaoCartao;
use Illuminate\Support\Facades\Auth;

class opcaoCartaoService
{
    public function create($user)
    {
        $valor = 10;
        for($i = 0; $i < 3; $i++) {
            $opcaoCartao = new OpcaoCartao();
            $opcaoCartao->negocio_id = $user->negocio->id;
            $opcaoCartao->valor = $valor;

            $opcaoCartao->save();

            $valor = $valor+10;
        }

        return $opcaoCartao;
    }

    public function update($request)
    {
        $opcoes = Auth::user()->negocio->opcoes_cartoes;

        foreach ($opcoes as $key => $opcao) {
            $opcao->update([
                'valor' => $request->valor[$key],
                'descricao' => $request->descricao[$key],
            ]);
        }
    }
}
