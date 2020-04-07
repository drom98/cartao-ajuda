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
        //dd($request);
        $logo = $this->storeLogo($request);

        $loja = Loja::create([
            'user_id' => Auth::id(),
            'nome' => $request->nome,
            'logo' => $logo,
            'url' => $this->createUrlFromName($request->nome),
            'forma_pagamento' => $request->forma_pagamento,
            'texto_compra' => $request->texto_compra,
            'texto_agradecimento' => $request->texto_agradecimento,
        ]);

        $user = User::find(Auth::id());
        $user->loja_id = $loja->id;
        $user->save();

        return $loja;
    }

    private function storeLogo(Request $request)
    {
        if ($request->hasFile('logo')) {
            $file = $request->file('logo');
            $name = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path() . '/logotipos_lojas/', $name);
            return $name;
        }
    }

    public function createUrlFromName($name)
    {
        return strtolower(str_replace(' ', '', $name));
    }

}
