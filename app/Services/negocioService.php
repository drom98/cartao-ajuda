<?php


namespace App\Services;


use App\Negocio;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Intervention\Image\Facades\Image;

class negocioService
{
    public function create($data, $user)
    {
        return Negocio::create([
            'user_id' => $user->id,
            'nome' => $data['nome'],
            'url' => $this->createUrlFromName($data['nome'])
        ]);
    }

    public function update($request)
    {
        $this->validarDados($request);

        $negocio = Auth::user()->negocio;

        if($request->hasFile('logo')) {
            $logo = $this->storeLogo($request);
        } else {
            $logo = $negocio->logo;
        }

        return $negocio->update([
            'nome' => $request->nome,'url' => $this->createUrlFromName($request->nome),
            'logo' => $logo,
            'texto_compra' => $request->texto_compra,
            'texto_agradecimento' => $request->texto_agradecimento,
        ]);
    }

    private function validarDados($request)
    {
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

    private function storeLogo($request)
    {
        if ($request->hasFile('logo')) {
            $file = $request->file('logo');
            $name = time() . '_' . $file->getClientOriginalName();

            $resize = Image::make($file->getRealPath())->resize('256', null, function ($constraint) {
                $constraint->aspectRatio();
            })->encode('webp', '75');
            $resize->save(public_path() . '/storage/logotipos/' . $name);

            return $name;
        }
    }

    public function createUrlFromName($name)
    {
        return strtolower(str_replace(' ', '-', $name));
    }
}
