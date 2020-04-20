<?php


namespace App\Services;


use App\Cartao;
use App\Mail\CartaoComprado;
use Illuminate\Support\Facades\Mail;

class cartaoService
{
    public function create($request)
    {
        $validar = $request->validate([
            'nome' => 'required|max:90',
            'email' => 'required|email',
        ]);

        $cartao = Cartao::create([
            'opcao_id' => $request->opcao,
            'negocio_id' => $request->negocio_id,
            'nome_cliente' => $request->nome,
            'email' => $request->email,
            'estado' => 0,
            'codigo' => uniqid()
        ]);

        $this->sendEmail($request->email, $cartao);
    }

    public function sendEmail($email, $cartao)
    {
        Mail::to($email)->send(new CartaoComprado($cartao));
    }
}
