<?php

namespace App\Http\Controllers;

use App\Services\lojaService;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    private $lojaService;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(lojaService $lojaService)
    {
        $this->middleware('auth');
        $this->lojaService = $lojaService;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('frontend.home');
    }

    public function definicoesLoja()
    {
        return view('frontend.loja');
    }

    public function adicionarLoja(Request $request)
    {
        $this->lojaService->make($request);

        return redirect(route('home'))->with('message', 'Loja configurada com sucesso.');
    }
}
