<?php

namespace App\Http\Controllers;

use App\Loja;
use App\MetodoPagamento;
use App\Services\lojaService;
use App\Services\negocioService;
use App\Services\opcaoCartaoService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    private $negocioService;
    private $opcaoCartaoService;

    /**
     * Create a new controller instance.
     *
     * @param negocioService $negocioService
     * @param opcaoCartaoService $opcaoCartaoService
     */
    public function __construct(negocioService $negocioService, opcaoCartaoService $opcaoCartaoService)
    {
        $this->middleware('auth');
        $this->negocioService = $negocioService;
        $this->opcaoCartaoService = $opcaoCartaoService;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //dd(count(MetodoPagamento::all()));
        return view('frontend.home', [
            'negocio' => Auth::user()->negocio,
            'metodos_pagamento' => MetodoPagamento::all()
        ]);
    }

    public function definicoesNegocio()
    {

        return view('frontend.loja', [
            'negocio' => Auth::user()->negocio
        ]);
    }

    public function editarNegocio(Request $request)
    {
        $this->negocioService->update($request);
        $this->opcaoCartaoService->update($request);

        return redirect(route('home'))->with('message', 'Loja configurada com sucesso.');
    }
}
