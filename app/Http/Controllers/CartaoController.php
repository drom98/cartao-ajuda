<?php

namespace App\Http\Controllers;

use App\Cartao;
use App\Loja;
use Illuminate\Http\Request;

class CartaoController extends Controller
{
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
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create($url)
    {
        $loja = Loja::where('url', $url)->firstOrFail();

        return view('loja.index')->with('loja', $loja);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
}
