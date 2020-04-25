<?php

namespace App\Http\Controllers;

use App\Negocio;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        return view('landing.index');
    }

    public function paginaExemplo()
    {
        $negocio = Negocio::find(9);

        return view('negocio.index')->with('negocio', $negocio);
    }
}
