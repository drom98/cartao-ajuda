<?php

namespace App\Http\Controllers;

use App\Cartao;
use App\Mail\CartaoAtivado;
use App\Negocio;
use App\Services\cartaoService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CartaoController extends Controller
{

    private $cartaoService;

    public function __construct(cartaoService $cartaoService)
    {
        $this->cartaoService = $cartaoService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return void
     */
    public function store(Request $request)
    {
        $this->cartaoService->create($request);

        return view('negocio.agradecimento')->with('negocio', Negocio::find($request->negocio_id));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cartao  $cartao
     * @return \Illuminate\Http\Response
     */
    public function show(Cartao $cartao)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cartao  $cartao
     * @return \Illuminate\Http\Response
     */
    public function edit(Cartao $cartao)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cartao  $cartao
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cartao $cartao)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cartao  $cartao
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cartao $cartao)
    {
        //
    }

    public function getCodigo($id)
    {
        return response()->json(Cartao::find($id)->codigo);

    }

    public function ativarCartao($id)
    {
        $cartao = Cartao::find($id);

        $cartao->estado = 1;
        $cartao->save();

        $this->sendEmail($cartao->email, $cartao);

        return true;
    }

    public function sendEmail($email, $cartao)
    {
        Mail::to($email)->send(new CartaoAtivado($cartao));
    }
}
