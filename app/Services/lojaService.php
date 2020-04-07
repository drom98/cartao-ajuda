<?php


namespace App\Services;


use App\Loja;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class lojaService
{
    public function update(Request $request)
    {
        $loja = Auth::user()->loja;

        if($request->hasFile('logo')) {
            $logo = $this->storeLogo($request);
        } else {
            $logo = $loja->logo;
        }

        $loja->update([
            'nome' => $request->nome,
            'logo' => $logo,
            'texto_agradecimento' => $request->texto_agradecimento,
            'forma_pagamento' => $request->forma_pagamento,
            'texto_compra' => $request->texto_compra,
        ]);

        $loja->save();

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
