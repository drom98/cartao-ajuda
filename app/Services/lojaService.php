<?php


namespace App\Services;


use App\Loja;
use Illuminate\Http\Request;

class lojaService
{
    public function make(Request $request)
    {
        $loja = Loja::create([
            'user_id' => Auth()::id(),
            'nome' => $request->nome,
            'logo' => $request->logo,
            'texto_agradecimento' => $request->texto_agradecimento,
        ]);

        return $loja;
    }
}
