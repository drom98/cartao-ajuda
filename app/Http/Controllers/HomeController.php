<?php

namespace App\Http\Controllers;

use App\Loja;
use App\MetodoPagamento;
use App\Services\lojaService;
use App\Services\metodoPagamentoService;
use App\Services\negocioService;
use App\Services\opcaoCartaoService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    private $negocioService;
    private $opcaoCartaoService;
    private $metodoPagamentoService;

    /**
     * Create a new controller instance.
     *
     * @param negocioService $negocioService
     * @param opcaoCartaoService $opcaoCartaoService
     */
    public function __construct(negocioService $negocioService, opcaoCartaoService $opcaoCartaoService, metodoPagamentoService $metodoPagamentoService)
    {
        $this->middleware('auth');
        $this->negocioService = $negocioService;
        $this->opcaoCartaoService = $opcaoCartaoService;
        $this->metodoPagamentoService = $metodoPagamentoService;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $negocio = Auth::user()->negocio;
        $total = array();
        foreach ( $negocio->cartoes as $cartao) {
            array_push($total, $cartao->opcao_cartao->valor);
        }

        return view('frontend.home', [
            'negocio' => Auth::user()->negocio,
            'total' => array_sum($total)
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
        $this->metodoPagamentoService->update($request);

        return redirect(route('home'))->with('estado', 'Boa! Os dados foram atualizados com sucesso.');
    }
}
