<?php


namespace App\Services;


use App\Loja;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class lojaService
{
    public function update(Request $request)
    {
        $this->validarDados($request);

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
            'iban' => $request->iban,
            'mb_way' => $request->mb_way,
            'paypal' => $request->paypal,
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

    private function validarDados($request)
    {
        //dd($request);
        return $request->validate([
            'nome' => [
                'required',
                Rule::unique('users', 'name')->ignore('user'),
                'max: 80'
                ],
            'logo' => 'nullable|file|image',
            'texto_agradecimento' => 'required',
            'texto_compra' => 'required',
            'iban' => 'nullable|size:21',
            'mb_way' => 'nullable|size:9',
            'paypal' => 'nullable|email',
        ]);
    }

}
