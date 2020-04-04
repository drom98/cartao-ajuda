<?php


namespace App\Services;


use App\Loja;
use Illuminate\Http\Request;

class lojaService
{
    public function make(Request $request)
    {
        $loja = Loja::create([
            
        ]);
    }
}
