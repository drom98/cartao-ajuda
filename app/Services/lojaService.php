<?php


namespace App\Services;


use App\Loja;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class lojaService
{
    public function make(Request $request)
    {
        $logo = $this->storeLogo($request);

        $loja = Loja::create([
            'user_id' => Auth::id(),
            'nome' => $request->nome,
            'logo' => $logo,
            'forma_pagamento' => $request->forma_pagamento,
            'texto_agradecimento' => $request->texto_agradecimento,
        ]);

        $user = User::find(Auth::id());
        $user->loja_id = $loja->id;

        return $loja;
    }

    private function storeLogo(Request $request)
    {
        if ($request->hasFile('logo')) {
            dd($request->logo);
            $file = $request->file('logo');
            $name = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path() . '/logotipos_lojas/', $name);
            return $name;
        }
    }
}
